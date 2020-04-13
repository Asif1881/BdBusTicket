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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'FrontendController@index')->name('bd-bus.index');
Route::get('view-seats/{id}', 'FrontendController@view_seats')->name('view.seats');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('all-seats','CustomerSeatController');

/*Route::get('/admin', function () {
    return view('admin');
});*/

Route::group( [ 'middleware' => ['auth','admin']], function() {
    Route::resource('admin', 'AdminController');
    Route::get('all-users','AdminController@users')->name('all.users');
    Route::get('ticket-details','AdminController@ticket_price')->name('ticket.price');
    Route::get('add-ticket','AdminController@add_ticket')->name('add.ticket');
    Route::post('add-ticket-details','AdminController@add_ticket_details')->name('add.ticket.details');
    Route::get('buy-ticket','AdminController@buy_ticket')->name('buy.ticket');
});

Route::group( [ 'middleware' => ['auth','customer']], function() {
    Route::resource('seat-booking', 'CustomerSeatController');
});
