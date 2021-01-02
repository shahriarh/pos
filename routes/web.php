<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

##depo
Route::get('/depo/create', 'DepoController@create')->name('depo.create');
Route::get('/depo/list', 'DepoController@index')->name('depo.list');


#category
Route::get('/create', 'CategoryController@create')->name('category.create');
Route::post('/create', 'CategoryController@store');
Route::get('/category/list', 'CategoryController@index')->name('category.list');
    #packet
    Route::get('/packet/create', 'PacketSizeController@create')->name('packet.create');
    Route::post('/packet/create', 'PacketSizeController@store');
    Route::get('/packet/list', 'PacketSizeController@index')->name('packet.list');

##product
Route::get('/product/create', 'ProductController@create')->name('product.add');
Route::post('/product/create', 'ProductController@store');

Route::get('/product/list', 'ProductController@index')->name('product.list');

#stock
Route::get('/stock/add', 'StockController@create')->name('stock.create');
Route::post('/stock/add', 'StockController@store');
Route::get('/stock/report', 'StockController@report')->name('stock.report');
//Route::get('/category/list', 'CategoryController@index')->name('stock.list');

#sales
Route::get('/addsale', 'SaleController@create')->name('addsale');

Route::get('/depo/list', 'SaleController@index')->name('depo.list');


#accounts
Route::get('/accounts', 'AccountsController@accounts')->name('accounts');
Route::get('/monthlysalereport', 'AccountsController@monthlysalereport')->name('monthlysalereport');

Route::get('/report', 'AccountsController@report')->name('report');
