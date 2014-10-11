@extends('templates.admintemplate')
@section('contenido')

<div class="noticias">
@if(Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<!-- Ver Noticias -->	 
	  	{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}
	  	<div class="table-responsive">
			<table class="table table-hover">
	  			<thead>
					<tr>
						<td>Titulo</td>
						<td>Descripcion</td>					
						<td>Imagen</td>
						<td>Fecha</td>						
					</tr>
				</thead>
				<tbody>
					@foreach($tips as $key => $value)
						<tr>
							<td> {{ $value->titulo }} </td>
							<td> {{ $value->descripcion }} </td>
							<td> {{ $value->imagen }} </td>
							<td> {{ $value->updated_at }} </td>

							<td>
								{{ Form::open(array('url' => 'administrador/tips/delete/' . $value->id, 'class' => 'pull-right')) }}
									{{ Form::hidden('_method', 'DELETE') }}
									{{ Form::submit('Borrar este Tip', array('class' => 'btn btn-warning')) }}
								{{ Form::close() }}

								<a href="{{ URL::to('/administrador/tips/'. $value->id) }}" class="btn btn-small btn-success">Ver Tip</a>
								<a href="{{ URL::to('/administrador/tips/edit/' . $value->id) }}" class="btn btn-small btn-success">Editar Tip</a>
							</td>

						</tr>
					@endforeach
				</tbody>
			</table>
		</div>	
</div>

@stop