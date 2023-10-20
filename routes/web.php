<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourController;
use App\Models\Tour;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/presentation', function () {
    return view('presentation');
})->name('presentation');

Route::get('/all_times', function () {
    $tours = Tour::with('user')->orderBy('time')->cursorPaginate(30);
    return view('tours.list', ['tours' => $tours]);
})->name('tours.list');

Route::get('/my_times', function () {
    $user = auth()->user();
    $tours = Tour::where('user_id', $user->id)->latest()->cursorPaginate(30);

    return view('tours.list', ['tours' => $tours]);
})->name('my_times')->middleware('auth');

Route::resource('tours', TourController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
