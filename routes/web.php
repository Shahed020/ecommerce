<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', App\Livewire\Profile\Index::class)->name('profile.edit');
});

require __DIR__ . '/auth.php';

//Route Hooks - Do not delete//
	Route::get('products', App\Livewire\Products\Index::class)->name('products.index')->middleware('auth');
	Route::get('categories', App\Livewire\Categories\Index::class)->name('categories.index')->middleware('auth');