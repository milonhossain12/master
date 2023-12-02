<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('dashbord', [App\Http\Controllers\Admin\DashbordController::class, 'index'])->name('admin.dashbord');

    route::resource('slider', SliderController::class);

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
