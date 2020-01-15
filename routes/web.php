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



    
    



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/sudents','SudentController@index');
Route::resource('subjects','SubjectController');
Route::resource('exams','ExamController');
Route::resource('joins','JoinController');
Route::get('pdf_stu', 'SudentController@pdf');
Route::get('excel_stu', 'SudentController@export');
Route::get('/pdf_sub', 'SubjectController@pdf');
Route::get('excel_sub', 'SubjectController@export');
Route::get('pdf_result','JoinController@pdf');
Route::get('/', 'IntroController@index')->name('intro.index');
// Route::get('/post/{slug}', 'IntroController@show')->name('intro.index');
Route::get('/newwebsite', 'NewWebsiteController@index');
Route::get('/post/{slug}', 'PostController@show')->name('post');
Route::get('/corevalues', 'CoreValueController@index')->name('core.index');
Route::get('/bpm', 'BpmController@index')->name('bpm');
Route::get('/nmefr', 'NmefrvalueController@index')->name('nmefr');
Route::get('/team', 'TeamController@get')->name('teams');
Route::get('/slide', 'SlideController@index')->name('slide');
Route::get('/teamsinglepage', 'TeamsinglePageController@index');
Route::get('/whatwedo', 'WhatWeDoController@index');
// if (!Request::is('admin')){
Route::get('{slug}', 'PagesController@show')->name('team');
// }


