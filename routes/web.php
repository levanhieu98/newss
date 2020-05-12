<?php

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

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();
Route::group(['prefix' => 'admin'], function() {
	Route::get('home', 'HomeController@index')->name('home');
	Route::get('logout','Auth\LoginController@logout');
//Nhom tin
	Route::group(['prefix' => 'nhomtin','middleware'=>'auth'], function() {
		Route::get('dsnhomtin','admin\nhomtinController@dsnhomtin');
		Route::get('themnhomtin','admin\nhomtinController@themnhomtin');
		Route::post('dulieuthem','admin\nhomtinController@dulieuthem' );
		Route::get('suanhomtin/{idnt}','admin\nhomtinController@suanhomtin');
		Route::put('dulieusua/{idnt}','admin\nhomtinController@dulieusua');
		Route::get('xoanhomtin/{id}','admin\nhomtinController@xoanhomtin');
	});

//Loai tin
	Route::group(['prefix' => 'loaitin','middleware'=>'auth'], function() {
		Route::get('dsloaitin','admin\loaitinController@dsloaitin');
		Route::get('themloaitin','admin\loaitinController@themloaitin');
		Route::post('dulieuthem','admin\loaitinController@dulieuthem');
		Route::get('sualoaitin/{id}','admin\loaitinController@sualoaitin');
		Route::put('dulieusua/{idlt}','admin\loaitinController@dulieusua');
		Route::get('xoaloaitin/{idlt}','admin\loaitinController@xoaloaitin');
	});
//Tin
	Route::group(['prefix' => 'tin','middleware'=>'auth'], function() {
		Route::get('dstin','admin\tinController@dstin');
		Route::get('xoatin/{idtin}/{idlt}','admin\tinController@xoatin');
		Route::get('suatin/{id}','admin\tinController@suatin');
		Route::put('dulieusua/{id}','admin\tinController@dulieusua');
		Route::get('themtin','admin\tinController@themtin');
		Route::post('dulieuthem','admin\tinController@dulieuthem');
	});


});