@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Departamento de referencias internacionales
@stop

@section('contenido')

<div class="faqs container">
	<h3 class="titul" style="font-size: 2.5em; text-align: center;">Departamento de referencia internacional</h3>
  <p>Nos hemos asociado a laboratorios extranjeros para la realización de estudios que por su poca demanda no son procesados en nuestra empresa.</p>

	<div class="table-responsive container">
		<table class="table table-hover">
	  		<thead>
				<tr>
					<td>Clave</td>
					<td>Nombre De Estudio</td>									
				</tr>
			</thead>
			<tbody>
			@foreach($Internacional as $value)
				<tr>
					<td>{{$value->clave}}</td>
					<td>{{$value->examen}}</td>
			@endforeach
				</tr>		
				</tbody>
		</table>
		<div>
			{{ $Internacional->links() }}
		</div>	
	</div>
</div>
@stop