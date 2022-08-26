<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserFormController;
use App\Models\ArtistFormController;
use App\Models\MusicFormController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/User', [UserFormController::class, 'index']);


Route::get('/Artist', [ArtistFormController::class, 'index']);

Route::get('/Music', [MusicFormController::class, 'index']);

