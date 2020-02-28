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

Route::get('/','shoesController@index');

Route::resource('shoes', 'shoesController');

//carrito de compras

Route::get('/car/show',[ 
	'as'=>'car-show',
	'uses'=>'carController@show'
]);

Route::get('car/add/{shoes}',[ 
	'as'=>'car-add',
	'uses'=>'carController@add'
]);
Route::get('car/delete/{shoes}',[ 
	'as'=>'car-delete',
	'uses'=>'carController@delete'
]);
Route::get('car/trash',[ 
	'as'=>'car-trash',
	'uses'=>'carController@trash'
]);
Route::get('car/update/{shoes}/{quatity}',[ 
	'as'=>'car-update',
	'uses'=>'carController@update'
]);

Route::get('order-detail',[ 
	'as'=>'order-detail',
	'uses'=>'carController@orderDetail'
]);


