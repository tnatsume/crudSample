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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@getIndex')->name('home');


Route::group(['prefix' => 'student'],function(){
    Route::get('list','StudentController@getIndex');
    Route::get('new','StudentController@new_index');
    ROute::patch('new','StudentController@new_confirm');
    Route::post('new','StudentController@new_finish');

    Route::get('edit/{id}','StudentController@edit_index');
    Route::patch('edit/{id}','StudentController@edit_confirm');
    Route::post('edit/{id}','StudentCOntroller@edit_finish');

    Route::post('delete/{id}','StudentController@delete');
});