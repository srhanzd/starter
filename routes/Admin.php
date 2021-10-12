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

/*Route::get('/Admin', function () {
    return 'hallo admin';
});*/

/*Route::namespace('Admin')->group(function () {
    //all rout acn only access the controllers or methods in folder with the name Admin
    Route:: get('a', 'AdminController@showAdminname');
});
*/




/*Route::group(['prefix' =>'Admin','middleware'=>'auth'],function (){

    Route::get('/','Admin\AdminController@showAdminname');
    Route::get('lastname','Admin\AdminController@showAdminlastname');
    Route::get('middlename','Admin\AdminController@showAdminmiddlename');


});
Route::get('/login',function (){

   return 'srhan';
})->middleware('auth');
*/



/*Route::group(['namespace'=>'Admin','prefix'=>'Admin','middleware'=>'auth'],function (){

    Route::get('/','FirstController@showname');
    Route::get('first','FirstController@showname');
    Route::get('second','FirstController@showname');


});
*/
/*Route::group(['namespace'=>'Admin','prefix'=>'Admin'],function (){
    Route::get('second1','FirstController@showname0');//->middleware('auth');
    Route::get('second2','FirstController@showname1');
    Route::get('second3','FirstController@showname2');
    Route::get('second4','FirstController@showname3');

});
//Route::get('login','Admin\AdminController@login')->name('login');
Route::get('login','Admin\FirstController@login')->name('login');
*/
Route::resource('news','Crudcontroller');
