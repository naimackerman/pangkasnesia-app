<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PartnerController;
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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['admin'])->group(function () {
    Route::resource('services', ServiceController::class);

    Route::resource('products', ProductController::class);

    Route::resource('members', MemberController::class);

    Route::resource('partners', PartnerController::class);
});

Route::middleware(['partner'])->group(function () {
    Route::resource('services', ServiceController::class);

    Route::resource('products', ProductController::class);
});

// Route::get('/services', '\App\Http\Controllers\ServiceController@index')->name('services.index');
// Route::get('/services/create', '\App\Http\Controllers\ServiceController@create')->name('services.create');
// Route::post('/services', '\App\Http\Controllers\ServiceController@store')->name('services.store');
// Route::get('/services/{id}', '\App\Http\Controllers\ServiceController@show')->name('services.show');
// Route::get('/services/{id}/edit', '\App\Http\Controllers\ServiceController@edit')->name('services.edit');
// Route::patch('/services/{id}', '\App\Http\Controllers\ServiceController@update')->name('services.update');
// Route::delete('/services/{id}', '\App\Http\Controllers\ServiceController@destroy')->name('services.destroy');

// Route::get('/products', '\App\Http\Controllers\ProductController@index')->name('products.index');
// Route::get('/products/create', '\App\Http\Controllers\ProductController@create')->name('products.create');
// Route::post('/products', '\App\Http\Controllers\ProductController@store')->name('products.store');
// Route::get('/products/{id}', '\App\Http\Controllers\ProductController@show')->name('products.show');
// Route::get('/products/{id}/edit', '\App\Http\Controllers\ProductController@edit')->name('products.edit');
// Route::patch('/products/{id}', '\App\Http\Controllers\ProductController@update')->name('products.update');
// Route::delete('/products/{id}', '\App\Http\Controllers\ProductController@destroy')->name('products.destroy');

// Route::get('/members', '\App\Http\Controllers\MemberController@index')->name('members.index');
// Route::get('/members/create', '\App\Http\Controllers\MemberController@create')->name('members.create');
// Route::post('/members', '\App\Http\Controllers\MemberController@store')->name('members.store');
// Route::get('/members/{id}', '\App\Http\Controllers\MemberController@show')->name('members.show');
// Route::get('/members/{id}/edit', '\App\Http\Controllers\MemberController@edit')->name('members.edit');
// Route::patch('/members/{id}', '\App\Http\Controllers\MemberController@update')->name('members.update');
// Route::delete('/members/{id}', '\App\Http\Controllers\MemberController@destroy')->name('members.destroy');

// Route::get('/partners', '\App\Http\Controllers\PartnerController@index')->name('partners.index');
// Route::get('/partners/create', '\App\Http\Controllers\PartnerController@create')->name('partners.create');
// Route::post('/partners', '\App\Http\Controllers\PartnerController@store')->name('partners.store');
// Route::get('/partners/{id}', '\App\Http\Controllers\PartnerController@show')->name('partners.show');
// Route::get('/partners/{id}/edit', '\App\Http\Controllers\PartnerController@edit')->name('partners.edit');
// Route::patch('/partners/{id}', '\App\Http\Controllers\PartnerController@update')->name('partners.update');
// Route::delete('/partners/{id}', '\App\Http\Controllers\PartnerController@destroy')->name('partners.destroy');

require __DIR__.'/auth.php';