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
            // De ser datos válidos nos mandara a la bienvenida
            
            return Redirect::to('/panelAdmin');
        }
        
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
	}

}
?>