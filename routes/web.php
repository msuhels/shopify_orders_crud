<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopifyController;

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

//Route::get('/product', 'Dashboard@index');
Route::get('/product', [DashboardController::class, 'index']);
                //->middleware('guest');

//Get all orders                
Route::get('/order', [OrderController::class, 'index']);
Route::get('/update-order-status', [OrderController::class, 'update_order_status']);
Route::get('/update-order-note', [OrderController::class, 'update_order_note']);



Route::get('/crud-list', 'App\Http\Controllers\OrderController@list')->name('list');
Route::get('/get-crud-list', 'App\Http\Controllers\OrderController@getList');
Route::get('/filter', 'App\Http\Controllers\OrderController@order_filter_by_status');
//Route::get('/crud-list', 'App\Http\Controllers\OrderController@showlist')->name('list');
// Route::post('/delete-crud', 'App\Http\Controllers\CrudController@delete');
// Route::post('/add-crud-data', 'App\Http\Controllers\CrudController@add');
// Route::post('/get-crud-record', 'App\Http\Controllers\CrudController@getRecoredByID');
// Route::post('/update-crud-data', 'App\Http\Controllers\CrudController@update');



Route::get('/shopify', [ShopifyController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
