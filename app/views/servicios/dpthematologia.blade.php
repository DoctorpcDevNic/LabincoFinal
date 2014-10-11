@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Departamento de hematología
@stop

@section('contenido')

<div class="faqs container">
	 <h3 class="titul" style="font-size: 2.5em; text-align: center;">Departamento de Hematología</h3>
   <p>El proceso de Hematología tiene como objetivo llevar a cabo determinaciones y cuantificaciones en el tejido hemático, entre los que se encuentran diferentes pruebas inmunohematológicas como grupo sanguíneo y Rh,  cuantificación de los elementos  de la sangre y pruebas de coagulación.</p>
	
  <div class="table-responsive container">
		<table class="table table-hover">
	  		<thead>
				<tr>
					<td>Clave</td>
					<td>Nombre De Estudio</td>									
				</tr>
			</thead>
			<tbody>
			@foreach($Hematologia as $value)
				<tr>
					<td>{{$value->clave}}</td>
					<td>{{$value->examen}}</td>
			@endforeach
				</tr>		
				</tbody>
		</table>
		<div>
			{{ $Hematologia->links() }}
		</div>	
	</div>
</div>

@stop