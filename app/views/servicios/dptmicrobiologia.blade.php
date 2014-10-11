@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Departamento de microbiología
@stop

@section('contenido')

<div class="faqs container">
	<h3 class="titul" style="font-size: 2.5em; text-align: center;">Departamento de Microbiología</h3>
  <p>Su finalidades la búsqueda de bacterias que sean la causa (agente etiológico) de procesos infecciosos en diferentes tractos del organismo.</p>
	<div class="table-responsive container">
		<table class="table table-hover">
	  		<thead>
				<tr>
					<td>Clave</td>
					<td>Nombre De Estudio</td>									
				</tr>
			</thead>
			<tbody>
			@foreach($Microbiologia as $value)
				<tr>
					<td>{{$value->clave}}</td>
					<td>{{$value->examen}}</td>
			@endforeach
				</tr>		
				</tbody>
		</table>
		<div>
			{{ $Microbiologia->links() }}
		</div>	
	</div>
</div>

@stop