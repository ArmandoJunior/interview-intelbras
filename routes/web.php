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

Route::group(['prefix' => '/'], function () {
    Route::get('calculator/{id}/index', 'CalculatorController@index');
    Route::get('calculator', 'CalculatorController@create')->name('calculator.create');
    Route::get('', 'CalculatorController@create')->name('calculator.create');
    Route::post('calculator/store', 'CalculatorController@store');
});

Route::group(['prefix' => '/admin', 'namespace' => 'Admin'], function () {
    Route::group(['prefix' => '/dashboard'],function () {
        Route::get('/customer/{id}', 'DashboardController@customers')->name('dashboard.customer');
        Route::get('budgets', 'DashboardController@budgets')->name('dashboard.budgets');
        Route::get('index', 'DashboardController@index')->name('dashboard.index');
    });
    Route::group(['prefix' => '/product'],function () {
        Route::get('index', 'ProductController@index')->name('product.index');
        Route::get('create', 'ProductController@create')->name('product.create');
        Route::post('store', 'ProductController@store')->name('product.store');
        Route::get('/{id}/edit', 'ProductController@edit')->name('product.edit');
        Route::post('/{id}/update', 'ProductController@update')->name('product.update');
    });
    Route::group(['prefix' => '/state'],function () {
        Route::get('index', 'StateController@index')->name('state.index');
        Route::get('create', 'StateController@create')->name('state.create');
        Route::post('store', 'StateController@store')->name('state.store');
        Route::get('/{id}/edit', 'StateController@edit')->name('state.edit');
        Route::post('/{id}/update', 'StateController@update')->name('state.update');
    });
});
