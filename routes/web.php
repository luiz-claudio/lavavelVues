<?php

//categories List

Route::prefix('admin')->middleware(['checkUser'])->group(function (){

    Route::get('/category/list', 'CategoriesController@index');
    Route::get('/category/destroy/{id}', 'CategoriesController@destroy');
    Route::get('/category/show/{id}', 'CategoriesController@show');
    //Route::get('/category/delete/{id}', 'CategoriesController@destroy');
    Route::post('/category/update/{id}', 'CategoriesController@update');
    Route::post('/category/store', 'CategoriesController@store');
    Route::get('/category/register', 'CategoriesController@newCategory');
 //products
    Route::get('/product/destroy/{id}', 'ProductsController@destroy');
    Route::get('/product/show/{id}', 'ProductsController@show');
    Route::get('/product/delete/{id}', 'ProductsController@destroy');
    Route::post('/product/update/{id}', 'ProductsController@update');
    Route::post('/product/store', 'ProductsController@store');
    Route::get ('product/register','ProductsController@newProduct');
            //users Manager
    Route::post('/users/store',   'Usercontroller@store');
    Route::get('/users/list',     'Usercontroller@index');
    Route::get('/users/register','Usercontroller@newUsers');
    //import
    Route::get ('product/import','ImportController@import');
    Route::post('product/setimport','ImportController@saveList');
    Route::get('product/import/list','ImportController@index');

});

Route::get('/','ProductsController@index')->middleware(['checkUser']);
//Auth list
Auth::routes();
Route::get('logout','Auth\LoginController@logout');




