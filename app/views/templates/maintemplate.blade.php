<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
 
<!-- Mirrored from premiumlayers.com/demos/wecare/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 05 May 2014 03:34:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <title>Laboratorio Inmaculada Concepcion</title>
    <meta name="description" content="Estamos integrados por un equipo humano calificado, tecnología moderna y una diversidad de pruebas diagnósticas de rutina, intermedias y especiales. " />
    <meta name="keywords" content="Nicaragua, nicaragua, Laboratorio, Clinico, Inmaculada, laboratorio, clinico, inmaculada, managua, Managua, urgente, tecnología, arroba, arroba de oro, Examen, examen, Sangre, sangre, VIH, vih, bh, BH, DoctorPC, doctorpc, doctor, Doctor, DRPC, drpc, Orina, orina, SIDA, sida, heces, Heces">
    <!-- Twitter Card data --> 
    <meta name="twitter:card" value="Estamos integrados por un equipo humano calificado, tecnología moderna y una diversidad de pruebas diagnósticas de rutina, intermedias y especiales. ">

    <!-- Open Graph data --> 
    <meta property="og:title" content="Laboratorio Inmaculada Concepción" /> 
    <meta property="og:type" content="" /> 
    <meta property="og:url" content=" http://www.laboratorioinmaculada.com.ni/" />
    <meta property="og:image" content="{{asset('img/logo.png')}}" />
    <meta property="og:description" content="Estamos integrados por un equipo humano calificado, tecnología moderna y una diversidad de pruebas diagnósticas de rutina, intermedias y especiales." />

  
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/main.css') }}
    {{-- HTML::style('css/responsive.css') --}}
    {{ HTML::style('css/style.css') }}

    {{ HTML::style('css/animate.css') }}
    {{ HTML::style('css/camera.css') }}


    {{ HTML::style('css/slick.css') }}
    {{ HTML::style('css/monokai.min.css') }}
    {{ HTML::style('css/styleSlidePost.css') }}

        
</head>
<body>
     <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your 
            browser</a> to improve your experience.</p>
     <![endif]-->

<!-- Start Header -->
    <header>
        <div class="logo">
            <div class="logoinma">  
                <img src="{{ asset('img/logoup.png') }}">              
            </div>
            <div class="lema">
                <h2>¡Calidez en atención, calidad en los resultados!</h2>
                <div class="telefono">
                    <p><span class="glyphicon glyphicon-earphone"></span>(505)8905-6234</p>
                    <ul>
                        <li><a href=""><img src="{{ asset('img/facebooklogo.png') }}"></a></li>
                        <li><a href=""><img src="{{ asset('img/youtubelogo.png') }}"></a></li>
                        <li><a href=""><img src="{{ asset('img/skypelogo.png') }}"></a></li>
                    </ul>
                </div>
            </div>         
        </div>

        <nav class="mainmenu navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>               
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" style="width:100%"> 
                        <li class="home"><a href="{{ URL::to('/') }}"><img src="{{ asset('img/logo.png') }}"></a></li>                      
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1" data-close-others="false">Nosotros<span class="caret"></span></a>
                            <ul class="dropdown-menu submenu" role="menu">
                                <li><a href="#historia">Historia</a></li>
                                <li><a href="#Mision">Misión y Visión</a></li>
                                <li><a href="#Valores">Valores</a></li>
                                <li><a href="#Filosofia">Filosofía</a></li>                             
                                <li><a href="#Compromiso">Compromiso</a></li>                           
                                <li><a href="#Calidad">Política de Calidad</a></li>    
                                <li><a href="#Distinciones">Distinciones</a></li>                               
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1" data-close-others="false">Exámenes<span class="caret"></span></a>
                            <ul class="dropdown-menu submenu">
                                <li><a href="{{ URL::to('servicios/BioClinicaQuimica') }}">Departamento de Bioquímica Clínica</a></li>                            
                                <li><a href="{{ URL::to('servicios/Coprologia') }}">Departamento de Coprología</a></li>                              
                                <li><a href="{{ URL::to('servicios/Hematologia') }}">Departamento de Hematología</a></li>  
                                <li><a href="{{ URL::to('servicios/Inmunologia') }}">Departamento de Inmunología</a></li>  
                                <li><a href="{{ URL::to('servicios/Microbiologia') }}">Departamento de Microbiología</a></li>  
                                <li><a href="{{ URL::to('servicios/Uroanalisis') }}">Departamento de Uroanálisis</a></li>  
                                <li><a href="{{ URL::to('servicios/Internacional') }}">Departamento de Referencia Internacional</a></li>
                                <li><a href="{{ URL::to('servicios/Patologia') }}">Departamento de Patología</a></li>                            
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1" data-close-others="false">Indicaciones<span class="caret"></span></a>
                            <ul class="dropdown-menu submenu">                              
                                <li><a href="{{ URL::to('/indicaciones') }}">Recolección de muestras</a></li>
                                <li>{{ HTML::Link('/faq', 'Preguntas frecuentes') }}</li>
                            </ul>
                        </li>
                        <li><a href="#" class="resultados">Resultados en Línea</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1" data-close-others="false">Unidades<span class="caret"></span></a>
                            <ul class="dropdown-menu submenu">
                                <li>{{ HTML::Link('/unidades/LindaVista', 'Unidad Linda Vista') }}</li>
                                <li>{{ HTML::Link('/unidades/eden', 'Unidad el Edén') }}</li>                                                                         
                                <li>{{ HTML::Link('/unidades/Veracruz', 'Unidad Veracruz') }}</li>                                             
                                <!--li>{{ HTML::Link('/unidades/LosRobles', 'Unidad Los Robles') }}</li-->  
                                <li>{{ HTML::Link('/unidades/Altamira', 'Unidad Altamira') }}</li>                                            
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1" data-close-others="false">Servicios<span class="caret"></span></a>
                            <ul class="dropdown-menu submenu">
                                <li><a href="{{ URL::to('servicios/Generales') }}">Servicios a empresas</a></li>
                                <li><a href="{{ URL::to('servicios/Generales') }}">Servicio a domicilio</a></li>
                                <li><a href="{{ URL::to('servicios/Generales') }}">Atención a solicitudes de urgencias</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ URL::to('noticias') }}">Noticias</a></li>
                    </ul>
                </div>
            </div>      
        </nav>
    </header>

    <div class="slider" >

       {{-- style="height:350px" --}}
        @yield('slider')
    </div>

    @yield('contenido')

    <!--div class="radio">
        <div class="icono"-->
            <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
            <!--script type="text/javascript" src="http://hosted.musesradioplayer.com/mrp.js"></script>
            <script type="text/javascript">
                MRP.insert({
                'url':'http://streaming.xtremdesign.net:7596/;',
                'lang':'es',
                'codec':'mp3',
                'volume':65,
                'autoplay':true,
                'jsevents':true,
                'buffering':5,
                'title':'Radio Labinco',
                'welcome':'Radio Labinco',
                'wmode':'transparent',
                'skin':'limed',
                'width':397,
                'height':115
                });
            </script>
        </div>
    </div-->
    <a href="#" class="scrollup">Scroll</a>
    <footer>
        <p>Laboratorios Inmaculada Concepción S, A. Centro Comercial Linda Vista Módulos E-7</p>
        <p>y E-8, Managua, Nicaragua. Teléfono: (505) 2266-9826, 2268-6069, 2268-6070</p>
        <p>serviciopacientes@laboratorioinmacula.com.ni </p>
        <ul class="menufooter">
            <li><a href="#">Inicio<span>|</span></a></li>
            <li><a href="#historia">Información<span>|</span></a></li>
            <li><a href="#Distinciones">Reconocimientos<span>|</span> </a></li>
            <li id="reslineafooter"><a href="#">Resultados en Línea<span>|</span> </a></li>
            <li><a href="#">Programa de Apoyo al Paciente<span>|</span> </a></li>
            <li><a href="data/Condiciones.pdf" target="new">Términos de uso<span>|</span> </a></li>
            <li><a href="data/Privacidad.pdf" target="new">Políticas de privacidad<span>|</span>  </a></li>
            <li><a href="#">Mapa<span>|</span> </a></li>            
        </ul>       
        <p>Laboratorios Inmaculada Concepción  © 2014 • Privacy Policy • Powered by Web </p>
        <p><a href="http://doctorpc.com.ni/" target="new">Doctor PC &reg;</a></p>
    </footer>


    {{ HTML::script('js/vendor/jquery-1.11.1.min.js') }}
    {{ HTML::script('js/main.js') }}
    {{ HTML::script('js/vendor/bootstrap.min.js') }}
    {{ HTML::script('js/vendor/bootstrap-hover-dropdown.min.js') }}
    {{ HTML::script('js/jquery-migrate-1.2.1.min.js')}}

    {{ HTML::script('js/wow.min.js') }}

    {{ HTML::script('js/jquery.mobile.customized.min.js') }}
    {{ HTML::script('js/jquery.easing.1.3.js') }}
    {{ HTML::script('js/camera.js') }}

    {{ HTML::script('js/scripts.js') }}
    {{ HTML::script('js/slick.js') }}   

    <script>
        new WOW().init();
    </script>

   @yield('js-slide')
    
    </body>
</html>