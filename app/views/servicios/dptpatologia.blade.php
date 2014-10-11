@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Departamento de patología
@stop

@section('contenido')

<div class="faqs container">
	<h3 class="titul" style="font-size: 2.5em; text-align: center;">Departamento de Patología</h3>
  <p>Procesa muestras biológicas, en su mayoría biopsias, y mediante un procedimiento de preparación específico del tejido Y posterior elaboración de cortes microscópicos del tejido, se tiñen de manera que el Patólogo pueda observarlos al microscopio y así saber si hay alteraciones del tejido que indiquen la presencia de un proceso neoclásico (Cáncer).</p>

	<div class="table-responsive container">
		<table class="table table-hover">
	  		<thead>
				<tr>
					<td>Clave</td>
					<td>Nombre De Estudio</td>									
				</tr>
			</thead>
			<tbody>
			@foreach($Patologia as $value)
				<tr>
					<td>{{$value->clave}}</td>
					<td>{{$value->examen}}</td>
			@endforeach
				</tr>		
				</tbody>
		</table>
		<div>
			{{ $Patologia->links() }}
		</div>
	</div>
</div>
@stop