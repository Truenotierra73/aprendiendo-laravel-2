<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $nombre = 'Agustin';
//     // Pasando parámetros
//     // return view('home')->with('nombre', $nombre);
//     // return view('home')->with(['nombre' => $nombre]);
//     // return view('home', ['nombre' => $nombre]);
//     return view('home', compact('nombre')); // ['nombre' => $nombre]
// })->name('home');

// Route::view('/', 'home', ['nombre' => 'Agustin'])->name('home');
Auth::routes();

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [MessagesController::class, 'store'])->name('contact.store');

// Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
// Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
// Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
// Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
// Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
// Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
// Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
// Route::view('/portfolio', 'portfolio', compact('portfolios'))->name('portfolio');

Route::resource('projects', ProjectController::class);
