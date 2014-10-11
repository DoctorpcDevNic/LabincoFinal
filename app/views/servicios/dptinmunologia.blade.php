@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Departamento de inmulogía
@stop

@section('contenido')

<div class="faqs container">
  <h3 class="titul" style="font-size: 2.5em; text-align: center;">Departamento de Inmunología</h3>
  <p>Este proceso se aboca a elaborar  pruebas con métodos cuyo principio es básicamente inmunológico, donde intervienen reacciones antígeno anticuerpo para cuantificar hormonas y/o detectar antígenos o anticuerpos presentes en diferentes padecimientos.</p>

	<div class="table-responsive container">
		<table class="table table-hover">
	  		<thead>
				<tr>
					<td>Clave</td>
					<td>Nombre De Estudio</td>									
				</tr>
			</thead>
				<tbody>
			@foreach($Inmunologia as $value)
				<tr>
					<td>{{$value->clave}}</td>
					<td>{{$value->examen}}</td>
			@endforeach
				</tr>		
				</tbody>
		</table>
		<div>
			{{ $Inmunologia->links() }}
		</div>
	</div>
</div>

@stop