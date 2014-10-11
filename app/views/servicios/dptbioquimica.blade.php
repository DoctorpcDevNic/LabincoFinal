@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Departamento de bioquímica
@stop

@section('contenido')

<div class="faqs container">

  <h3 class="titul" style="font-size: 2.5em; text-align: center;">Departamento de Bioquímica</h3>
  <p>La actividad de este proceso es la determinación de diferentes analitos por métodos químicos, entre los que se encuentran: metabolitos, enzimas y proteínas el 90% de las pruebas se realizan en sistemas analíticos totalmente automatizados.</p>
	
  <div class="table-responsive container">
		<table class="table table-hover">
	  		<thead>
				<tr>
					<td>Clave</td>
					<td>Nombre De Estudio</td>									
				</tr>
			</thead>
			<tbody>
			@foreach($bioquimica as $value)
				<tr>
					<td>{{$value->clave}}</td>
					<td>{{$value->examen}}</td>
			@endforeach		
				</tr>							
			</tbody>
		</table>
		<div>
			{{ $bioquimica->links() }}
		</div>	
	</div>
</div>

@stop