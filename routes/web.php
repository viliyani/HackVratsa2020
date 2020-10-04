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

Route::view('/', 'welcome')->name('welcome');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'ProfileController@index')->name('home');

    Route::resource('profile', 'ProfileController');

    Route::get('orders/pending', 'OrderController@pending')->name('orders.pending');
    Route::resource('orders', 'OrderController');
});

Route::middleware(['role:assistant'])->group(function () {
    Route::prefix('manage')->group(function () {
        Route::get('/', 'Manage\ManageController@index');
        Route::get('/dashboard', 'Manage\ManageController@dashboard')->name('manage.dashboard');
        Route::resource('/users', 'Manage\UserController', ['except' => 'destroy']);


        // Roles
        Route::resource('/roles', 'Manage\RoleController');


        // Categories
        Route::resource('/categories', 'Manage\CategoryController', [
            'as' => 'manage',
            'except' => ['create', 'show']
        ]);
    });
});


Route::middleware(['role:quarantined'])->group(function () {

    Route::get('/quarantined/my_requests', 'QuarantinedController@myRequests')->name('quarantined.my_requests');

    Route::get('/quarantined/make_request', 'QuarantinedController@makeRequestForm')->name('quarantined.make_request');
    Route::post('/quarantined/make_request', 'QuarantinedController@makeRequestPost')->name('quarantined.make_request.post');
});
