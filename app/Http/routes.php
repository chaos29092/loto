<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@index');
Route::get('/contact-service','HomeController@contact_service');
Route::get('/submit_ok','HomeController@submit_ok');
Route::get('/company','HomeController@company');

Route::get('/products','HomeController@categories');
Route::get('/products/category/{id}','HomeController@category');
Route::get('/products/{id}','HomeController@product');
Route::get('/products/{id}/models','HomeController@models');

Route::get('/news','HomeController@news_list');
Route::get('/news/cases','HomeController@cases_list');
Route::get('/news/{id}','HomeController@new_detail');

Route::get('/downloads','HomeController@downloads');
Route::get('/downloads/operating','HomeController@operating');
Route::get('/downloads/brochures','HomeController@brochures');
Route::get('/downloads/miscellaneous','HomeController@miscellaneous');
Route::get('/sitemap.xml','HomeController@sitemap');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'ProductController@index');
    Route::get('/admin/categories', 'CategoryController@index');

    Route::resource('/admin/product', 'ProductController');
    Route::resource('/admin/category', 'CategoryController');
    Route::resource('/admin/model','ModelController');
    Route::resource('/admin/new','TheNewController');
    
    Route::get('/admin/model/create/{id}','ModelController@create');
});
