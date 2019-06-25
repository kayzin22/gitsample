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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('Dashboard',[
	'uses'=>'dataController@test',
	'as'=>"dashboard"
]);
Route::get('Blah',[
	'uses'=>'blahController@blahfunction',
	'as'=>"blah"
]);
Route::post('/Blahpost',[
	'uses'=>'blahController@postForm',
	'as' => 'data'
]);
Route::post('/user',[
   'uses'=>'dataController@postUser',
   'as'=>'aa'
]);
Route::get('/About',[
	'uses'=>'aboutController@about',
	'as'=>'about'
]);
Route::post('/About/save',[
	'uses'=>'aboutController@aboutPostForm',
	'as'=>'about_save'
]);
Route::get('/delete/{id}',[
	'uses'=>'blahController@getDelete',
	'as'=>'delete'
]);
Route::post('/update/{id}',[
	'uses'=>'blahController@getUpdate',
	'as'=>'update'
]);
Route::get('Training',[
	'uses'=>'TrainingController@training',
	'as'=>"training"
]);
Route::post('/Training/save',[
	'uses'=>'TrainingController@trainingPostForm',
	'as'=>'trainingPost'
]);
Route::get('/Foundation',[
	'uses'=>'FoundationController@foundation',
	'as'=>'foundation'
]);