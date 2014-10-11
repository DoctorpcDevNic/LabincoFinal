@extends('templates.maintemplate')
@section('slider')
 <div class="fluid_container">
    <div class="camera_wrap camera_blue_skin" id="camera_wrap_1" style="margin-bottom: 0px;">
        <div data-src="{{ asset('img/slider1.jpg') }}" class="sliderimg">
        </div>
        <div data-src="{{ asset('img/slider2.jpg') }}">                
        </div>
        <div data-src="{{ asset('img/slider3.jpg') }}">               
        </div>
        <div data-src="{{ asset('img/slider1.jpg') }}">                
        </div>
        <div data-src="{{ asset('img/slider1.jpg') }}">                
        </div>
        <div data-src="{{ asset('img/slider1.jpg') }}">      
        </div>
   </div>
  </div>
@stop

@section('contenido')
	
<!-- Book Apointment -->
		<div class="book-form">
			<div class="inner-form"> 
			<h4>
				<p>Atención al cliente 
				<p>Cel: 8905 6234</p>
				<p>Lun - Sáb. 6:30 - 18:00</p>
			</h4>
      {{-- administrador/enviar/msj --}}
      {{ Form::Open(array('url' => '', 'class' => 'sendAjax')) }}			
				<div class="inputs">
				  <marquee>Fuera de horario escríbanos aquí</marquee>
          {{ Form::text('nombre', Input::old('nombre'), array('placeholder'=> 'Nombre Completo')) }}
          {{ Form::text('email', Input::old('email'), array('placeholder'=> 'Email')) }}
          {{ Form::text('telefono', Input::old('telefono'), array('placeholder'=> 'Telefono')) }}	
          {{ Form::textarea('comentario', Input::old('comentario'), array('placeholder'=> 'Comentario')) }}			    
		    </div>			
		    <!--<h1 href="" class="glyphicon glyphicon-envelope mailinput text-center"></h1>	-->
				<!--<input id="sendMsj" type="submit" class="glyphicon glyphicon-envelope mailinput text-center">-->
        {{ Form::submit('Enviar') }}
			{{Form::close()}}
			
			</div>
		</div>
<!-- End Book Apointment -->

	<div class="container" id="resultados">				
<!-- Promociones -->
		<div class="text-center" style="margin-top:-40px">
			<h2 class="titul wow swing" data-wow-duration="2s"></h2>
		</div>
		<div class="features dark row">
			<div class="features-items col-md-3" id="promocionesmes">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="img/alcancia.png" style="height:50px" alt="Promocion" title="promociones labinco"></a>
					</div>
					<h4>Promociones del mes</h4>
           <br>
					<div class="line"></div>
					<p>Cuide su salud y aproveche nuestros constantes descuentos</p>
          
				</a>
			</div>			
			<div class="features-items col-md-3" id="resultadosLineas">
				<a href="#" >
					<div class="service-item">
						<a href="#" class="service-img"><img src="img/resultados.png" style="height:50px" alt="Resultados en linea de examenes" title="resultados de examenes"></a>
					</div>
					<h4>Resultado en línea</h4>
           <br>
					<div class="line"></div>
					<p>Revise su examen en línea desde aquí</p>         
				</a>
			</div>
			<div class="features-items col-md-3" id="carneEmbarazo">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="img/biberon.png" style="height:50px" alt="Carné de embarazo" title="Carné de embarazo"></a>
					</div>
					<h4>Carné de embarazo</h4>
          <br>
					<div class="line"></div>
					<p>Una nueva vida, nosotros le acompañamos en el trayecto</p>
				</a>
			</div>
			<div class="features-items col-md-3" id="apoyo">
				<a href="">
					<div class="service-item">
						<a href="#" class="service-img"><img src="img/apollo.png" style="height:50px" alt="Programa de apoyo al paciente" title="Programa de apoyo al paciente"></a>
					</div>
					<h4>Programa de apoyo al paciente</h4>
					<br>
					<div class="line"></div>
					<!--p>Este es mi mandamiento: que ustedes se amen asi como yo les he amado a ustesdes</p>
          <p>Juan 15:30</p-->
				</a>
			</div>
			<div class="clear"></div>
		</div>
<!-- End Promociones -->
	</div>

<div class="tips hidden-xs hidden-sm">
    <h2>Tips del día</h2>
    <section id="features">
      <div class="col-md-2 ladoiz">
          <img src="{{ asset('img/figura.png') }}">
      </div>
      <div class="col-md-8"> 
        <?php $tips = Tip::all(); ?>               
          <div class="slider responsive" style="background: #00A7CB">
          @foreach($tips as $value)
             <div><h3><img src="{{ asset('img/upload/'. $value->imagen .'') }}" alt="{{ $value->descripcion }}" title="{{ $value->titulo }}"></h3></div>
          @endforeach           
          </div>
      </div>
      <div class="col-md-2 ladoder">
      </div>
    </section>
  </div>
	<!-- 	end tips -->

	<!-- Nosotros -->
    <section class="container">


        <article id="historia" class="divider ">
          <h2 class="text-center titul wow slideInRight" data-wow-duration="2s">Historia</h2>
          <div class="row">
            <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">
              <img src="img/imghistoria.jpg" class="img-responsive" alt="Historia Labinco" title="historio laboratorio inmaculada">
            </div>
            <div class="col-md-6 wow fadeIn textAling" data-wow-duration="4s">
              <p>El Laboratorio Clínico Inmaculada Concepción nace en 1968 fundado por la Tecnóloga Médico Rina María Córdoba de Taboada en la ciudad de Managua. El nombre es una expresión de amor y devoción a María Santísima.</p>
              <p>Desde los principios, nuestra fundadora valoró el factor más importante y vital en esta carrera relacionada con la medicina y fue lograr que el cuerpo médico confiara en los reportes emitidos y apoyara las iniciativas de LABINCO, S.A. y de igual manera, ganar la confianza y fidelidad de los pacientes. Sabía que la única forma de lograr esto era trabajando con calidad y profesionalismo.</p>
              <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Leer Mas</button>
            </div>            
          </div>          
        </article>


        <article id="Mision" class="divider">
          <h2 class="text-center titul wow slideInRight" data-wow-duration="2s">Misión y Visión</h2>
          <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-duration="4s">
              <h2>Misión</h2>
               <p>Ser un laboratorio clínico de referencia que realiza análisis clínicos con calidad y responsabilidad. Estamos integrados por un equipo humano calificado, tecnología moderna y una diversidad de pruebas diagnósticas que compiten en el mercado nacional por su calidad y precio justo.</p>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-duration="4s">
              <h2>Visión</h2>
              <p>LABINCO, S.A. tiene como visión ser reconocido por:</p>
                <ul>
                  <li>Rapidez y confiabilidad de los resultados</li>
                  <li>Servicio eficiente con trato amable y personalizado</li>
                  <li>Recursos humanos altamente capacitados</li>                  
                  <li>Instrumentos y metodologías de vanguardia</li>
                  <li>Relación permanente con laboratorios de referencia nacional e internacionales</li>
                  <li>Sistemas de informática de alta calidad</li>
                  <li>Precios justos y competitivos</li>
                  <li>Cercania</li>
                  <!--li>Evaluación externa de la calidad certificada</li>
                  <li>Servicio de Referencia a laboratorios</li>
                  <li>Manejo computarizado de la información</li>                  
                  <li>Transporte eficiente de muestras</li-->                                    
                </ul> 
            </div>
          </div>        
        </article>

        <article id="Valores" class="divider">
          <h2 class="text-center titul wow slideInRight" data-wow-duration="2s">Valores</h2>
          <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-duration="4s">
              <p><strong>Actitud de Servicio</strong>
              <br/>Trabajamos para exceder las expectativas de nuestros clientes, brindando un trato excelente y completamente comprometidos  en lo que hacemos.</p>
              <p><strong>Confidencialidad</strong>
              <br/>Respetamos el derecho de los clientes a la confidencialidad de los datos individuales. Esta no caduca nunca.</p>
              <p><strong>Calidad</strong>
              <br/>El cuidado y la precisión con la que realizamos nuestro trabajo están en estrecha relación con el bienestar y la confianza de nuestros clientes.</p>
            </div>
            <div class="col-md-6 wow fadeIn textAling" data-wow-duration="4s">              
              <p><strong>Innovación</strong>
               <br/>Siempre encontramos más y mejores caminos para alcanzar nuestros sueños</p>
               <p><strong>Perseverancia</strong>
               <br/>Somos constantes en nuestros ideales y luchamos por ellos para alcanzarlos</p>
               <p><strong>Trabajo en equipo</strong>
               <br/>El conjunto de nuestros talentos nos lleva a la cima de nuestros sueños</p>              
            </div>
          </div> 
        </article>
       
        <article id="Filosofia" class="divider">
          <h2 class="text-center titul wow slideInRight" data-wow-duration="2s">Filosofía</h2>
          <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-duration="4s">
              <ul>
                <li>Desarrollo de políticas que sujeten a  la gestión de la calidad.</li>
                <li>El principio de la confidencialidad y preocupación por la seguridad de los protocolos, manuales y procedimientos.</li>
                <li>La remuneración justa del desempeño de nuestros colaboradores y el cumplimiento de los compromisos adquiridos con ellos.</li>
              </ul>
            </div>
            <div class="col-md-6 wow fadeIn textAling" data-wow-duration="4s">              
             <ul>
               <li>Comunicación permanente con los médicos.</li>
               <li>Calidad y calidez en nuestra atención</li>
               <li>Confiabilidad en los resultados y de la información personal de nuestros colaboradores.</li>
               <li>Mantener un trato cordial y confidencial con nuestros proveedores.</li>
             </ul>            
            </div>
          </div> 
        </article>

        <article id="Compromiso" class="divider">
          <h2 class="text-center titul wow slideInRight" data-wow-duration="2s">Compromiso</h2>
          <div class="row">
            <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">
              <img src="img/imgcompromiso.jpg" class="img-responsive" alt="compromiso Labinco" title="compromiso laboratorio inmaculada">
            </div>
            <div class="col-md-6 wow fadeIn textAling" data-wow-duration="4s">
              <p>Estamos comprometidos con la satisfacción total de los pacientes y el cuerpo médico. Colaboramos con las instituciones de salud proporcionando información confiable y oportuna, apoyando las actividades académicas y científicas. Como laboratorio de referencia, servimos a laboratorios ya establecidos y con volúmenes pequeños de pruebas de mayor complejidad. Respetamos el medio ambiente aplicando las normas de bioseguridad.</p>
               <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCompromiso">Leer Mas</button>
            </div>
          </div> 
        </article>


         <article id="Calidad" class="divider">
          <h2 class="text-center titul wow bounceInUp" data-wow-duration="2s">Politica de calidad</h2>
          <div class="row">
            <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">
              <img src="img/calidad.jpg" class="img-responsive" alt="politica de calidad Labinco" title="politica de calidad laboratorio inmaculada">
            </div>
            <div class="col-md-6 wow fadeIn textAling" data-wow-duration="4s">
              <p>El sistema de calidad del Laboratorio Clínico Inmaculada Concepción (LABINCO, S.A) está basado en las normas de la Confederación Latinoamericana de Bioquímica Clínica (COLABIOCLI), las cuales reciben el completo apoyo de la Organización Panamericana de la Salud (OPS).</p>
               <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCalidad">Leer Mas</button>
            </div>
          </div> 
        </article>

        <!--Distinciones-->
        <article id="Distinciones" class="divider">
          <h2 class="text-center titul wow bounceInUp" data-wow-duration="2s">Distinciones</h2>
          <div class="row">
            <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">
              <img src="img/premiocalidad.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-6 wow fadeIn textAling" data-wow-duration="4s">
              <p>El Premio Nacional a la Calidad (PNC) también busca promover:</p>
                <p>a) La aplicación de Sistemas de Gestión de la Calidad que permitan el incremento de la productividad y de la competitividad.</p>
                <p>b) La investigación, comprensión y aplicación de los criterios técnicos y elementos fundamentales de los Sistemas de Gestión de la Calidad.</p>                
              	<button class="btn btn-primary" data-toggle="modal" data-target="#ModalDistinciones">Leer Mas</button>
            </div>
          </div> 
       </article>
        <!--Distinciones-->
    </section>
<!-- Nosotros -->
 <!--Mapa -->
  <div id="mapas" style="width:100%;height:360px; margin-top: 2em;"></div>
  
 <!--section class="social">
    <p><a href="https://www.facebook.com/pages/Laboratorio-Cl%C3%ADnico-Inmaculada-Concepci%C3%B3n/157413541014729" target= "new"><img class="socialmedia" src="img/facebooklogo.png"></a></p>
    <p><a href=""><img class="socialmedia" src="img/twitterlogo.png"></a></p>
    <p><a href=""><img class="socialmedia" src="img/skypelogo.png"></a></p>
  </section-->

<!-- Modal -->

      <!-- Historia -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Historia</h4>
            </div>
            <div class="modal-body textAling">
             <p>El Laboratorio Clínico Inmaculada Concepción nace en 1968 fundado por la Tecnóloga Médico Rina María Córdoba de Taboada en la ciudad de Managua. El nombre es una expresión de amor y devoción a María Santísima.</p>
       
              <p>El Laboratorio Clínico Inmaculada Concepción nace en 1968 fundado por la Tecnóloga Médico Rina María Córdoba de Taboada en la ciudad de Managua. El nombre es una expresión de amor y devoción a María Santísima.</p>
               
              <p>En los últimos tiempos el avance tecnológico, la implementación de nuevos métodos y la urgente necesidad de la actualización del diagnóstico nos obliga a crecer tanto en personal como en tecnología. Esto hace que a partir de 1991 comience a crecer la gran familia que hoy formamos; con capacidad de trabajo, disciplina, disposición y sobre todo con la conciencia de que con los resultados de los exámenes realizados por nosotros, somos capaces de ayudar al médico tratante a salvar una vida, por lo que los mismos deben ser hechos con CALIDAD.</p>
               
              <p>Actualmente contamos con cuatro unidades de servicio en diferentes zonas de Managua. Nuestra unidad central tiene 168 mts2 de área, diseñada para brindar a trabajadores y pacientes, las condiciones necesarias de higiene y seguridad.</p>
               
              <p>Atendemos a laboratorios establecidos en Managua y diferentes departamentos del país con el servicio de referencia de las pruebas que ellos no realizan. Asimismo, prestamos servicios a diferentes empresas, industrias y hospitales.</p>
          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
            </div>
          </div>
        </div>
      </div>
      <!-- Historia -->

       <!-- Compromiso -->
        <div class="modal fade" id="ModalCompromiso" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	    	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Compromiso</h4>
              </div>
              <div class="modal-body textAling">
               <p>Estamos comprometidos con la satisfacción total de los pacientes y el cuerpo médico. Colaboramos con las instituciones de salud proporcionando información confiable y oportuna, apoyando las actividades académicas y científicas. Como laboratorio de referencia, servimos a laboratorios ya establecidos y con volúmenes pequeños de pruebas de mayor complejidad. Respetamos el medio ambiente aplicando las normas de bioseguridad.</p>
         
                <p>La actualización y modernización constante de métodos y equipos es una práctica constante en LABINCO, S.A. para poder cumplir con nuestro lema: Por la Actualización del Diagnóstico®</p>
                 
                <p>Por la complejidad del trabajo que realizamos, es también compromiso primordial de LABINCO, S.A. brindar al personal técnico, administrativo y de apoyo, las condiciones de seguridad y estabilidad necesarias para el desarrollo óptimo de sus funciones.</p>    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
              </div>
            </div>
          </div>
        </div>
       <!-- Compromiso --> 

       <!-- Politica De Calidad -->
       <div class="modal fade" id="ModalCalidad" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Politica de calidad</h4>
              </div>
              <div class="modal-body textAling">
               <p>El sistema de calidad del Laboratorio Clínico Inmaculada Concepción (LABINCO, S.A) está basado en las normas de la Confederación Latinoamericana de Bioquímica Clínica (COLABIOCLI), las cuales reciben el completo apoyo de la Organización Panamericana de la Salud (OPS).</p>
         
                <p>La coordinación de nuestros recursos humanos, técnicos y materiales se efectúa basados en el sistema de calidad total, con el propósito de lograr resultados de análisis clínicos que satisfagan plenamente las especificaciones de confiabilidad y oportunidad, cubriendo las expectativas y necesidades de nuestros clientes y colaborando con los sistemas de salud.</p>
                 
                <p>La Evaluación Interna de la Calidad (EIC) se realiza para controlar los procesos analíticos de mediana y alta complejidad utilizando materiales de control comercial con valores asignados por el fabricante en dos niveles de concentración.</p>    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
              </div>
            </div>
          </div>
        </div>
       <!-- Politica De Calidad --> 

       <!-- Distinciones -->
      <div class="modal fade" id="ModalDistinciones" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Distinciones</h4>
              </div>
              <div class="modal-body textAling">
                <p>El Premio Nacional a la Calidad (PNC) también busca promover:</p>
                <p>a) La aplicación de Sistemas de Gestión de la Calidad que permitan el incremento de la productividad y de la competitividad.</p>
                <p>b) La investigación, comprensión y aplicación de los criterios técnicos y elementos fundamentales de los Sistemas de Gestión de la Calidad.</p>
                <p>c) La satisfacción al cliente mediante una cultura de eficiencia y eficacia en la gestión operativa, técnica y administrativa de las Empresas/Instituciones.</p>
                <p>d) El incremento de conocimientos fundamentales sobre la calidad entre los individuos que integran las empresas/instituciones de los distintos sectores y los actores involucrados.</p>
                <p>e) El compromiso y responsabilidad de las empresas/instituciones con su entorno humano, social y ambiental.</p>
                <p>En Laboratorio Inmaculada Concepción cumplimos con los más altos estándares, para brindar a nuestros pacientes resultados de calidad, asimismo nos caracterizamos por nuestro calor humano.</p>
                <p>Ya son 45 años al servicio de los y las nicaragüenses, somos una gran familia, gracias a Jesús y la Virgen Inmaculada, gracias a todos y cada una de las personas que colaboraron y colaboran a diario por esta gran familia “Laboratorio Inmaculada Concepción”.</p>
             </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
              </div>
            </div>
          </div>
        </div>
       <!-- Distinciones --> 

       <!-- Apoyo al paciente   -->
    <div class="modal fade" id="ModalApoyo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Apoyo al paciente</h4>
              </div>
              <div class="modal-body">
               <h2>En contrucción...</h2>
               <!--object width="640" height="360">
                  <param name="movie" value="https://www.youtube.com/v/5LCRkkvlzQM?version=3"></param>
                  <param name="allowFullScreen" value="true"></param>
                  <param name="allowScriptAccess" value="always"></param>
                  <embed src="https://www.youtube.com/v/5LCRkkvlzQM?version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360"></embed>
                </object-->
                <video src="{{ asset('img/Anuncio Preeclampsia present.mp4') }}" width="100%" controls></video>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
              </div>
            </div>
          </div>
        </div>
       <!-- Apoyo al paciente   --> 

        <!-- Carne Embarazo -->
       <div class="modal fade" id="ModalCarne"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-body">
               <img src="{{ asset('img/carne.jpg') }}" class="img-responsive">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
              </div>
            </div>
          </div>
        </div>
       <!-- Carne Embarazo --> 


<!--  Resulado de pacientes-->
    <div class="modal fade" id="ModalResultados" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    	<div class="modal-dialog modal-lg">    	
        <div class="modal-content" id="modalresultado">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Resultados en línea</h4>
          </div>
          <div class="modal-body itemresultado">
            <div class="row">
              <div class="col-md-4 imgresultado">                     
                  <div class="col-md-12"><img src="{{asset('img/fabrica.png')}}" style="height:80px"></div>
                  <a href="http://labinco.redlab.com.mx/Login.aspx" class="btn btn-primary" target="new">Empresas</a>
              </div>
          <div class="col-md-4 imgresultado">
                  <div class="col-md-12"><img src="{{asset('img/pacientes.png')}}" style="height:80px"></div>
                  <a href="http://labinco.redlab.com.mx/Paciente.aspx" class="btn btn-primary" target="new">Pacientes</a>
              </div>
          <div class="col-md-4 imgresultado">                    
                  <div class="col-md-12"><img src="{{asset('img/doctores.png')}}" style="height:80px"></div>
                  <a href="http://labinco.redlab.com.mx/Login.aspx" class="btn btn-primary" target="new">Doctores</a>                   
              </div>  
            </div>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
          </div>
        </div>
      </div>
    </div>
       <!--  Resulado de pacientes-->
@stop

@section('js-slide')
    <script>
    jQuery(function(){
      
      jQuery('#camera_wrap_1').camera({
        thumbnails: false
      }); 
    });
  </script>

   <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
       <script>
            var myCenter=new google.maps.LatLng(12.114670, -86.271679);

            function initialize()
            {
            var mapProp = {
              center:myCenter,
              zoom:12,
              mapTypeId:google.maps.MapTypeId.ROADMAP,
              scrollwheel: false,
              };

            var map=new google.maps.Map(document.getElementById("mapas"),mapProp);

            var LindaVista= new google.maps.Marker({
                  position: new google.maps.LatLng(12.153508, -86.306167),
                  map: map,
                  animation:google.maps.Animation.BOUNCE
            });

            var Eden= new google.maps.Marker({
                  position: new google.maps.LatLng(12.140705, -86.242153),
                  map: map,
                  animation:google.maps.Animation.BOUNCE
            });

            var Veracruz= new google.maps.Marker({
                  position: new google.maps.LatLng(12.057620, -86.196497),
                  map: map,
                  animation:google.maps.Animation.BOUNCE
            });

            var LosRobles= new google.maps.Marker({
                  position: new google.maps.LatLng(12.119288, -86.260383),
                  map: map,
                  animation:google.maps.Animation.BOUNCE
            });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
             window.onresize = initialize;
          </script>
@stop