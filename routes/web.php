<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
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
})->name('dashboard')->middleware('admin');

Route::get('/membership', function () {
    return view('membership');
})->name('membership')->middleware('member');

Route::get('/partnership', function () {
    return view('partnership');
})->name('partnership')->middleware('partner');

Route::resource('products', ProductController::class);

Route::resource('services', ServiceController::class);

// Auth::routes();
// Route::get('/partner', 'PartnerController@index')->name('partner')->middleware('partner');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
// Route::get('/member', 'MemberController@index')->name('member')->middleware('member');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     Route::get('/membership', function () {
//         return view('membership');
//     })->name('membership');

//     Route::get('/partnership', function () {
//         return view('partnership');
//     })->name('partnership');

//     Route::resource('products', ProductController::class);

//     Route::resource('services', ServiceController::class);
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::resource('products', ProductController::class);


require __DIR__.'/auth.php';
