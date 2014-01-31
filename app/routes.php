<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array( 'as'=>'home',function()
{
	return View::make('index');
}));

//salas
//Route::post('salas/ajax','SalasController@postAjax');
//Route::get('salas/{sala}/objetos','SalasController@objetos');
 
Route::controller('salas','SalasController');

//objetos
Route::get('ajax/objetos/{objeto_id}',array('as'=>'ajax_objetos', 'uses'=>'ObjetosController@ajax'));
Route::resource('objetos','ObjetosController');

Route::controller('admin/general', 'AdministracionController');
Route::controller('admin/salas', 'AdminSalasController');
