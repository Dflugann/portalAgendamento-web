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

/*Route::get('/', function () {
    return view('welcome');
});*/


  /**ROUTE -- AUTH === FALSE**/
  Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);
  Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
  Route::get('/login',['as'=>'site.login', 'uses'=>'Site\LoginController@index']);
  Route::post('/login/entrar',['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);
  /**ROUTE -- AUTH === FALSE END**/

  /**ROUTE -- AUTH === TRUE**/
  Route::group(['middleware'=>'auth'], function(){

/**ROUTE -- INDEX**/
  Route::get('/admin/visitante',['as'=>'admin.visitante', 'uses'=>'Admin\VisitanteController@index']);
  Route::get('/admin/condomino',['as'=>'admin.condomino', 'uses'=>'Admin\CondominoController@index']);
  Route::get('/admin/agenda',['as'=>'admin.agenda', 'uses'=>'Admin\VisitanteController@index']);

/**ROUTE -- ADICIONAR**/
  Route::get('/admin/visitante/adicionar',['as'=>'admin.visitante.adicionar', 'uses'=>'Admin\VisitanteController@adicionar']);
  Route::get('/admin/condomino/adicionar',['as'=>'admin.condomino.adicionar', 'uses'=>'Admin\CondominoController@adicionar']);
  Route::get('/admin/apartamento/adicionar',['as'=>'admin.aparatamento.adicionar', 'uses'=>'Admin\ApartamentoController@adicionar']);

/**ROUTE -- SALVAR**/
  Route::post('/admin/visitante/salvar',['as'=>'admin.visitante.salvar', 'uses'=>'VisitanteController@salvar']);
  Route::post('/admin/condomino/salvar',['as'=>'admin.condomino.salvar', 'uses'=>'admin\CondominoController@salvar']);

/**ROUTE -- EDITAR**/
  Route::get('/admin/visitante/editar/{id}',['as'=>'admin.visitante.editar', 'uses'=>'VisitanteController@editar']);
  Route::get('/admin/condomino/editar/{id}',['as'=>'admin.condomino.editar', 'uses'=>'admin\CondominoController@editar']);

/**ROUTE -- ATUALIZAR**/
  Route::put('/admin/visitante/atualizar/{id}',['as'=>'admin.visitante.atualizar', 'uses'=>'VisitanteController@atualizar']);
  Route::put('/admin/condomino/atualizar/{id}',['as'=>'admin.condomino.atualizar', 'uses'=>'admin\CondominoController@atualizar']);

/**ROUTE -- DELETAR**/
  Route::get('/admin/visitante/deletar/{id}',['as'=>'admin.visitante.deletar', 'uses'=>'VisitanteController@deletar']);
  Route::get('/admin/condomino/deletar/{id}',['as'=>'admin.condomino.deletar', 'uses'=>'admin\CondominoController@deletar']);
  /**ROUTE -- AUTH === TRUE END**/
});
