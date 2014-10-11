@extends('templates.admintemplate')
@section('contenido')

<div class="noticias">	
@if(Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
	  	
		{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}

		{{ Form::open(array('url' => 'administrador/tips/create', 'files' => 'true' ,'class' => 'form-horizontal')) }}
			<div class="form-group">
				{{ Form::label('titulo', 'Titulo', array('class' => 'col-sm-2 control-label')) }}
				<div class="col-sm-6">
					{{ Form::text('titulo', Input::old('titulo'), array('class' => 'form-control', 'placeholder'=> 'Titulo del Tip')) }}	
				</div>
			</div>			
			<div class="form-group">
				{{ Form::label('descripcion', 'Descripcion', array('class' => 'col-sm-2 control-label')) }}
				<div class="col-sm-6">
					{{ Form::textarea('descripcion', Input::old('descripcion'), array('class' => 'form-control', 'placeholder'=> 'Descripcion del Tip')) }}	
				</div>
			</div>
			<div class="form-group">
				{{ Form::label('imagen', 'Imagen', array('class' => 'col-sm-2 control-label')) }}
				<div class="col-sm-6">
					{{ Form::file('imagen') }}
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					{{ Form::submit('Agregar Tip' , array('class'=> 'btn btn-primary')) }}
				</div>	
			</div>
		{{ Form::close() }}
	  </div>	 
	</div>

@stop

