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

Route::get('/', function () {
    return view('home');
});
    Route::get('/all', 'BookController@index')->name('books.index');
    Route::get('/cart/{id}', 'BookController@AddtoCart')->name('books.AddtoCart');
    //Route::get('/buy/{id}', 'BookController@buy')->name('books.buy');
    Route::get('/remove/{id}', 'BookController@remove')->name('books.remove');
    Route::get('/buy/{id}', 'BuyController@buying')->name('books.buying');





Auth::routes();

Route::get('/home', 'HomeController@index');

  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/employees', 'EmployeeController@index')->name('employees.index');
    Route::get('/employees/{id}/edit','EmployeeController@edit')->name('employees.edit');
    Route::get('/employees/{id}/delete','EmployeeController@destroy')->name('employees.destroy');
    Route::get('/create','EmployeeController@create')->name('employees.create');
    Route::post('/create','EmployeeController@store')->name('employees.store');
    Route::post('/employee/update','EmployeeController@update')->name('employees.update');

  });
