<?php

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

// Начална страница
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Автентикация
Auth::routes();

// Страници изискващи логнат потребител
Route::middleware(['auth'])->group(function () {
    // Табло на потребителя
    Route::get('/home', 'HomeController@index')->name('home');

    // Примерна страница
    Route::get('/logged_example', function () {
        return view('logged_example');
    })->name('logged_example');
    
});