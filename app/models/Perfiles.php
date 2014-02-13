<?php  
/**
* 
*/
class Perfiles extends Eloquent
{
	
	protected $table = 'perfiles';

	public function perfilAccesos(){
		return $this->belongsToMany('modulos', 'perfilmodulos','perfil_id','modulo_id');
	}

}
/*DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.id', 'contacts.phone', 'orders.price');

            $name = DB::table('users')->where('name', 'John')->pluck('name');*/
?>

