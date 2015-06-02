<meta charset="UTF-8"/>
<link rel="stylesheet" href="<?= base_url(); ?>css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/star-rating.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?= base_url(); ?>css/stylesheet.css">
<div class="col-md-10 col-md-offset-1">
	
	<br>
	<h2>Selecciona los criterios </h2>
	<h4>
	<br>
	<div class="col-md-4 col-md-offset-0">
			<table class="table table-hover">
		  		<tr>
		  			<td>
		  				<input  type="checkbox" name="option1" value="val_profe">Calidad de profesores  
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
		  				<input type="checkbox" name="option1" value="val_profe">Calidad de enseñanza 
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
		  				<input type="checkbox" name="option3" value="val_infra">Infraestructura 
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
		  				<input type="checkbox" name="option4" value="val_ubi"> Ubicacion
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
	</div>
	
	<div class="col-md-8 col-md-offset-0">
		
		<?php foreach ($colegios as $colegio) {?>

		<div class="well">
			<form action= "<?= base_url('colegio/show'); ?>" method="get" target="_blank" >
				<div class="list-group" >
			          <a href="#" class="list-group-item">
			                <div class="media col-md-8">
			                    <figure class="pull-left">
			                        <img class="media-object img-rounded img-responsive" width="100" src='<?= $colegio->foto ?>' alt="placehold.it/150x150" >
			                    </figure>
			                </div>
			                <div class="col-md-6">
			                    <h4 class="list-group-item-heading"><?= $colegio->nombre  ?> </h4>
			                    <p class="list-group-item-text"><?= $colegio->direccion  ?> </p>
			                </div>
			                <div class="col-md-3 pull-right">

			                	<h2><?= $colegio->suma_prom  ?> <small> Promedio </small></h2>
			                    <h2><?= $colegio->prom_val_profe  ?> <small> Promedio val_profe</small></h2>
			                    <h2><?= $colegio->prom_val_ense ?> <small> Promedio val_ense</small></h2>
			                    <h2><?= $colegio->prom_val_infra  ?> <small> Promedio val_infra</small></h2>
			                    <h2><?= $colegio->prom_val_ubi ?> <small> Promedio val_ubi</small></h2>
			                     <input type="submit" value="Ver Informacion" class="btn btn-danger" id="informacion">
			                    	                    
			                   
			                </div>
			          </a>
			          
			        </div>
		</div>
		<?php } ?>
	</div>
	
	<br>
	
	</form>
</div>