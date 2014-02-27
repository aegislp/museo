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

Route::get('/',array( 'as'=>'home','after'=>'sumar_visita',function()
{

	if(Session::has('omitir')  ){
		return View::make('index');
	}else{
		return Redirect::action('UsersController@getAcceso');

	}	
}));


Route::post('login','UsersController@login');
Route::get('logout','UsersController@logout');
Route::controller('usuario','UsersController');
 


Route::controller('salas','SalasController');
Route::controller('objetos','ObjetosController');
Route::resource('contacto','MensajesController');
Route::resource('estadisticas','EstadisticasController');


/* ----------------------  Rutas admin ------------------------------------------*/

Route::get('admin/objetos/sala/{sala_id}', array('as'=>'admin_objetos','uses'=>'AdminObjetosController@index'));
Route::controller('admin/objetos', 'AdminObjetosController');
Route::controller('admin/salas', 'AdminSalasController');
Route::controller('admin', 'AdministracionController');

