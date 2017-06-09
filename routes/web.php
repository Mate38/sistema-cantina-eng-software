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

Route::get('/teste', function () {
    return view('produtos.teste');
});

Route::group(['middleware' => ['web']], function () {
    
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('produtos', 'ProdutoController');
    Route::resource('fornecedores', 'FornecedorController');
    Route::resource('responsaveis', 'ResponsavelController');
    Route::resource('clientes', 'ClienteController');
    Route::resource('estoques', 'EstoqueController');

    Route::resource('funcionarios', 'FuncionarioController');

    //Route::resource('vendas', 'VendaController');
    //Route::resource('vendas_has_produtos', 'Venda_has_ProdutoController');
    Route::get('vendas', 'Venda_has_ProdutoController@create');
    Route::post('vendas', 'Venda_has_ProdutoController@store');
    Route::delete('vendas/{id}', 'Venda_has_ProdutoController@destroy');
    Route::post('vendas/finaliza', 'VendaController@store');
    Route::get('vendas/prazo', 'VendaController@prazo');
    //Route::get('vendas', 'VendaController@index');

    //Route::get('/produtos', 'ProdutoController@index');
    //Route::get('/produtos/novo', 'ProdutoController@create');
    //Route::post('/produtos/salvar', 'ProdutoController@store');
    //Route::get('/produtos/editar', 'ProdutoController@edit');
    //Route::post('/produtos/update', 'ProdutoController@update');
    
});
