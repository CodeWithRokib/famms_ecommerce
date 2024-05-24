<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\OrderController;
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


Route::get('/register',[UserController::class, 'loadRegister']);
Route::post('/register',[UserController::class, 'register'])->name('register.store');
Route::get('/login',[UserController::class,'loadLogin'])->name('login.page');
Route::post('/login',[UserController::class,'userLogin'])->name('login');

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/product',[ProductController::class, 'index'])->name('product');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/blog',[BlogController::class, 'index'])->name('blog');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');




// Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
// Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
// Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::middleware(['auth'])->group(function () {
    Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');


    Route::post('/orders', [OrderController::class, 'createOrder'])->name('orders.create');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

    Route::post('/products/{product}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist', [WishlistController::class, 'store'])->name('wishlist.store');
    Route::delete('/wishlist/{id}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');

});

Route::middleware(['auth', 'role:admin,super admin'])->group(function () {
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
});