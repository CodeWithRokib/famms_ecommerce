<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;

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


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/product',[ProductController::class, 'index'])->name('product');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/blog',[BlogController::class, 'index'])->name('blog');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');


                                 //backend
Route::get('/dashboard', [DashboardController::class, 'index'])->name('pages.bashboard');

                                 //product route
Route::get('/add/product', [ProductController::class, 'index2'])->name('pages.product');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

                                 //Category route
Route::get('/category', [CategoryController::class, 'index'])->name('pages.category');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

                                 //Sub Category route
Route::get('/subcategory', [SubCategoryController::class, 'index'])->name('pages.subcategory');
Route::post('/subcategory', [SubCategoryController::class, 'store'])->name('subcategory.store');