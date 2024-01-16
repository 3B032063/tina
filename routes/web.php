<?php

use App\Admin\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderController;



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


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home',[HomeController::class, 'login_index'])->middleware('auth')->name('home.login_index');
Route::get('/cart', [CartItemController::class, 'index'])->name('cart.index');
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/admin/users', [UserController::class, 'index']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');


//商品相關路由
Route::pattern('id' , '[0-9]+');
Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/{product}',[ProductController::class, 'show'])->name('product.show');


//訂單
Route::get('/order',[OrderController::class,'index'])->name('order.index');
//Route::get('/', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//身分驗正
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
