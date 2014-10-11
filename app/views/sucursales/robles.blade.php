@extends('templates.unidadestemplate')
@section('slider')
<div class="slider">       
  <img src="{{ asset('img/eden.jpg') }}" class="img-responsive" style="height:350px; width:100% ">
</div>
@stop

@section('contenido')

<article  id="historia" class="divider">
	<h2 class="text-center">Unidad Los Robles</h2>	
</article>

<section class="infounidad container">
  <h3>Dirección:</h3>
    De plaza el solo 1c al sur y 1c al este.
<h3>Teléfonos:</h3>
   +(505) 2278 4566
<h3>Horarios de atención:</h3>
   Lunes - Viernes: 6:30 a.m. a 5:00 p.m.
   Sábados: 6:30 a.m. a 2:00 p.m.

<h3>Horarios recepción de muestras:</h3>
   Lunes - Viernes: 6:30 a.m. a 2:30 - 3:30 p.m.
   Sábados: 6:30 a.m. a 11:30 - 12:30 p.m.
</section>
<!-- Slider Post --> 
<!--section id="features" class="blue">
      <div class="content">
        <hr/>
        <h2>Imagenes Unidades</h2>
        <div class="slider responsive">
          <div><h3><img src="{{asset('img/LOS_ROBLES/1.jpg')}}" alt="..."></h3></div>
          <div><h3><img src="{{asset('img/LOS_ROBLES/2.jpg')}}" alt="..."></h3></div>
          <div><h3><img src="{{asset('img/LOS_ROBLES/3.jpg')}}" alt="..."></h3></div>        
        </div>
        </div>
    </section-->
<!-- Slider Post -->

<!--Mapa -->
<div id="mapas" style="width:100%;height:360px; margin-top: 2em;"></div>

  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
       <script>
        var myCenter=new google.maps.LatLng(12.119288, -86.260383);



        function initialize()
        {
        var mapProp = {
          center: myCenter,
          zoom:14,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false,
          };

        var map = new google.maps.Map(document.getElementById("mapas"),mapProp);

        var marker = new google.maps.Marker({
          position: myCenter,
          title:'Click to zoom',
          animation:google.maps.Animation.BOUNCE
          });

        marker.setMap(map);
        
        google.maps.event.addListener(marker,'click',function() {
          map.setZoom(16);
          map.setCenter(marker.getPosition());
          });
        }
        google.maps.event.addDomListener(window, 'load', initialize);

        window.onresize = initialize;
      </script>      
@stop