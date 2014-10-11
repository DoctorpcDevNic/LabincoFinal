@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Servicios generales
@stop

@section('contenido')
	<div class="servicios container">
		<div class="servicio" id"empresas">
			<div class="row">
				<div class="col-md-3"><img src="{{ asset('img/empresas.png') }}" class="img-responsive hidden-xs"></div>
				<div class="col-md-9 azulito">
					<h3>servicios a empresas</h3>
					<p>Ofrecemos servicios especiales a Empresas como descuentos especiales, firmas de convenios con linea de creditos y examen en linea</p>
					<div class="row">
						<ul class="col-md-6">
							<li>Exámenes de chequeos médicos solicitados por el MITRAB</li>
							<li>Exámenes para empleados de nuevo ingreso</li>
							<li>Exámenes periódicos</li>
							<li>Estudios de Superficies</li>
						</ul>
						<ul class="col-md-6">
							<li>Estudios ambientales</li>
							<li>Índice de Carga Bacteriana</li>
							<li>Estudios Bacteriológicos</li>
							<li>Estudios de Esterilidad en soluciones</li>
						</ul>						
					</div>					
				</div>
			</div>
		</div>
		<div class="servicio" id="domicilio">
			<div class="row">
				<div class="col-md-3"><img src="{{ asset('img/domiciliio.png') }}" class="img-responsive hidden-xs"></div>
				<div class="col-md-9 azulito" style="height:197px">
					<h3>SERVICIO A DOMICILIO</h3>
					<p>Nuestro laboratorio en su hogar: Ofrecemos nuestro servicio de atención domiciliaria en la ciudad de Managua.</p>
					<p>Este servicio es útil en pacientes con movilidad reducida, pacientes pediátricos, adultos mayores y para todo paciente que requiera de nuestros servicios desde la comodidad de su hogar.</p>									
					<p>Las citas deben solicitarse con un día antes de la toma de muestra llamando a la unidad de servicio más cercana a su hogar.</p>
				</div>
			</div>
		</div>
		<div class="servicio" id="urgencia">
			<div class="row">
				<div class="col-md-3"><img src="{{ asset('img/urgencias.png') }}" class="img-responsive hidden-xs"></div>
				<div class="col-md-9 azulito" style="height:197px">
					<h3>ATENCIÓN A SOLICITUDES DE URGENCIAS</h3>
					<p>Nuestros equipos son auto-analizadores de última generación y trabajan integrados a una red informática, esto nos permite lograr precisión, exactitud y rapidez en el procesamiento de muestras. Por tanto, podemos atender solicitud de resultados en tiempo extraordinario.</p>									
				</div>
			</div>
		</div>		
	</div>
@stop







