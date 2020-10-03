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
Route::get('/logout', 'Auth\LoginController@logout');

// Страници изискващи логнат потребител
Route::middleware(['auth'])->group(function () {
    // Табло на потребителя
    Route::get('/home', 'ProfileController@index')->name('home');
    
    // Редактиране на профил
    Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
    Route::post('/profile/edit', 'ProfileController@update')->name('profile.update');

    // Примерна страница
    Route::get('/logged_example', function () {
        return view('logged_example');
    })->name('logged_example');

    // ->middleware('role:assistant')
    
});

// Асистенти
Route::middleware(['role:assistant'])->group(function () {
    Route::prefix('assistant')->group(function () {
        Route::resource('/', 'AssistantController');
    });
});