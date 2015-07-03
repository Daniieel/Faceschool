<meta charset="UTF-8"/>
<link rel="stylesheet" href="<?= base_url(); ?>css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/star-rating.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?= base_url(); ?>css/stylesheet.css">
 <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
 <script type="text/javascript" title="Geo" ></script>
 <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

      <script>
      var map;
      var myPos;
      var directionsRenderer;
      var directionsService = new google.maps.DirectionsService();
      var directionsDisplay = new google.maps.DirectionsRenderer();
      var markers = [];
      var colegios = [];
      var circle = "";
      var myPos = null;
      var destination = "";
      if (navigator && navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(geoOK, geoKO);
      } else {
         geoMaxmind();
      }

      //-----------------


      function initialize(){      
        
        var mapOptions = {
          zoom: 12,   
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
        
        var directionsDisplay = new google.maps.DirectionsRenderer();
        
        // Indicamos dónde esta el mapa para renderizarnos
        directionsDisplay.setMap(map);
        // Indicamos dónde esta el panel para mostrar el texto
        directionsDisplay.setPanel(document.getElementById("directionsPanel"));
        
      } 

      google.maps.event.addDomListener(window, 'load', initialize);

      //---------------
      function calcular_ruta(id_colegio){
      var end = "";
      colegios.forEach(function(cole){
        if (cole.id == parseInt(id_colegio)) {
          end = cole.latitud+","+cole.longitud;
        };
      });
       var start = myPos;
         var request = {
             origin:start,
             destination:end,
             travelMode: google.maps.TravelMode.DRIVING
         };
         directionsService.route(request, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay.setMap(map);
              directionsDisplay.setPanel($("#directions_panel").get(0));
              directionsDisplay.setDirections(response);
              //var summaryPanel = ($("#distance_panel").get(0));
              summaryPanel.innerHTML = '';
              for (var j = 0; j < response.routes.length; j++){
                var route = response.routes[j];
                var routeSegment = j + 1;
                summaryPanel.innerHTML += '<b>Distancia : ';
                summaryPanel.innerHTML += route.legs[0].distance.text;
                summaryPanel.innerHTML += ' (' + route.legs[0].distance.value + 'm)<br><br>';
                $('#colegio_'+id_colegio).val(route.legs[0].distance.text)
              }
          } else {
              alert("Esta distancia no esta disponible");
          }
      });

      }

//---------- intento

          function calcular_ruta_sin_mapa(id_colegio){
          var end = "";
          colegios.forEach(function(cole){
            if (cole.id == parseInt(id_colegio)) {
              end = cole.latitud+","+cole.longitud;
            };
          });
           var start = myPos;
             var request = {
                 origin:start,
                 destination:end,
                 travelMode: google.maps.TravelMode.DRIVING
             };
             directionsService.route(request, function(response, status) {
              if (status == google.maps.DirectionsStatus.OK) {
                 // directionsDisplay.setMap(map);
                  directionsDisplay.setPanel($("#directions_panel").get(0));
                  directionsDisplay.setDirections(response);
                  var summaryPanel = ($("#distance_panel").get(0));
                  summaryPanel.innerHTML = '';
                  for (var j = 0; j < response.routes.length; j++){
                    var route = response.routes[j];
                    var routeSegment = j + 1;
                    //summaryPanel.innerHTML += '<b>Distancia : ';
                    //summaryPanel.innerHTML += route.legs[0].distance.text;
                    summaryPanel.innerHTML += '';
                    $('#colegio_'+id_colegio).val(route.legs[0].distance.text)
                  }
              } else {
                  alert("Esta distancia no esta disponible");
              }
          });

          }
      

          function calcular_rutas(){
           
          var end = "";
          var summaryPanel = ($("#distance_panel2").get(0));
          summaryPanel.innerHTML = '';
          colegios.forEach(function(cole){
              end = cole.latitud+","+cole.longitud;
              calcular_ruta_sin_mapa(cole.id);
             // summaryPanel.innerHTML += '<b>Distancia Colegio('+cole.id+'): ';
              //summaryPanel.innerHTML += $('#colegio_'+cole.id).val()+'<br><br>';    
             
          });
           var summaryPanel = ($("#distance_panel").get(0));
          summaryPanel.innerHTML = '';
          }



//----- fin intento

  


      function geoOK(position) {
      showMap(position.coords.latitude, position.coords.longitude);

      //agrega marcador del colegio
      //carga los marcadores del mapa con los colegios de la base de datos
      <?php foreach ($colegios as $colegio2){ ?>
      <?php foreach ($colegios_mapa as $colegio_mapa) { ?>
      	<?php if( $colegio_mapa->id_colegio ==  $colegio2->id_colegio  ){ ?>
      	
      var place<?= $colegio_mapa->id_colegio ?> = new google.maps.LatLng(<?= $colegio_mapa->latitud ?>,<?= $colegio_mapa->longitud ?>);
      var marke = new google.maps.Marker({
                position: place<?= $colegio_mapa->id_colegio ?>
              , title: "<?= $colegio_mapa->nombre ?>"
              , icon: 'http://i.imgur.com/Vw20Fx3.png'
              , map: map
              , });
      var cole = {id:<?= $colegio_mapa->id_colegio?> , latitud:"<?= $colegio_mapa->latitud ?>", longitud:"<?= $colegio_mapa->longitud?>"};
      colegios.push(cole);
       markers.push(marke);
       
      <?php } ?>
     // <?php } ?>
      //<?php } ?>

      }
      function geoMaxmind() {
      showMap(geoip_latitude(), geoip_longitude());
      }

      function geoKO(err) {
      if (err.code == 1) {
      error('El usuario ha denegado el permiso para obtener informacion de ubicacion.');
      } else if (err.code == 2) {
      error('Tu ubicacion no se puede determinar.');
      } else if (err.code == 3) {
      error('TimeOut.')
      } else {
      error('No sabemos que pasó pero ocurrio un error.');
      }
      }

      function showMap(lat, longi, radius) {

      myPos = new google.maps.LatLng(lat,longi);

      var myOptions = {
        zoom: 14,
        center: myPos,
        mapTypeId: google.maps.MapTypeId.ROADMAP,

      }

      map = new google.maps.Map(document.getElementById("mapa"), myOptions);


      var marker = new google.maps.Marker({
          position: myPos,
          title:"Tu Ubicacion",
          draggable:false,
          icon: 'https://dl.dropboxusercontent.com/u/20056281/Iconos/male-2.png',
          animation: google.maps.Animation.BOUNCE
      });



      marker.setMap(map);


     

      directionsRenderer = new google.maps.DirectionsRenderer();
      directionsRenderer.setMap(map);



      }
//---------------------------------------------------

      function travelToAddress(){
       var colegioActual = document.forms[0].colegio.value;
       var LocalLatLong;
        if(colegioActual == -1){
          return;
        }
      <?php foreach ($colegios as $colegio) { ?> 
         else if( <?= $colegio->id_colegio ?> == colegioActual){
           LocalLatLong =  '<?= $colegio->latitud ?>,<?= $colegio->longitud ?>';
         }
      <?php } ?>


        //Obtenemos la direccion
        //destino=document.forms[0].address.value;
        destino = LocalLatLong;
        directionsService = new google.maps.DirectionsService();
        // opciones de busqueda
        var request = {
          origin: myPos,
          destination: destino,
          travelMode: google.maps.DirectionsTravelMode.DRIVING
        };
        directionsService.route(request,getRuta);
      }

//--------------------------------------------------------
      function getRuta(result, status){

          if (status == google.maps.DirectionsStatus.OK) {
             directionsRenderer.setDirections(result);
          } else {
             error("Ha ocurrido un error debido a : " + status);
          }
      }
      function error(msg) {
      alert(msg);
      }
      function onGDirectionsLoad(){ 
            //resumen de tiempo y distancia
            document.getElementById("getDistance").innerHTML =gdir.getSummaryHtml(); 
      }
      function procesaClick() {
          alert("Marcador: " + this.title + ", ID: " + this.idColegio);
      }
      


      </script>

<div class="col-md-4 col-md-offset-1">
	<form action= "<?= base_url('clasificador/show_2'); ?>" method="get" >
	<br>
	<h2>Selecciona los criterios </h2>
	<h4>
	<br>
	<div class="col-md-10">
			<table class="table table-hover">
		  		<tr>
		  			<td>
		  				Calidad de profesores  
		  			</td>
		  			<td>
		  				 
                     <span class="starRating">
                      <input id="val_profel5" type="radio" name="val_profe" value="5">
                      <label for="val_profel5">5</label>
                      <input id="val_profel4" type="radio" name="val_profe" value="4">
                      <label for="val_profel4">4</label>
                      <input id="val_profel3" type="radio" name="val_profe" value="3" >
                      <label for="val_profel3">3</label>
                      <input id="val_profel2" type="radio" name="val_profe" value="2">
                      <label for="val_profel2">2</label>
                      <input id="val_profel1" type="radio" name="val_profe" value="1">
                      <label for="val_profel1">1</label>
                    </span>
		  			</td>
		  			
		  		</tr>
		  		<tr>
		  			<td>
		  				Calidad de enseñanza 
		  			</td>
		  			<td>
		  				<span class="starRating">
                      <input id="val_ense5" type="radio" name="val_ense" value="5">
                      <label for="val_ense5">5</label>
                      <input id="val_ense4" type="radio" name="val_ense" value="4">
                      <label for="val_ense4">4</label>
                      <input id="val_ense3" type="radio" name="val_ense" value="3" >
                      <label for="val_ense3">3</label>
                      <input id="val_ense2" type="radio" name="val_ense" value="2">
                      <label for="val_ense2">2</label>
                      <input id="val_ense1" type="radio" name="val_ense" value="1">
                      <label for="val_ense1">1</label>
                    </span>
		  			</td>
		  			
		  		</tr>
		  		<tr>
		  			<td>
		  				Infraestructura 
		  			</td>
		  			<td>
		  				<span class="starRating">
                      <input id="val_infra5" type="radio" name="val_infra" value="5">
                      <label for="val_infra5">5</label>
                      <input id="val_infra4" type="radio" name="val_infra" value="4">
                      <label for="val_infra4">4</label>
                      <input id="val_infra3" type="radio" name="val_infra" value="3" >
                      <label for="val_infra3">3</label>
                      <input id="val_infra2" type="radio" name="val_infra" value="2">
                      <label for="val_infra2">2</label>
                      <input id="val_infra1" type="radio" name="val_infra" value="1">
                      <label for="val_infra1">1</label>
                    </span>
		  			</td>
		  			
		  		</tr>
		  		<tr>
		  			<td>
		  				Ubicacion
		  			</td>
		  			<td>
		  				<span class="starRating">
                      <input id="val_ubi5" type="radio" name="val_ubi" value="5">
                      <label for="val_ubi5">5</label>
                      <input id="val_ubi4" type="radio" name="val_ubi" value="4">
                      <label for="val_ubi4">4</label>
                      <input id="val_ubi3" type="radio" name="val_ubi" value="3" >
                      <label for="val_ubi3">3</label>
                      <input id="val_ubi2" type="radio" name="val_ubi" value="2">
                      <label for="val_ubi2">2</label>
                      <input id="val_ubi1" type="radio" name="val_ubi" value="1">
                      <label for="val_ubi1">1</label>
                    </span>
		  			</td>
		  			
		  		</tr>
			</table>
			<button type="submit" class="btn btn-default">Buscar</button>

			
			<div id="mapa" style="width:100%; height:470px; border: 2px solid black;  position: center; overflow: hidden"></div>
      <div id="distance_panel" style="width: 100%; height: 20%;"></div> 	
      <div id="distance_panel2"></div>
      <a onclick="calcular_rutas();" class="btn btn-danger" id="informacion">Ver distancias</a>	
        	   
        	</div>
        	</div>
			
	</div>
	</form>
	<div class="col-md-7 ">
    <?php foreach ($colegios as $colegio ) {?>
      <div class="col-md-12 well">
  				
  				<ul class="list-group" >
            <li class="list-group-item media">
                  <div class="col-md-8">
                      <figure class="pull-left">
                          <img class="media-object img-rounded img-responsive" width="100" src='<?= $colegio->foto ?>' alt="placehold.it/150x150" >
                      </figure>
                  </div>
                  <div class="col-md-6">
                      <h4 class="list-group-item-heading"><?= $colegio->nombre  ?> </h4>
                      <p class="list-group-item-text"><?= $colegio->direccion  ?> </p>
                     <h4>Distancia: <input type="text" id="colegio_<?= $colegio->id_colegio ?>" disabled> </h4>
                      
                  </div>
                  <div class="col-md-3 pull-right">

                  	<h2><?= $colegio->suma_total ?> <small> Total </small></h2>

                       <a href="<?= base_url('colegio/show?colegio='.$colegio->id_colegio) ?>" target="_blank" class="btn btn-danger" id="informacion">Ver Información</a>

                       <a onclick="calcular_ruta('<?= $colegio->id_colegio ?>');" class="btn btn-danger" id="informacion">Como llegar</a>                                      
                  </div>


            </li>
          </ul>
       </div>
  	<?php } ?>
	</div>
	<br>
</div>