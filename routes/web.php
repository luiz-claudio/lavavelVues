<?php

//categories List
Route::middleware(['checkUser'])->group(function (){

    Route::get('/category/list', 'CategoriesController@index');
    Route::get('/category/destroy/{id}', 'CategoriesController@destroy');
    Route::get('/category/show/{id}', 'CategoriesController@show');
    Route::get('/category/delete/{id}', 'CategoriesController@destroy');
    Route::post('/category/update/{id}', 'CategoriesController@update');
    Route::post('/category/store', 'CategoriesController@store');
    //products list
    Route::get('/product/list', 'ProductsController@index');
    Route::get('/product/destroy/{id}', 'ProductsController@destroy');
    Route::get('/product/show/{id}', 'ProductsController@show');
    Route::get('/product/delete/{id}', 'ProductsController@destroy');
    Route::post('/product/update/{id}', 'ProductsController@update');
    Route::post('/product/store', 'ProductsController@store');

});