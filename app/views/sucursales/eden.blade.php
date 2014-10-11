@extends('templates.unidadestemplate')

@section('titulo')

Laboratorio Inmaculada - Unidad el Eden

@stop


@section('slider')
<div class="slider">       
  <div class="fluid_container">
      <div class="camera_wrap camera_blue_skin" id="camera_wrap_1" style="margin-bottom: 0px;">
        <div data-src="{{ asset('img/EDEN/eden1.jpg') }}" alt="Unidad el Eden" title="Laboratorio Inmaculada - Unidad el Eden"></div>
        <div data-src="{{ asset('img/EDEN/eden2.jpg') }}" alt="Unidad el Eden" title="Laboratorio Inmaculada - Unidad el Eden"></div>
        <div data-src="{{ asset('img/EDEN/eden3.jpg') }}" alt="Unidad el Eden" title="Laboratorio Inmaculada - Unidad el Eden"></div>               
     </div>
  </div>
</div>

@stop

@section('contenido')


<article class="divider titulunidad">
  <h2 >Unidad el Edén</h2>  
</article>

<section class="infounidad container">
  <div class="col-sm-6">
     <h3>Dirección:</h3>
       Plaza de compras El Edén, frente al puente
    <h3>Teléfonos:</h3>
       <p>+(505) 2249-2275, 2249-0945</p>
    <h3>Horarios de atención:</h3>
       Lunes - Viernes: 6:30 a.m. a 5:30 p.m.
       Sábados: 6:30 a.m. a 2:30 p.m.
    <h3>Horarios recepción de muestras:</h3>
       Lunes - Viernes: 6:30 a.m. a 4:30 p.m.
       Sábados: 6:30 a.m. a 12:00 p.m.
  </div>

  <div class="col-sm-3">
  <h3>Habilitación</h3>
        <a href="#" id="permisoeden"><img src="{{asset('img/licencias/Licencia El Eden.jpg')}}" style="width:100%;" alt="Habilitacion unidad el Eden" title="Habilitacion Laboratorio Inmaculada - Unidad el Eden"></a>
  </div>
</section>


       <!-- Modal Licencias -->
        <div class="modal fade" id="ModalEden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-body">
               <img src="{{ asset('img/licencias/Licencia El Eden.jpg') }}" class="img-responsive"alt="Habilitacion unidad el Eden" title="Habilitacion Laboratorio Inmaculada - Unidad el Eden">               
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
              </div>
            </div>
          </div>
        </div>
       <!-- Modal licencias -->

<!--Mapa -->
<div id="mapas" style="width:100%;height:360px; margin-top: 2em;"></div>

  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
       <script>
        var myCenter=new google.maps.LatLng(12.140705, -86.242153);



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

@section('js-slide')
   <script>
    jQuery(function(){
      
      jQuery('#camera_wrap_1').camera({
        thumbnails: false
      }); 
    });
  </script>    
@stop