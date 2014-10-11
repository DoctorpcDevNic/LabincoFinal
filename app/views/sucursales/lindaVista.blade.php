@extends('templates.unidadestemplate')

@section('titulo')
Laboratorio Inmaculada - Unidad Linda Vista
@stop

@section('slider')
<div class="slider">       
  <div class="fluid_container">
      <div class="camera_wrap camera_blue_skin" id="camera_wrap_1" style="margin-bottom: 0px;">        
          <div data-src="{{ asset('img/LINDA_VISTA/LV1.jpg') }}" alt="Unidad Linda Vista" title="Laboratorio Inmaculada - Unidad Linda Vista"></div>
          <div data-src="{{ asset('img/LINDA_VISTA/LV2.jpg') }}" alt="Unidad Linda Vista" title="Laboratorio Inmaculada - Unidad Linda Vista"></div>
          <div data-src="{{ asset('img/LINDA_VISTA/LV3.jpg') }}" alt="Unidad Linda Vista" title="Laboratorio Inmaculada - Unidad Linda Vista"></div>
          <div data-src="{{ asset('img/LINDA_VISTA/LV4.jpg') }}" alt="Unidad Linda Vista" title="Laboratorio Inmaculada - Unidad Linda Vista"></div>
          <div data-src="{{ asset('img/LINDA_VISTA/LV5.jpg') }}" alt="Unidad Linda Vista" title="Laboratorio Inmaculada - Unidad Linda Vista"></div>
     </div>
  </div>
</div>

@stop

@section('contenido')

<article class="divider titulunidad">
	<h2 >Unidad Linda Vista</h2>	
</article>

    <section class="infounidad container">
      <div class="col-sm-6">
        <h3>Dirección:</h3>
         <p>Centro Comercial Linda Vista Módulos E-7 y E-8</p>
        <h3>Teléfonos:</h3>
        <p>+(505) 2266-9826, 2268-6069, 2268-6070</p>
        <h3>Horarios de atención:</h3>
         Lunes - Viernes: 6:30 a.m. a 6:00 p.m. 
         Sábados: 6:30 a.m. a 3:00 p.m.
         <br>
        <h3>Horarios recepción de muestras:</h3>
         Lunes - Viernes: 6:30 a.m. a 5:30 p.m.
         Sábados: 6:30 a.m. a 2:30 p.m.</p>
      </div>

      <div class="col-sm-3">
      <h3>Habilitación</h3>
        <a href="#" id="permisolv"><img src="{{asset('img/licencias/Licencia LV.jpg')}}" style="width:100%;" alt="Habilitacion unidad Linda Vista" title="Habilitacion Laboratorio Inmaculada - UnidadLinda Vista"></a>
      </div>

      <div class="col-sm-3">
      <h3>Licencia</h3>
        <a href="#" id="registrolv"><img src="{{asset('img/licencias/Registro LV.jpg')}}" style="width:100%;" alt="Licencia unidad Linda Vista" title="Licencia Laboratorio Inmaculada - UnidadLinda Vista"></a>
      </div>

    </section>

       <!-- Modal Licencias -->
        <div class="modal fade" id="ModalLV" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-body">
               <img src="{{ asset('img/licencias/Licencia LV.jpg') }}" class="img-responsive" alt="Habilitacion unidad veracruz" title="Habilitacion Laboratorio Inmaculada - Unidad Vercruz">               
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ModalLVreg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-body">               
               <img src="{{ asset('img/licencias/Registro LV.jpg') }}" class="img-responsive" alt="Licencia unidad Linda Vista" title="Licencia Laboratorio Inmaculada - UnidadLinda Vista">
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
        var myCenter=new google.maps.LatLng(12.153508, -86.306167);



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