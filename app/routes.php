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
/*Route::get("/",function()
{
	return "Index jejeje";
});*/
/**
*rutas a recursos controladores
*/
Route::get('/servicios', array( 'uses'=>'IndexController@servicios',
										'as'=>'servicios.index'));
Route::get('/contacto', array( 'uses'=>'IndexController@contacto',
										'as'=>'contacto.index'));
Route::get('/catalogo', array( 'uses'=>'IndexController@catalogo',
										'as'=>'catalogo.index'));

Route::get('/Cartpush', array( 'uses'=>'CartController@push',
										'as'=>'Cart.index'));

Route::get('/Cartpop', array( 'uses'=>'CartController@pop',
										'as'=>'Cart.index'));
Route::resource('contacto', 'ContactoController');

Route::resource('usuarios', 'UsuariosController');
Route::resource('productos', 'ProductosController');
Route::resource('categorias', 'CategoriasController');
Route::resource('subcategorias', 'SubcategoriasController');
Route::resource('pedidos', 'PedidosController');
Route::resource('/', 'IndexController');
Route::get('/pagos', array('uses' => 'PagosController@index',
                                        'as' => 'pagos.index'));

/**
*Routes para el login 
*/
Route::get('/admin', array('uses' => 'LoginController@index',
                                        'as' => 'loginIndex'));

Route::post('/admin', array('uses' => 'LoginController@doLogin',
                                        'as' => 'doLogin'));

/**
*Routes para el panel de administracion
*/
Route::get('admin/panelAdmin',array('uses' => 'PanelAdminController@index' ,
										'as' => 'panelAdmin' ));

Route::get('/error/{codigo}', array('uses' => 'ErrorController@index',
                                        'as' => 'ErrorIndex'));














//Route::resource('user/{id}', 'IndexControllerRestfull');
#Route::get('user/{id}', array('as' => 'user', 'uses' => 'IndexControllerRestfull'));
#Route::get('user', array('as' => 'nuevo', 'uses' => 'IndexControllerRestfull@create'));
/*Route::get('/', function()
{
	#return View::make('inicio');
	return "holaaa";
});


Route::get('lalala', function()
{
    return "lalala";
});*/

//Route::resource('/', 'IndexController@index');
//Route::get('/{name}', 'IndexController@index');
//Route::get('/', 'IndexController@index');