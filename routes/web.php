<?php
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/products', [PagesController::class, 'products'])->name('products');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('facebook', [PagesController::class, 'facebook'])->name('facebook');