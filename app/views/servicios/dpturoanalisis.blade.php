@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Departamento de patología
@stop

@section('contenido')

<div class="faqs container">
<h3 class="titul" style="font-size: 2.5em; text-align: center;">Departamento de Uroanálisis</h3>
<p>Tiene como objetivo el análisis químico, físico y microscópico de la orina, de tal manera que se confirmen o descarten padecimientos que involucran el funcionamiento del tracto urinario considerando que las funciones de este es la eliminación de sustancias tóxicas para el organismo y la retención de lo que le es de utilidad al cuerpo.</p>
	
	<div class="table-responsive container">
		<table class="table table-hover">
	  		<thead>
				<tr>
					<td>Clave</td>
					<td>Nombre De Estudio</td>									
				</tr>
			</thead>
			<tbody>
			@foreach($Uroanalisis as $value)
				<tr>
					<td>{{$value->clave}}</td>
					<td>{{$value->examen}}</td>
			@endforeach
				</tr>		
				</tbody>
		</table>
		<div>
			{{ $Uroanalisis->links() }}
		</div>	
	</div>
</div>
@stop