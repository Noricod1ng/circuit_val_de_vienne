<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categoryFilter = $request->input('category');

        $query = Tour::with('user', 'category')->orderBy('time', 'asc');

        if ($categoryFilter != '') {
            $query->where('category_id', $categoryFilter);
        }

        $tours = $query->cursorPaginate(15);

        $categories = Category::pluck('name', 'id')->prepend('TOUS', '');

        return view('tours.list', compact('tours', 'categories', 'categoryFilter'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('tours.index', [
            'tours' => Tour::with('user')->latest()->get(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'time' => 'required|regex:/^\d{2}:\d{2}:\d{3}$/',
            'car' => 'required|string|max:255',
            'session_number' => 'required|numeric|digits:12',
            'category_id' => 'required|numeric',
        ]);


        $request->user()->tours()->create($validated);


        return redirect(route('tours.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour): View
    {
        $this->authorize('update', $tour);


        return view('tours.edit', [
            'tour' => $tour,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour): RedirectResponse
    {
        $this->authorize('update', $tour);


        $validated = $request->validate([

            'car' => 'required|string|max:255',
            'category_id' => 'required|numeric',
        ]);


        $tour->update($validated);


        return redirect(route('tours.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour): RedirectResponse
    {
        $this->authorize('delete', $tour);


        $tour->delete();


        return redirect(route('tours.list'));
    }

    public function showByUser(Request $request): View
    {
        $user = auth()->user();

        $categoryFilter = $request->input('category');

        $query = Tour::with('user', 'category')->orderBy('time', 'asc');

        if ($categoryFilter != '') {
            $query->where('category_id', $categoryFilter);
        }

        $query->where('user_id', $user->id);

        $tours = $query->cursorPaginate(15);

        $categories = Category::pluck('name', 'id')->prepend('TOUS', '');

        return view('tours.list', compact('tours', 'categories', 'categoryFilter'));
    }

}
