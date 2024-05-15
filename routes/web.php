<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.home.home');
})->name('home');


Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/product',[ProductController::class, 'index'])->name('product');
Route::get('/blog',[BlogController::class, 'index'])->name('blog');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');