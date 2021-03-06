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

Route::get('/','HomeController@index')->name('home');
Route::get('chitiet/{id}','HomeController@chitiet');
Route::get('theloai/{id}','HomeController@theloai');
Route::get('timkiemApi', 'HomeController@hienthi');
Route::post('timkiem', 'HomeController@timkiem');
Route::get('demo', function() {
    return view('demoApi');
});

///////////////////////////////////////////////////////////
Auth::routes(['verify' => true]);
Route::group(['prefix' => 'admin','middleware'=>'verified'], function() {
	Route::get('home', 'admin\homeController@index');
	Route::get('logout','Auth\LoginController@logout');
	Route::get('reset','Auth\ResetPasswordController@reset');
	Route::put('rspass/{id}', 'Auth\ResetPasswordController@rspass');
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
//User
	Route::group(['prefix' => 'user','middleware'=>'rule'], function() {
	    Route::get('dsquantri','admin\quantri@dsquantri');
	    Route::get('users/{id}','admin\quantri@xoa');
	});
   
   

});