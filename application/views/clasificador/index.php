<meta charset="UTF-8"/>
<link rel="stylesheet" href="<?= base_url(); ?>css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/star-rating.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?= base_url(); ?>css/stylesheet.css">

<div class="col-md-10 col-md-offset-1">
	<form action= "<?= base_url('clasificador/show_2'); ?>" method="get" target="_blank" >
	<br>
	<h2>Selecciona los criterios </h2>
	<h4>
	<br>

	<div class="col-md-7 col-md-offset-0">
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
		  			<td style="font-size:10px">
		  				<p>Indique el total de estrellas que desea</p>
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
		  			<td style="font-size:10px">
		  				<p>Indique el total de estrellas que desea</p>
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
		  			<td style="font-size:10px">
		  				<p>Indique el total de estrellas que desea</p>
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
		  			<td style="font-size:10px">
		  				<p>Indique el total de estrellas que desea</p>
		  			</td>
		  		</tr>
			</table>
			<button type="submit" class="btn btn-default">Buscar</button>
	</div>
	
	
	
	<br>
	
	</form>
</div>

<script language="JavaScript" type="text/javascript">
function comprobar()
{ 
  if (document.getElementById('checkboxCer')==0)
    document.getElementById('button').disabled = true;
  else
      document.getElementById('button').disabled = false;
}
</script>