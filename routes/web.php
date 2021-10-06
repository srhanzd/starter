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

//Route::get('/', function () {
//    $data=[];
//    $data['id']=5;
//    $data['name']='srhan the king';
//    return view('admin\welcome',$data);
//});
//Route::get('home','Admin\AdminController@get_index');
//Route::get('about','Admin\AdminController@about');
//Route::get('welcome','Admin\AdminController@welcome');

//Route::get('/test1', function () {
//   return 'welcom';
//});
//
////rout parametrs
//
//Route::get('/show-number/{id}', function ($id) {
//    return $id;
//})->name('a');
//Route::get('/show-string/{id?}', function () {
//    return 'srhan';
//})->name('b');
//rout name

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/', 'Admin\AdminController@home');

