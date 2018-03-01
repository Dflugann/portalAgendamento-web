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

  Route::get('/teste', function() {
    return view('index');
  });

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
  Route::get('/admin/operador',['as'=>'admin.operador', 'uses'=>'Admin\OperadorController@index']);
  Route::get('/admin/apartamento',['as'=>'admin.apartamento', 'uses'=>'Admin\ApartamentoController@index']);
  Route::get('/admin/empreendimento',['as'=>'admin.empreendimento', 'uses'=>'Admin\EmpreendimentoController@index']);
  Route::get('/admin/condomino',['as'=>'admin.condomino', 'uses'=>'Admin\CondominoController@index']);
  Route::get('/admin/administrador',['as'=>'admin.administrador', 'uses'=>'Admin\AdministradorController@index']);

/**ROUTE -- ADICIONAR**/
  Route::get('/admin/visitante/adicionar',['as'=>'admin.visitante.adicionar', 'uses'=>'Admin\VisitanteController@adicionar']);
  Route::get('/admin/operador/adicionar',['as'=>'admin.operador.adicionar', 'uses'=>'Admin\OperadorController@adicionar']);
  Route::get('/admin/administrador/adicionar',['as'=>'admin.administrador.adicionar', 'uses'=>'Admin\AdministradorController@adicionar']);
  Route::get('/admin/supervisor/adicionar',['as'=>'admin.supervisor.adicionar', 'uses'=>'Admin\SupervisorController@adicionar']);
  Route::get('/admin/apartamento/adicionar',['as'=>'admin.apartamento.adicionar', 'uses'=>'Admin\ApartamentoController@adicionar']);
  Route::get('/admin/empreendimento/adicionar',['as'=>'admin.empreendimento.adicionar', 'uses'=>'Admin\EmpreendimentoController@adicionar']);

/**ROUTE -- SALVAR**/
  Route::post('/admin/visitante/salvar',['as'=>'admin.visitante.salvar', 'uses'=>'VisitanteController@salvar']);
  Route::post('/admin/operador/salvar',['as'=>'admin.operador.salvar', 'uses'=>'Admin\OperadorController@salvar']);
  Route::post('/admin/empreendimento/salvar',['as'=>'admin.empreendimento.salvar', 'uses'=>'Admin\EmpreendimentoController@salvar']);
  Route::post('/admin/apartamento/salvar',['as'=>'admin.apartamento.salvar', 'uses'=>'Admin\ApartamentoController@salvar']);
  Route::post('/admin/administrador/salvar',['as'=>'admin.administrador.salvar', 'uses'=>'Admin\AdministradorController@salvar']);

/**ROUTE -- EDITAR**/
  Route::get('/admin/visitante/editar/{id}',['as'=>'admin.visitante.editar', 'uses'=>'VisitanteController@editar']);
  Route::get('/admin/operador/editar/{id}',['as'=>'admin.operador.editar', 'uses'=>'Admin\OperadorController@editar']);
  Route::get('/admin/empreendimento/editar/{id}',['as'=>'admin.empreendimento.editar', 'uses'=>'Admin\EmpreendimentoController@editar']);
  Route::get('/admin/apartamento/editar/{id}',['as'=>'admin.apartamento.editar', 'uses'=>'Admin\ApartamentoController@editar']);
  Route::get('/admin/administrador/editar/{id}',['as'=>'admin.administrador.editar', 'uses'=>'Admin\AdministradorController@editar']);

/**ROUTE -- ATUALIZAR**/
  Route::put('/admin/visitante/atualizar/{id}',['as'=>'admin.visitante.atualizar', 'uses'=>'VisitanteController@atualizar']);
  Route::put('/admin/operador/atualizar/{id}',['as'=>'admin.operador.atualizar', 'uses'=>'admin\OperadorController@atualizar']);
  Route::put('/admin/empreendimento/atualizar/{id}',['as'=>'admin.empreendimento.atualizar', 'uses'=>'admin\EmpreendimentoController@atualizar']);
  Route::put('/admin/apartamento/atualizar/{id}',['as'=>'admin.apartamento.atualizar', 'uses'=>'admin\ApartamentoController@atualizar']);

/**ROUTE -- DELETAR**/
  Route::get('/admin/visitante/deletar/{id}',['as'=>'admin.visitante.deletar', 'uses'=>'VisitanteController@deletar']);
  Route::get('/admin/operador/deletar/{id}',['as'=>'admin.operador.deletar', 'uses'=>'admin\OperadorController@deletar']);
  Route::get('/admin/empreendimento/deletar/{id}',['as'=>'admin.empreendimento.deletar', 'uses'=>'admin\EmpreendimentoController@deletar']);
  Route::get('/admin/apartamento/deletar/{id}',['as'=>'admin.apartamento.deletar', 'uses'=>'admin\ApartamentoController@deletar']);

/**ROUTE -- SEARCH**/
  Route::get('/admin/empreendimento/search/{id}',['as'=>'admin.empreendimento.search', 'uses'=>'admin\EmpreendimentoController@search']);

});
