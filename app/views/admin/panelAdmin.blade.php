@extends('layout')
@section('content')
	{{'<pre>'}}
	<? #php print_r($data); ?>
	{{--Form::mylistUl($data,'secciones','classe')--}}
	@for ($i=0; $i < sizeof($data); $i++) 
		{{Form::mylink($data[$i],$data[$i],route($data[$i].'.index') )}}
	@endfor
	{{'</pre>'}}

@stop