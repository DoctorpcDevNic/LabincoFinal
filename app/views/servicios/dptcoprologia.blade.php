@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Departamento de coprología
@stop


@section('contenido')

<div class="faqs container">
	<h3 class="titul" style="font-size: 2.5em; text-align: center;">Departamento de Coprología</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid tempora voluptas nobis dolorem harum vero velit? Numquam autem ullam blanditiis dignissimos et recusandae aliquam, fugit earum incidunt dolorum quaerat ex.</p>

	<div class="table-responsive container">
		<table class="table table-hover">
	  		<thead>
				<tr>
					<td>Clave</td>
					<td>Nombre De Estudio</td>									
				</tr>
			</thead>
			<tbody>
			@foreach($Coprologia as $value)
				<tr>
					<td>{{$value->clave}}</td>
					<td>{{$value->examen}}</td>
			@endforeach
				</tr>		
				</tbody>
		</table>
		<div>
			{{ $Coprologia->links() }}
		</div>		
	</div>
</div>

@stop