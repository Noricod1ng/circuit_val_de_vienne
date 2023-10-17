<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('tours.index', [
            'tours' => Tour::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        ]);


        $request->user()->tours()->create($validated);


        return redirect(route('tours.index'));
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

        ]);



        $tour->update($validated);



        return redirect(route('tours.list'));
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
}
