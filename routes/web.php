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
Route::get('/',['uses'=>'IndexController@index']);

Route::get('/admin/visitante',['as'=>'admin.visitante', 'uses'=>'VisitanteController@index']);
Route::get('/admin/condomino',['as'=>'admin.condomino', 'uses'=>'Admin\CondominoController@index']);
Route::get('/admin/agenda',['as'=>'admin.agenda', 'uses'=>'VisitanteController@index']);

Route::get('/admin/visitante/adicionar',['as'=>'admin.visitante.adicionar', 'uses'=>'VisitanteController@adicionar']);
Route::get('/admin/condomino/adicionar',['as'=>'admin.condomino.adicionar', 'uses'=>'admin\CondominoController@adicionar']);
Route::get('/admin/apartamento/adicionar',['as'=>'admin.aparatamento.adicionar', 'uses'=>'ApartamentoController@adicionar']);

Route::post('/admin/visitante/salvar',['as'=>'admin.visitante.salvar', 'uses'=>'VisitanteController@salvar']);
Route::post('/admin/condomino/salvar',['as'=>'admin.condomino.salvar', 'uses'=>'admin\CondominoController@salvar']);

Route::get('/admin/visitante/editar/{$id}',['as'=>'admin.visitante.editar', 'uses'=>'VisitanteController@editar']);
Route::get('/admin/condomino/editar/{$id}',['as'=>'admin.condomino.editar', 'uses'=>'CondominoController@editar']);

Route::put('/admin/visitante/atualizar/{$id}',['as'=>'admin.visitante.atualizar', 'uses'=>'VisitanteController@atualizar']);
Route::put('/admin/condomino/atualizar/{$id}',['as'=>'admin.condomino.atualizar', 'uses'=>'CondominoController@atualizar']);

Route::get('/admin/visitante/deletar/{$id}',['as'=>'admin.visitante.deletar', 'uses'=>'VisitanteController@deletar']);
Route::get('/admin/condomino/deletar/{$id}',['as'=>'admin.condomino.deletar', 'uses'=>'CondominoController@deletar']);
