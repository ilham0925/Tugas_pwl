<?php

use Illuminate\Routing\RouteGroup;
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
    return view('pengguna.login');
});



Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');

Route::get('/registrasi', 'LoginController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi', 'LoginController@simpanregistrasi')->name('simpanregistrasi');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');



Route::group(['middleware' => ['auth']], function(){

    Route::get('/beranda','BerandaController@index');
    route::get('/createproduct', 'BerandaController@createproduct')->name('createproduct');
    route::get('/dataproduct', 'BerandaController@dataproduct')->name('dataproduct');

});
// user
Route::get('/data-user','UserController@index')->name('data-user');
Route::get('/create-user','UserController@create')->name('create-user');
Route::post('/simpan-user','UserController@store')->name('simpan-user');
Route::Get('/edit-user/{id}','UserController@edit')->name('edit-user');
Route::post('/update-user/{id}','UserController@update')->name('update-user');
Route::Get('/delete-user/{id}','UserController@destroy')->name('delete-user');

// Product
Route::get('/data-product','ProductController@index')->name('data-product');
Route::get('/create-product','ProductController@create')->name('create-product');
Route::post('/simpan-product','ProductController@store')->name('simpan-product');
Route::Get('/edit-product/{id}','ProductController@edit')->name('edit-product');
Route::post('/update-product/{id}','ProductController@update')->name('update-product');
Route::Get('/delete-product/{id}','ProductController@destroy')->name('delete-product');
Route::get('/cetak-product','ProductController@cetakproduct')->name('cetak-product');




// Categorie
Route::get('/data-categorie','CategorieController@index')->name('data-categorie');
Route::Get('/edit-categorie/{id}','CategorieController@edit')->name('edit-categorie');
Route::post('/update-categorie/{id}','CategorieController@update')->name('update-categorie');



// Brand

Route::get('/data-brand','BrandController@index')->name('data-brand');
Route::Get('/edit-brand/{id}','BrandController@edit')->name('edit-brand');
Route::post('/update-brand/{id}','BrandController@update')->name('update-brand');


// Data masuk
Route::get('/data-masuk','MasukController@index')->name('data-masuk');







