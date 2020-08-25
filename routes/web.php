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

/**
 * Change language
 */
Route::group(['middleware' => 'locale'], function () {
    Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
});

/**
 * Show Task Dashboard
 */
Route::get('/', 'TaskController@index')->name('index');

/**
 * Add New Task
 */
Route::post('/task', 'TaskController@postTask')->name('addtask');

<<<<<<< HEAD
/**
 * Delete Task
 */
Route::delete('/task/{id}', 'TaskController@deleteTask')->name('deletetask');
=======
>>>>>>> 35fcdf7... handle add task
