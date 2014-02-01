<?php 
/**
* 
*/
class IndexController extends \BaseController
{
	
	function __construct()
	{
		# code...
	}

	function index()
	{
		
		return View::make('index');
	}

}
?>