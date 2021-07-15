<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is your ID: '.$id .' Mr. ' .$name;
});

Route::get('/about', function () {
    return view('pages.about');
});
|
*/

Route::get('/', 'PagesController@index');
Route::get('/features', 'FeaturesController@index');
Route::get('/services', 'ServicesController@index');
Route::get('/products', 'ProductsController@index');
//Route::get('/products', 'ProductsController@products');

Route::resource('products', 'ProductsController');





