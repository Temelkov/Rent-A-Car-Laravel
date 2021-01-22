<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('locations', 'LocationsController');
Route::resource('cars', 'CarsController');
Route::resource('user', 'UserController');


Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/user', [UserController::class, 'update'])->name('user');
//Route::get('/car', [CarsController::class, 'index'])->name('car');
//Route::get('/location', [LocationsController::class, 'index'])->name('locations');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
