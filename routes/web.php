<?php

use App\Http\Controllers\AllProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('productos', ProductoController::class);

Route::get('/productos-inicio', [WebController::class, 'index'])->name('productos.inicio');
Route::get('/contactanos', [WebController::class, 'contact'])->name('contactanos');
Route::get('/historia', [WebController::class, 'historia'])->name('historia');
