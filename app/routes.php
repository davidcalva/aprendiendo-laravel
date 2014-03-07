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
Route::resource('usuarios', 'UsuariosController');
Route::resource('productos', 'ProductosController');
/*obtener las subcategorias por categoria*/
Route::post('subcategorias/getSubcategoriasByCategoria',function(){
	$categoria_id = $_POST['categoria_id'];
	$modelProductos = new ProductosPDO;

	$subcategorias = $modelProductos->select("SELECT subcategoria,id from subcategorias WHERE categoria_id = :id",array("id" => $categoria_id)); 
	echo json_encode($subcategorias);
});
Route::resource('categorias', 'CategoriasController');
Route::resource('subcategorias', 'SubcategoriasController');
Route::resource('pedidos', 'PedidosController');



Route::get('/pagos', array('uses' => 'PagosController@index',
                                        'as' => 'pagos.index'));

/*peticiones para el carrito de compras*/
Route::post('/Cartpush', array( 'uses'=>'KartController@push',
										'as'=>'cartPush'));
Route::post('/Cartpop', array( 'uses'=>'KartController@pop',
										'as'=>'cartPop'));
Route::post('/CartUpdate', array( 'uses'=>'KartController@update',
										'as'=>'cartUpdate'));

/*frontend*/
Route::get('/', array( 'uses'=>'IndexController@index',
										'as'=>'index'));
Route::get('/servicios', array( 'uses'=>'IndexController@servicios',
										'as'=>'servicios'));
Route::get('/contacto', array( 'uses'=>'IndexController@contacto',
										'as'=>'contacto'));
Route::get('/catalogo', array( 'uses'=>'IndexController@catalogo',
										'as'=>'catalogo'));

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