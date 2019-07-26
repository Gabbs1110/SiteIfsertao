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

Route::get('/',['as'=>'site.home', function () {
    return view('site.home');
}]);

Route::get('/professores',['as'=>'site.prof', function(){
    return view('site.prof');
}]);

Route::get('/informes', ['as'=>'site.informes', function(){
    return view('site.informes');
}]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
