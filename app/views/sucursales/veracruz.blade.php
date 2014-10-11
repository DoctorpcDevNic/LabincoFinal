@extends('templates.unidadestemplate')

@section('titulo')
Laboratorio Inmaculada - Unidad Veracruz
@stop


@section('slider')
<div class="slider">       
  <img src="{{ asset('img/eden.jpg') }}" class="img-responsive" style="height:350px; width:100% " alt="Unidad Veracruz" title="Laboratorio Inmaculada - Unidad Vercruz">
</div>
@stop

@section('contenido')

<article class="divider titulunidad">
  <h2 >Unidad Veracruz</h2>  
</article>

<section class="infounidad container">
  <div class="col-sm-6">
    <h3>Dirección:</h3>
       Km. 14 carretera a Masaya, 1000 mts. hacia veracruz
    <h3>Teléfonos:</h3>
       +(505) 2255-2431
    <h3>Horarios de atención:</h3>
       Lunes - Viernes: 6:30 a.m. a 5:00 p.m.
       Sábados: 6:30 a.m. a 2:00 p.m.

    <h3>Horarios recepción de muestras:</h3>
       Lunes - Viernes: 6:30 a.m. a 2:30 - 3:30 p.m.
       Sábados: 6:30 a.m. a 11:30 - 12:30 p.m.
  </div>

    <div class="col-sm-3">
    <h3>Habilitación</h3>
        <a href="#" id="permisoveracruz"><img src="{{asset('img/licencias/Licencia Veracruz.jpg')}}" style="width:100%;" alt="Habilitacion unidad veracruz" title="Habilitacion Laboratorio Inmaculada - Unidad Vercruz"></a>
  </div>

      <div class="col-sm-3">
    <h3>Licencia</h3>
        <a href="#" id="licenciaveracruz"><img src="{{asset('img/licencias/Registro Veracruz.jpg')}}" style="width:100%;" alt="Licencia unidad veracruz" title="Licencia Laboratorio Inmaculada - Unidad Vercruz"></a>
  </div>
</section>

       <!-- Modal Licencias -->
        <div class="modal fade" id="ModalVeracruz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-body">
               <img src="{{ asset('img/licencias/Licencia Veracruz.jpg') }}" class="img-responsive" alt="Licencia unidad veracruz" title="Licencia Laboratorio Inmaculada - Unidad Vercruz">
               <br/>                            
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
              </div>
            </div>
          </div>
        </div>

                <div class="modal fade" id="LicenciaVeracruz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-body">               
               <br/>
               <img src="{{ asset('img/licencias/Registro Veracruz.jpg') }}" class="img-responsive" alt="Habilitacion unidad veracruz" title="Habilitacion Laboratorio Inmaculada - Unidad Vercruz">               
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
        var myCenter=new google.maps.LatLng(12.057620, -86.196497);



        function initialize()
        {
        var mapProp = {
          center: myCenter,
          zoom:13,
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