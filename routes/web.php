<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/edit-profile','ProfileController@edit');
Route::patch('/edit-profile','ProfileController@update');


//Route::view('/theme', 'layouts.header');
Route::view('/dashboard', 'dashboard')->middleware('auth');

//Route::resource('dealer', 'DealerInfoController');

Route::get('/dealer', 'DealerInfoController@index')->name('dealer.index');
Route::get('/dealer/create','DealerInfoController@create')->name('dealer.create');
Route::post('/dealer','DealerInfoController@store')->name('dealer.store');
Route::get('/dealer/show','DealerInfoController@show')->name('dealer.show');
//Route::get('/dealer/{dealer}/edit','DealerInfoController@edit');
//Route::patch('/dealer/{dealer}','DealerInfoController@update');
//Route::delete('/dealer/{dealer}','DealerInfoController@destroy');

Route::post('/sales/store','SalesController@store')->name('sales.store');



Route::get('/corporate', 'CorporateInfoController@index')->name('corporate.index');
Route::get('/corporate/create','CorporateInfoController@create')->name('corporate.create');
Route::post('/corporate','CorporateInfoController@store')->name('corporate.store');
Route::get('/corporate/show','CorporateInfoController@show')->name('corporate.show');

Route::post('/corporate-sales/store','CorporateSalesController@store')->name('corporate_sales.store');



Route::get('/retailer', 'RetailerInfoController@index')->name('retailer.index');
Route::get('/retailer/create','RetailerInfoController@create')->name('retailer.create');
Route::post('/retailer','RetailerInfoController@store')->name('retailer.store');
Route::get('/retailer/show','RetailerInfoController@show')->name('retailer.show');

Route::post('/retailer-sales/store','RetailerSalesController@store')->name('retailer_sales.store');



Route::get('/other', 'OtherInfoController@index')->name('other.index');
Route::get('/other/create','OtherInfoController@create')->name('other.create');
Route::post('/other','OtherInfoController@store')->name('other.store');
Route::get('/other/show','OtherInfoController@show')->name('other.show');

Route::post('/other-sales/store','OtherSalesController@store')->name('other_sales.store');
