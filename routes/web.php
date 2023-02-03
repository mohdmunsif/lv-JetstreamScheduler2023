<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Livewire\CategoriesList;
use App\Http\Livewire\EntitiesList;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::group(['middleware' => 'auth'], function () {
    Route::view('/dashboard','dashboard')->name('dashboard');

    Route::get('entities', EntitiesList::class)->name('entities.index');
    // Route::get('categories', CategoriesList::class)->name('categories.index');

    // Route::get('orders', OrdersList::class)->name('orders.index');
    // Route::get('orders/create', OrderForm::class)->name('orders.create');
    // Route::get('orders/{order}', OrderForm::class)->name('orders.edit');

    // Route::get('products', ProductsList::class)->name('products.index');
    // Route::get('products/create', ProductForm::class)->name('products.create');
    // Route::get('products/{product}', ProductForm::class)->name('products.edit');
});
