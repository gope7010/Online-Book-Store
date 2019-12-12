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
    return view('welcome');
});
    
Auth::routes();

    //Route::get('/home', 'HomeController@index');
    Route::get('/home', 'BookController@index')->name('books.index');
    Route::get('/cart/{id}', 'BookController@AddtoCart')->name('books.AddtoCart');
    //Route::get('/buy/{id}', 'BookController@buy')->name('books.buy');
    Route::get('/remove/{id}', 'BookController@remove')->name('books.remove');
    Route::get('/buy/{id}', 'BuyController@buying')->name('books.buying');


  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/books', 'EmployeeController@index')->name('employees.index');
    Route::get('/books/{id}/edit','EmployeeController@edit')->name('employees.edit');
    Route::get('/books/{id}/delete','EmployeeController@destroy')->name('employees.destroy');
    Route::get('/create','EmployeeController@create')->name('employees.create');
    Route::post('/create','EmployeeController@store')->name('employees.store');
    Route::post('/book/update','EmployeeController@update')->name('employees.update');

  });
