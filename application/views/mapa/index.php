<div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-bottom:30px;">

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
      function calcular_ruta(){
      var end = "";
      colegios.forEach(function(cole){
        if (cole.id == parseInt($('#colegio').val())) {
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
             directionsDisplay.setDirections(response);
           }
         });
         directionsDisplay.setMap(map);
         directionsDisplay.setPanel(document.getElementById("directionsPanel"));
      }

      function geoOK(position) {
      showMap(position.coords.latitude, position.coords.longitude);

      //agrega marcador del colegio
      //carga los marcadores del mapa con los colegios de la base de datos
      <?php foreach ($colegios as $colegio) {
                   ?> 
      var place<?= $colegio->id_colegio ?> = new google.maps.LatLng(<?= $colegio->latitud ?>,<?= $colegio->longitud ?>);
      var marke = new google.maps.Marker({
                position: place<?= $colegio->id_colegio ?>
              , title: "<?= $colegio->nombre ?>"
              , icon: 'http://i.imgur.com/Vw20Fx3.png'
              , map: map
              , });
      var cole = {id:<?= $colegio->id_colegio?> , latitud:"<?= $colegio->latitud ?>", longitud:"<?= $colegio->longitud?>"};
      colegios.push(cole);
       markers.push(marke);
      <?php }

      ?>

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


      // Agregar circulo al mapa
      circle = new google.maps.Circle({
        map: map,
        radius: 0,    // 10 miles in metres
        fillColor: '#819FF7',
        strokeColor: '#2E9AFE'
      });
      circle.bindTo('center', marker, 'position');

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
      <script type="text/javascript">
        $( document ).ready(function() {
          
         
        $("#informacion").attr("disabled", "disabled");
        $("#como_llegar").attr("disabled", "disabled");
        $('#colegio').change(function() { //boton que cambia todo
          if ($('#colegio').val()== "" || $('#colegio').val() == null) {
              $("#informacion").attr("disabled", "disabled");
              $("#como_llegar").attr("disabled", "disabled");
          }else{
             $("#informacion").removeAttr("disabled");
             $("#como_llegar").removeAttr("disabled");
          }
        });

        $(' #dependencia, #religion, #idioma, #mensualidad, #ranking_nac, #metros_constru,#matricula').change(function() { //boton que cambia todo
            
            
          //borro todos los makers (los colegios en el mapa)
           for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(null);
            }
          //alert($("#comuna").val()+$("#dependencia").val()+$("#religion").val()+$("#idioma").val()+$("#mensualidad").val() );
           $.getJSON("<?= base_url('mapa/filtro') ?>", { dependencia:$("#dependencia").val(), religion:$("#religion").val(), idioma:$("#idioma").val(), mensualidad: $('#mensualidad').val(),ranking_nac:$("#ranking_nac").val(), metros_constru:$("#metros_constru").val(), matricula:$("#matricula").val()}, function(data) {
              var colegio = $('#colegio') //combobox
              $("option", colegio).remove(); //borro todos los elementos del colegio
              var option = '';
             
               $.each(data, function(index, op) {
                
                //agrego los nuevos makers
               for (var i = 0; i < markers.length; i++) {
                  if (op.nombre.localeCompare(markers[i].title) == 0) {
                    markers[i].setMap(map);
                    break;
                  }
                }
                
                //agrego los options del colegio
               option += "<option value='"+op.id_colegio+"'>"+op.nombre+"</option>";
                
                

               });
              colegio.html(option);
              $("#informacion").removeAttr("disabled");
            });
           
          });
        });
      </script>


<!-- para que cambie el recomendador -->

<script type="text/javascript">
        $( document ).ready(function() {       
         
        $('#recomendador').change(function() { //boton que cambia todo
         
        });
          
        $('#comuna, #dependencia, #religion, #idioma','#mensualidad').change(function() { //boton que cambia todo
          
          $.getJSON("<?= base_url('mapa/recomendador') ?>", {dependencia:$("#dependencia").val(), religion:$("#religion").val(), idioma:$("#idioma").val(), mensualidad: $('#mensualidad').val(),ranking_nac:$("#ranking_nac").val(), metros_constru:$("#metros_constru").val(), matricula:$("#matricula").val()}, function(data) {
              
              var colegio = $('#recomendador') //combobox
              $("option", colegio).remove(); //borro todos los elementos del colegio
              var option = '';
              
              $.each(data, function(index, op) {
                //agrego los options del colegio
              option += "<tr><td><a href='<?= base_url('colegio/show?colegio='.'"+op.id_colegio+"'); ?>' target='_blank' class='btn btn-primary btn-xs' role='button'>"+op.nombre+" </a></td><br><td>"+op.total_megusta+"</td></tr>" 
              
               
              });
              colegio.html(option);
            });
           
          });
        });
      </script>






  <script>
  $(function() {
    $( "#amount").change(function() { 
      alert('hola');
      
    
      });

  });


  </script>




<!-- recomendador -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>





      <h1 class= "read" align="" style="margin-top:60px; margin-bottom:30px;"><strong>Encuentra</strong> todos los <strong>colegios</strong> cercanos a tu <strong>ubicación</strong></h1>
      <div class="col-md-4" style="background:rgb(79, 78, 78); color:white;">
    
        <h3>Inicia tu b&uacute;squeda:</h3>
          
        

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
         <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingOne">
             <h4 class="panel-title">
               <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Busqueda b&aacute;sicas:
               </a>
             </h4>
           </div>
           <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
             <div class="panel-body">
                 <div class="form-group">
                  <label><h5 style="color:black;">Tipo dependencia:</h5></label>
                  <select name= "dependencia" class= "form-control" id="dependencia">
                    <option value="Todos">Todos</option>
                        <?php foreach ($dependencia as $dependencia) {
                        ?>
                        <option value="<?= $dependencia->id_dependencia ?>"><?= $dependencia->dependencia ?></option>
                        <?php }

                         ?> 
                  </select>
               </div>
               <div class="form-group">
                    <label><h5 style="color:black;">Mensualidad:</h5></label>
                    <select name= "mensualidad" class= "form-control" id="mensualidad">
                      <option value="Todos,Todos">Todos</option>
                      <option value="0,0">Gratuito</option>
                      <option value="1,50000">Entre $1 y $50.000 </option>
                      <option value="50001,100000">Entre $50.001 y $100.000 </option>
                      <option value="100001,200000">Entre $100.001 y $200.000 </option>
                      <option value="200001,300000">Entre $200.001 y $300.000 </option>
                      

                    </select>
                 </div>
                <div class="form-group">
                  <label><h5 style="color:black;">Metros construidos:</h5></label>
                  <select name= "metros_constru" class= "form-control" id="metros_constru">
                    <option value="Todos">Todos</option>
                    <option value=100>100mt2</option>
                    <option value=150>150mt2</option>
                    <option value=200>200mt2</option>
                    <option value=250>250mt2</option>
                    <option value=300>300mt2</option>
                    <option value=350>350mt2</option>
                    <option value=400>400mt2</option>
                    <option value=450>450mt2</option>
                    <option value=500>500mt2</option>
                                  
                  </select>
               </div>
               
                
                 <script>
                 $(function() {
                   $( "#slider" ).slider({
                     value:0,
                     min: 0,
                     max: 50000,
                     step: 100,
                     slide: function( event, ui ) {
                       $( "#amount" ).val( ui.value+ " m" );
                        var rango = parseInt($("#amount").val());
                        circle.setRadius(ui.value);
                     }
                   });
                   $( "#amount" ).val($( "#slider" ).slider( "value" )+ " m" );
                 });
                 </script>
               <div class="form-group">
                 <p>
                   <label for="amount"> <h5 style="color:black">Colegios a la redonda
                   <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"> 
                    </h5></label>
                 </p>
                 
                  <div id="slider"></div>
                </div>
             </div>
           </div>
         </div>
         <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingTwo">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Busqueda avanzada:
               </a>
             </h4>
           </div>
           <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
             <div class="panel-body" style="color:black">
               
                <div class="form-group">
                 <label><h5>Selecciona religi&oacute;n:</h5></label>
                 <select name= "religion" class= "form-control" id="religion">
                   <option value="Todos">Todos</option>
                       <?php foreach ($religiones as $religion) {
                       ?>
                       <option value="<?= $religion->id_religion ?>"><?= $religion->religion ?></option>
                       <?php }

                        ?> 
                 </select>
              </div>

              <div class="form-group">
                 <label><h5>Selecciona idioma:</h5></label>
                 <select name= "idioma" class= "form-control" id="idioma">
                   <option value="Todos">Todos</option>
                       <?php foreach ($idiomas  as $idioma) {
                       ?>
                       <option value="<?= $idioma->id_idioma ?>"><?= $idioma->idioma ?></option>
                       <?php }

                        ?> 
                 </select>
              </div>
              
              

              <div class="form-group">
                 <label><h5>Ranking Nacional:</h5></label>
                 <select name= "ranking_nac" class= "form-control" id="ranking_nac">
                    <option value="Todos">Todos</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value=10>10</option>
                    <option value=11>11</option>
                    <option value=12>12</option>
                    <option value=13>13</option>
                    <option value=14>14</option>
                    <option value=15>15</option>
                    <option value=16>16</option>
                    <option value=17>17</option>
                    <option value=18>18</option>
                    <option value=19>19</option>

                    
                  </select>
              </div>
              
              <div class="form-group">
                 <label><h5>Rango matr&iacute;cula:</h5></label>
                 <select name= "matricula" class= "form-control" id="matricula">
                    <option value="Todos,Todos">Todos</option>
                    <option value="0,0">Gratuita</option>
                    <option value="1,10000">Entre $1 y $10.000 </option>
                    <option value="10001,50000">Entre $10.001 y $50.000 </option>
                    <option value="50001,100000">Entre $50.001 y $100.000 </option>
                    <option value="100001,200000">Entre $100.001 y $200.000 </option>
                    

                  </select>
              </div>
             </div>
           </div>
         </div>
         <form action= "<?= base_url('colegio/show'); ?>" method="get" target="_blank" >
       <div class="form-group">
         <label><h4>Resultado de la busqueda:</h4></label>
         <!-- se llena el combobox con los colegios con la posicion de la base de datos y hace la funcion "como llegar"--> 
         <select name="colegio" class="form-control" id="colegio">

               <option value="">Selecciona un colegio</option>
               <?php foreach ($colegios as $colegio) {
               ?>

               <option value="<?= $colegio->id_colegio ?>"><?= $colegio->nombre ?></option>

               <?php }

                ?> 

            </select> 
       </div>
      
        <div class="form-group">
          <input type="button"value="Como llegar!" onclick="calcular_ruta();" class="btn btn-danger" id="como_llegar">
          <input type="submit" value="Ver Informacion" class="btn btn-danger" id="informacion">
        </div>

      </form>
       </div>
       
        <br>
        <br>
        <h3 class="read">Te invitamos a usar <strong>Street View</strong></h3>
        <h5 class="read">Arrastra el icono de la persona naranja, hacia el colegio que deseas ver</h5>

        <br></br>
        <br></br>
        <br></br>
        <br></br>
            
            
    
      
      </div>
      
      <div class="col-md-8">
        <!-- MAPA -->
        <div id="mapa" style="width:100%; height:470px; border: 2px solid black;  position: center; overflow: hidden"></div>
        <table name ="recomendador" class="table table-striped" style="font-size:12px" >
              <thead>
                <tr>
                  <th>Colegios que mas han gustado!</th>
                  <th>A cuantos les gusta este colegio!</th>
                  
                </tr>

              </thead>
              <tbody id="recomendador" >

                <?php foreach ($me_gusta as $me_gusta) {
                ?>
              
                    <tr>
                      <td><a href="<?= base_url('colegio/show?colegio='.$me_gusta->id_colegio); ?>"  target="_blank" class="btn btn-primary btn-xs" role="button"><?= $me_gusta->nombre ?></a></td>
                      <td><?= $me_gusta->total_megusta ?></td>
                      
                     </tr>
                  <?php }

                  ?> 
              
              </tbody>
            </table>
        <div class="fb-recommendations" data-site="http://faceschool.cl/" data-action="likes, recommends" data-colorscheme="light" data-header="true" style="width: 100%;float:center;"></div>
      </div>

      <div class="col-md-3">
        
        <div id="directionsPanel" style="width: 100%;float:center;"></div>

      </div>
    </div>
  </div>
</div>