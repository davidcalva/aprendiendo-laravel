<?php  

class LoginController extends BaseController {

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/

	public function index(){
		if (Auth::check())
        {
			return Redirect::to('/panelAdmin');
		}
		return View::make('admin/login');
	}
	public function doLogin(){
		// Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata, Input::get('remember-me', 0)))
        {
            // De ser datos válidos creamos arreglo de sesion con los accesos a los modulos
            $usuario = Usuarios::where('email','=',$userdata['email'])->first();
            #validamos que el usuario exista 
            if ( is_null ($usuario) )
            {
                echo "Usted no tiene permisos: usuario no encontrado";
                exit;
            }
            #valdiamos que tenga perfil
            if( is_null($usuario->perfil_id) ){
                echo 'No tiene perfil';
                exit;
            }
            #obtenemos el perfil
            $perfil = Perfiles::find($usuario->perfil_id);
            #comprabamos que se encontro el perfil
            if(is_null($perfil)){
                echo 'Sin permisos';
                exit;
            }
            
            #modulos del perfil
            $modulos = $perfil->perfilAccesos;#->toArray();
            #verificamos que el perfil tenga algun modulo
            if(is_null($modulos)){
                echo "No tiene permisos a ningun modulo";
                exit;
            }
            

            foreach ($modulos as $modulo) {
                $arrModulos[$modulo->mAlias] = array('lectura'   => $modulo->pivot->lectura,
                                                      'escritura' => $modulo->pivot->escritura
                                                      ); 
            } 

            Session::put('modulosAcceso', $arrModulos);
            return Redirect::route('productos.index');
           
        }
        else{
            /*return Redirect::to('login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();*/
            echo "datos incorrectos";
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
       
	}

}
?>