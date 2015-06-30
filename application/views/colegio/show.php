<div id="fb-root"></div>
<div id="fb-root"></div>



<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- recomendador -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="container">
	<div class="row">
		<div class="col-md-9 col-md-offset-1">
			<p  class="para"><h2 >Informaci&oacute;n del Colegio</h2></p>
			<p></p>
			
			

			<table width="200" border="5" class = "table table-striped" >
			<tr>
			<th><h5 >Imagen Referencial:</h5></th>
		
			<td><a href=<?= $colegio->foto?>><img src=<?= $colegio->foto?>

    		alt="" WIDTH="300" HEIGHT="300" border="1"></a></td>

			</tr>
			<tr>
			<th><h5 style="margin-left:3em margin-right:3em;">Nombre:</h5></th>
			<td><h5><?= $colegio->nombre ?></h5></td>

			</tr>


			<tr>
			<th><h5 >Direcci&oacute;n:</h5></th>
			<td><h5><?= $colegio->direccion ?></h5></td>


			</tr>

			<tr>
			<th><h5 >Tel&eacute;fono</h5></th>
			 <td><h5><?= $colegio->telefono ?></h5></td>

			</tr>
			<tr>
			<th><h5 >P&aacute;gina Web: </h5></th>

			<td><a target="_blank"  href="http://<?= $colegio->pagina_web ?>" class="fa-btn btn-1 btn-1e"><?= $colegio->pagina_web ?></a></td>
			</tr>

			<tr>
			<th><h5 >Tipo de Dependencia:</h5></th>
			<td><h5><?= $colegio->dependencia ?></h5></td>

			</tr>

			<tr>
			<!--<th><h5 >Religion</h5></th>
			 <td><h5><?= $colegio->religion ?></h5></td>

			</tr>

			<tr>
			<th><h5 >Idioma</h5></th>
			 <td><h5><?= $colegio->idioma ?> <?= $colegio->idioma2 ?> <?= $colegio->idioma3 ?> </h5></td>

			</tr>-->
			<th><h5 >Grupo Socioecon&oacute;mico:</h5></th>
			 <td><h5><?= $colegio->grupo_socioeco ?></h5></td>

			</tr>

			</tr>
			<th><h5 >Ranking Nacional:</h5></th>
			 <td><h5><?= $colegio->ranking_nac ?></h5></td>

			</tr>

			</tr>
			<th><h5 >M&eacute;todo de Enseñanza:</h5></th>
			 <td><h5><?= $colegio->met_ense?></h5></td>

			</tr>


			</tr>
			<th><h5 >Actividades Extraprogram&aacute;ticas:</h5></th>
			 <td><h5><?= $colegio->act_extr ?></h5></td>

			</tr>

			</tr>
			<th><h5 >Promedio de alumnos por sala:</h5></th>
			 <td><h5><?= $colegio->cant_alu ?></h5></td>

			</tr>

			</tr>
			<th><h5 >Cantidad de profesores:</h5></th>
			 <td><h5><?= $colegio->cant_prof ?></h5></td>

			</tr>

			</tr>
			<th><h5 >Horas de ingl&eacute;s impartidas:</h5></th>
			 <td><h5><?= $colegio->hrs_ingles ?></h5></td>

			</tr>
			
			</tr>
			<th><h5 >Convenio Universidades Extranjeras:</h5></th>
			 <td><h5><?= $colegio->conv_extr ?></h5></td>

			</tr>

			</tr>
			<th><h5 >Logros Deportivos:</h5></th>
			 <td><h5><?= $colegio->logr_dep ?></h5></td>

			</tr>

			</tr>
			<th><h5 >Contacto:</h5></th>
			 <td><h5><?= $colegio->contacto ?></h5></td>

			</tr>

			</table>

			<!-- la otra tabla-->
			<p  class="para"><h2 >Resultados PSU del Colegio</h2></p>
			<table width="200" border="5" class = "table" >

			

			<tr>
			
		      <thead>
		        <tr>
		          <th><h5>Año</h5></th>
		          <th><h5>2012</h5></th>
		          <th><h5>2013</h5></th>
		         
		        </tr>

		      </thead>
		      <tbody>
		      
				        <tr>
				          
				          <td><h5>Lenguaje promedio</h5></td>
				          
				          <td><h5><?= $colegio->lenguaje_promedio_2012 ?></h5></td>
				          <td><h5><?= $colegio->lenguaje_promedio_2013 ?></h5></td>


				        </tr>
				        <tr>
				      

				        <tr>
				        <th><h5 >Lenguaje m&aacute;ximo</h5></th>
						<td><h5><?= $colegio->lenguaje_maximo_2012 ?></h5></td>
				        <td><h5><?= $colegio->lenguaje_maximo_2013 ?></h5></td>

				        </tr>

				        <tr>
				        <th><h5 >Lenguaje m&iacute;nimo</h5></th>
				        <td><h5><?= $colegio->lenguaje_minimo_2012 ?></h5></td>
				        <td><h5><?= $colegio->lenguaje_minimo_2013 ?></h5></td>

				        </tr>

				        <tr>
				          
				          <td><h5>Matem&aacute;ticas promedio</h5></td>
				          
				          <td><h5><?= $colegio->matematicas_promedio_2012 ?></h5></td>
				          <td><h5><?= $colegio->matematicas_promedio_2013 ?></h5></td>


				        </tr>
				        <tr>
				      

				        <tr>
				        <th><h5 >Matem&aacute;ticas m&aacute;ximo</h5></th>
						<td><h5><?= $colegio->matematicas_maximo_2012 ?></h5></td>
				        <td><h5><?= $colegio->matematicas_maximo_2013 ?></h5></td>

				        </tr>

				        <tr>
				        <th><h5 >Matem&aacute;ticas m&iacute;nimo</h5></th>
				        <td><h5><?= $colegio->matematicas_minimo_2012 ?></h5></td>
				        <td><h5><?= $colegio->matematicas_minimo_2013 ?></h5></td>

				        </tr>

				        
				        
				
		      </tbody>
		    
			</tr>


			

			

			
			</table>

			<!-- Otra otra tabla -->
				<p  class="para"><h2 >Resultados Simce del Colegio</h2></p>
				<table width="200" border="5" class = "table" >

				

				<tr>
				
			      <thead>
			        <tr>
			          <th><h5>Año</h5></th>
			          <th><h5>2013</h5></th>
			         
			        </tr>

			      </thead>
			      <tbody>
			      
					        <tr>
					          
					          <td><h5>Simce 2 B&aacute;sico Comprensi&oacute;n Lectora</h5></td>
					          
					          
					          <td><h5><?= $colegio->comprension_lectora_2bas_2013 ?></h5></td>


					        </tr>
					        <tr>
					      

					        <tr>
					        <th><h5 >Simce 4 B&aacute;sico Comprensio&oacute;n Lectora</h5></th>
							
					        <td><h5><?= $colegio->comprension_lectora_4bas_2013 ?></h5></td>

					        </tr>

					        <tr>
					        <th><h5 >Simce 4 B&aacute;sico Matem&aacute;ticas</h5></th>
					        
					        <td><h5><?= $colegio->matematicas_4bas_2013 ?></h5></td>

					        </tr>

					        <tr>
					          
					          <td><h5>Simce 4 B&aacute;sico Ciencias Naturales</h5></td>
					          
					          <td><h5><?= $colegio->ciencias_naturales_4bas_2013 ?></h5></td>


					        </tr>
					        <tr>
					      

					        <tr>
					        <th><h5 >Simce 6 B&aacute;sico Comprensi&oacute;n Lectora</h5></th>
							
					        <td><h5><?= $colegio->compresion_lectora_6bas_2013 ?></h5></td>

					        </tr>

					        <tr>
					        <th><h5 >Simce 6 B&aacute;sico Matem&aacute;ticas</h5></th>
					        
					        <td><h5><?= $colegio->matematicas_6bas_2013 ?></h5></td>

					        </tr>

							<tr>
					        <th><h5 >Simce 6 B&aacute;sico Escritura</h5></th>
					        
					        <td><h5><?= $colegio->escritura_6bas_2013 ?></h5></td>

					        </tr>

					        <tr>
					        <th><h5 >Simce 8 B&aacute;sico Comprensi&oacute;n Lectora</h5></th>
							
					        <td><h5><?= $colegio->comprension_lectora_8bas_2013 ?></h5></td>

					        </tr>

					        <tr>
					        <th><h5 >Simce 8 B&aacute;sico Matem&aacute;ticas</h5></th>
					        
					        <td><h5><?= $colegio->matematicas_8bas_2013 ?></h5></td>

					        </tr>

							<tr>
					        <th><h5 >Simce 8 B&aacute;sico Ciencias Naturales</h5></th>
					        
					        <td><h5><?= $colegio->ciencias_naturales_8bas_2013 ?></h5></td>

					        </tr>

					        <tr>
					        <th><h5 >Simce 2 Medio Comprensi&oacute;n Lectora</h5></th>
							
					        <td><h5><?= $colegio->comprension_lectora_2med_2013 ?></h5></td>

					        </tr>

					        <tr>
					        <th><h5 >Simce 2 Medio Matem&aacute;ticas</h5></th>
					        
					        <td><h5><?= $colegio->matematicas_2med_2013 ?></h5></td>

					        </tr>
					        
					        
					
			      </tbody>
			    
				</tr>


				

				

				
				</table>			
				<div class="col-sm-10">
				<h5><p>*Tu opinion nos interesa</p></h5>
				<a href="<?= base_url('puntuacion/show?colegio='.$colegio->id_colegio) ?>" target="_blank" class="btn btn-danger" id="informacion">Califica este colegio!</a>
				
				</div>
			<!-- -->
		<?php if ($like == FALSE): ?>
				<form action="<?= base_url('colegio/agregar_me_gusta')  ?>" method="post">
				<div class="form-group">
			    	<div class="col-sm-10">
			      		<input type="hidden" name="ip_usuario" class="form-control" id="inputEmail3" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<div class="col-sm-10">
			      		<input type="hidden" name="id_colegio" class="form-control" id="inputEmail3" value="<?= $colegio->id_colegio ?>">
			    	</div>
			  	</div>

				<button type="submit" class="btn btn-primary">Me Gusta</button>
			</form>
		<?php else:?>
			<div class="col-sm-10">
			<h5 class="lead text-info">Ya le has hecho me gusta	</h5>
			</div>
		<?php endif ?>
				
    		<div class="fb-comments" data-href="http://faceschool.cl/colegio/show?colegio=<?= $colegio->id_colegio ?>" data-numposts="5" data-colorscheme="light"></div>
			<div class="fb-like" data-href="http://faceschool.cl/colegio/show?colegio=<?= $colegio->id_colegio ?>" data-layout="standard" data-action="recommend" data-show-faces="true" data-share="true"></div>
		</div>

		
	</div>
</div>

