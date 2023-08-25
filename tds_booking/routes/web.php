<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitePulicController;
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

Route::get('/hotel/{id}/chambres', [SitePulicController::class, 'show_room'])->name('root_show_room_hotel');

Route::get('/hotel/{id}/chambres/{id_chambre}/details', [SitePulicController::class, 'show'])->name('root_show_detail_romm_hotel');

Route::get('locale/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale.switch');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
