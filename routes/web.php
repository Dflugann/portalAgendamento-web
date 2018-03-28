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
  Route::get('/',['as'=>'site.index','uses'=>'Site\HomeController@index']);
  Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
  Route::get('/login',['as'=>'site.login', 'uses'=>'Site\LoginController@index']);
  Route::post('/login/entrar',['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);
  /**ROUTE -- AUTH === FALSE END**/

  /**ROUTE -- AUTH === TRUE**/
  
Route::group(['middleware'=>'auth','prefix' => 'admin'], function(){

  Route::get('/home',['as'=>'admin.home','uses'=>'Admin\UsuarioController@home']);

  Route::get('/usuario/permissao', ['as'=> 'usuario.permissao', 'user' => 'Admin\UsuarioController@permissao']);
  Route::resource('/usuario','Admin\UsuarioController');
  Route::resource('/imovel','Admin\ImovelController');
  Route::resource('/visita','Admin\VisitaController');
  Route::resource('/agenda','Admin\AgendaController');
  

/**ROUTE -- INDEX**/
  Route::get('/visitante',['as'=>'visitante.index', 'uses'=>'Admin\VisitanteController@index']);
  Route::get('/empreendimento',['as'=>'empreendimento.index', 'uses'=>'Admin\EmpreendimentoController@index']);

/**ROUTE -- ADICIONAR**/
  Route::get('/visitante/adicionar',['as'=>'admin.visitante.adicionar', 'uses'=>'Admin\VisitanteController@adicionar']);
  Route::get('/empreendimento/adicionar/{type}',['as'=>'empreendimento.adicionar', 'uses'=>'Admin\EmpreendimentoController@adicionar']);

/**ROUTE -- SALVAR**/
  Route::post('/visitante/salvar',['as'=>'admin.visitante.salvar', 'uses'=>'Admin\VisitanteController@salvar']);
  Route::post('/empreendimento/salvar',['as'=>'admin.empreendimento.salvar', 'uses'=>'Admin\EmpreendimentoController@salvar']);
  Route::post('/admin/administrador/salvar',['as'=>'admin.administrador.salvar', 'uses'=>'Admin\AdministradorController@salvar']);

/**ROUTE -- EDITAR**/
  Route::get('/visitante/editar/{id}',['as'=>'admin.visitante.editar', 'uses'=>'VisitanteController@editar']);
  Route::get('/empreendimento/editar/{id}',['as'=>'admin.empreendimento.editar', 'uses'=>'Admin\EmpreendimentoController@editar']);

/**ROUTE -- ATUALIZAR**/
  Route::put('/visitante/atualizar/{id}',['as'=>'admin.visitante.atualizar', 'uses'=>'VisitanteController@atualizar']);
  Route::put('/empreendimento/atualizar/{id}',['as'=>'admin.empreendimento.atualizar', 'uses'=>'Admin\EmpreendimentoController@atualizar']);

/**ROUTE -- DELETAR**/
  Route::get('/visitante/deletar/{id}',['as'=>'admin.visitante.deletar', 'uses'=>'VisitanteController@deletar']);
  Route::get('/empreendimento/deletar/{id}',['as'=>'admin.empreendimento.deletar', 'uses'=>'Admin\EmpreendimentoController@deletar']);
  Route::get('/usuario/deletar/{id}',['as'=>'usuario.deletar', 'uses'=>'admin\UsuarioController@deletar']);
  Route::get('/imovel/deletar/{id}',['as'=>'imovel.deletar', 'uses'=>'Admin\ImovelController@deletar']);
  Route::get('/visita/deletar/{id}',['as'=>'visita.deletar', 'uses'=>'Admin\VisitaController@deletar']);
  

/**ROUTE -- SEARCH**/
  Route::get('/empreendimento/filterImovel/{titulo}',['as'=>'admin.empreendimento.filterImovel', 'uses'=>'Admin\EmpreendimentoController@filterImovel']);

});
