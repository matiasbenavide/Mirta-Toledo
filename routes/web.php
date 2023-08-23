<?php

use GuzzleHttp\Middleware;
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

Route::get('/', function() {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');
Route::get('/productos', [App\Http\Controllers\ProductClientController::class, 'productList']);
Route::get('/productos/detalle/{categoryId}/{id}', [App\Http\Controllers\ProductClientController::class, 'productDetail']);
Route::get('/agregar-carrito/{categoryId}/{productId}', [App\Http\Controllers\ProductClientController::class, 'addToCart']);
Route::get('/remover-carrito/{categoryId}/{productId}', [App\Http\Controllers\ProductClientController::class, 'removeFromCart']);
Route::get('/eliminar-carrito/{categoryId}/{productId}', [App\Http\Controllers\ProductClientController::class, 'deleteFromCart']);
Route::get('/carrito', [App\Http\Controllers\ProductClientController::class, 'shoppingCart']);

Route::get('/detalle-compra', [App\Http\Controllers\ProductClientController::class, 'buyDetail']);
Route::post('/guardar-compra', [App\Http\Controllers\ProductClientController::class, 'saveShop']);

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::prefix('/administracion')->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.home');
        });
        // PRODUCT
        Route::get('/productos/listado', [App\Http\Controllers\Admin\ProductsController::class, 'showProducts'])->name('admin.home');
        Route::get('/productos/crear-editar/{category_id}/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'showProductCreation']);
        Route::post('/productos/creacion-edicion', [App\Http\Controllers\Admin\ProductsController::class, 'saveData']);

        Route::get('/ventas', [App\Http\Controllers\Admin\SalesController::class, 'showSales']);
        Route::get('/vacaciones', [App\Http\Controllers\Admin\VacationsController::class, 'showVacations']);
        Route::get('/configuracion', [App\Http\Controllers\Admin\ConfigurationController::class, 'showConfiguration']);
    });
});
