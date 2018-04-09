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
Route::get('/storages', function () {
    return view('storages');
});
Route::group(['middleware' =>'web' ,'auth'], function () {
	  Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('adminlte::home');
    } else if (Auth::user()->admin == 1){
      $users['users'] = \App\User::all();
      return view('adminlte::donerhome', $users);
    }
    else if (Auth::user()->admin == 2){
      $users['users'] = \App\User::all();
      return view('adminlte::neederhome', $users);
    }
  });
Route::get('/storage', 'PagesController@storage')-> middleware('authenticated') ;
	Route::get('/doner', 'PagesController@doner')-> middleware('authenticated') ;
	Route::get('/needer', 'PagesController@needer')-> middleware('authenticated') ;
	Route::get('/update', 'PagesController@update')-> middleware('authenticated') ;

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
