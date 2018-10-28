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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::namespace('Home')->group(function (){
    Route::get('/','IndexController@index')->name('/');
    Route::get('case','CaseController@index')->name('case');
    Route::get('case_info','CaseController@info_view')->name('case.info');
    Route::get('contact','ContactController@index')->name('contact');
    Route::get('partner','PartnerController@index')->name('partner');
    Route::get('about','AboutController@index')->name('about');
    Route::get('jobs','JobsController@index')->name('jobs');
    Route::get('news','NewsController@index')->name('news');
});