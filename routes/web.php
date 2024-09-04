<?php

use App\Http\Controllers\BilletController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/index', [IndexController::class, 'index']);

// Route::get('/movie-list', function () {
//     return view("movie-list");
// });

// Route::get('/movie-grid', function () {
//     return view("movie-grid");
// });
Route::view('/movie-list', 'movie-list');
Route::view('/movie-grid', 'movie-grid');

Route::get('/movie-{i}', function ($i) {
    return view("details/movie-$i");
});

Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'store']);

Route::middleware('auth')->group(function () {
    // routes qui nécessitent une authentification
    Route::get('/billets', [BilletController::class, 'index']);
    Route::post('/billets', [BilletController::class, 'store'])->name('envoi');
});

// Créer une interface affichant le programme des films (Titre du film, Photo
// de couverture, Catégorie, Prix, Date et Heure de diffusion)

Auth::routes();

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

// Route::get('myPDF', [PDFController::class, 'generatePDF']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
