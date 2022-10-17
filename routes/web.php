<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Admin;

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
    return view('home');
});

Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('rooms', RoomController::class);

Route::middleware(["auth", "role:Admin"])->group(function () {

    Route::controller(Admin\HomeController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('', 'index')->name('index');
    });

});
