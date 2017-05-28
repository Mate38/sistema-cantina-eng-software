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
    return view('auth.login');
});

Route::group(['middleware' => ['web']], function () {
    
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/produtos', 'ProdutoController@index');
    Route::get('/produtos/novo', 'ProdutoController@create');
    Route::post('/produtos/salvar', 'ProdutoController@store');
    
});



/*Route::group(['middleware' => ['web']], function () {
    Route::resource('produtos', 'ProdutoController');
});*/
