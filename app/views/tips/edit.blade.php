@extends('templates.admintemplate')
@section('contenido')

<div class="container noticias text-center">
	@if(!$tip)
		<h1>La Tip No existe</h1>
	@else
		<h1>Editando Tip {{ $tip->titulo }}</h1>
			  	
		{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}

		<div class="container">

			{{ Form::open(array('url' => 'administrador/tips/edit/' . $tip->id, 'class' => 'form-horizontal')) }}
				<div class="form-group">
					{{ Form::label('titulo', 'Titulo', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-6">
						{{ Form::text('titulo', Input::old('titulo') ? Input::old('titulo'): $tip->titulo, array('class' => 'form-control', 'placeholder'=> 'Titulo dela Tip')) }}	
					</div>
				</div>			
				<div class="form-group">
					{{ Form::label('descripcion', 'Descripcion', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-6">
						{{ Form::textarea('descripcion', Input::old('descripcion') ? Input::old('descripcion'): $tip->descripcion, array('class' => 'form-control', 'placeholder'=> 'Descripcion del Tip')) }}	
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('imagen', 'Imagen', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-6">
						{{ Form::file('archivo') }}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						{{ Form::submit('Modificar Tip' , array('class'=> 'btn btn-primary')) }}
					</div>	
				</div>
			{{ Form::close() }}
	  	</div>	 
	@endif
</div>	

@stop