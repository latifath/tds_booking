<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitePulicController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\LocalizationController;

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
//     return view('welcome');
// });

Route::get('/', [SitePulicController::class, 'index'])->name('root_index');

Route::get('/hotels', [SitePulicController::class, 'index_hotel'])->name('root_index_hotels');

Route::get('/hotel/{slug}', [SitePulicController::class, 'show_hotel'])->name('root_show_hotel');

Route::get('/hotel/{slug}/chambres', [SitePulicController::class, 'show'])->name('root_show_romm_hotel');

Route::get('/search', [SitePulicController::class, 'search'])->name('root_hotel_search');

Route::post('/verifier-disponibilite', [ReservationController::class, 'verifierDisponibilite'])->name('root_verifier_disponibilite');

Route::get('/reservation', [ReservationController::class, 'reservation'])->name('root_chambre_reservation');

Route::get('se-connecter', [UserController::class, 'connexion'])->name('root_auth_login')->middleware("guest");

Route::get('s-inscrire', [UserController::class, 'inscription'])->name('root_auth_register')->middleware("guest");

Route::get('se-deconnecter', [UserController::class, 'deconnexion'])->name('root_deconnexion');



Route::get('locale/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale.switch');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
