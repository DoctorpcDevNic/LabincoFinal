@extends('templates.admintemplate')
@section('contenido')
<div class="container noticias text-center">
	@if(!$tip)
		<h1>El Tip No existe</h1>
	@else
		<h1>Noticia {{ $tip->titulo }}</h1>
		<h1>Descripcion {{ $tip->descripcion }}</h1>
		<img src="{{ $tip->imagen }}" alt="esta es la imagen">
		<h1>Fecha: {{ $tip->updated_at }}</h1>
	@endif	
</div>	
@stop