<?php
use App\Http\Controllers\ProductController;
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
// route yang pertama
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// tuliskan yang kedua
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route:: get ('/product/{product}/edit',[ProductController::class, 'edit'])->name('product.edit');
// Route:: get ('/product/{product}/update',[ProductController::class, 'update'])->name('product.update');