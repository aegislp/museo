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


Route::controller('salas','SalasController');
Route::controller('objetos','ObjetosController');


/* ----------------------  Rutas admin ------------------------------------------*/
Route::controller('admin/general', 'AdministracionController');
Route::get('admin/objetos/sala/{sala_id}', array('as'=>'admin_objetos','uses'=>'AdminObjetosController@index'));
Route::controller('admin/objetos', 'AdminObjetosController');
Route::controller('admin/salas', 'AdminSalasController');
