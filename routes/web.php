<?php

use Illuminate\Support\Facades\Route;

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

auth()->onceUsingId(1);

Route::controller(\App\Http\Controllers\TodoController::class)->group(function (){
    Route::get('/' , 'index')->name('index');
    Route::get('/show/{todo}' , 'show')->name('show');
    Route::get('/edit/{todo}' , 'edit')->name('edit');
    Route::put('/update/{todo}' , 'update')->name('update');
    Route::get('/create' , 'create')->name('create');
    Route::post('/store' , 'store')->name('store');
});
