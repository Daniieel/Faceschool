<div class="col-md-10 col-md-offset-1">
	<form action= "<?= base_url('recomendador/show'); ?>" method="get" target="_blank" >
	<br>
	<h2>Selecciona los criterios </h2>
	<h4>
	<br>
	
	<div class="col-md-7 col-md-offset-0">
			<table class="table table-hover">
		  		<tr>
		  			<td>
		  				<input type="checkbox" name="option1" value="val_profe">Calidad de profesores  
		  			</td>
		  			<td>
		  				 <input type="number" min="0" max="50" size="3" name="input1">%</input>
		  			</td>
		  			<td style="font-size:10px">
		  				<p>Indique el porcentaje de importancia</p>
		  			</td>
		  		</tr>
		  		<tr>
		  			<td>
		  				<input type="checkbox" name="option1" value="val_profe">Calidad de profesores 
		  			</td>
		  			<td>
		  				<input  type="number" min="0" max="50" name="input2">%	</input>
		  			</td>
		  			<td style="font-size:10px">
		  				<p>Indique el porcentaje de importancia</p>
		  			</td>
		  		</tr>
		  		<tr>
		  			<td>
		  				<input type="checkbox" name="option3" value="val_infra">Infraestructura 
		  			</td>
		  			<td>
		  				<input type="number" min="0" max="50" size="3" name="input3">%	</input>
		  			</td>
		  			<td style="font-size:10px">
		  				<p>Indique el porcentaje de importancia</p>
		  			</td>
		  		</tr>
		  		<tr>
		  			<td>
		  				<input type="checkbox" name="option4" value="val_ubi"> Ubicacion
		  			</td>
		  			<td>
		  				<input type="texttype="number" min="0" max="50"" size="3" name="input4">%	</input>
		  			</td>
		  			<td style="font-size:10px">
		  				<p>Indique el porcentaje de importancia</p>
		  			</td>
		  		</tr>
			</table>
			<button type="submit" class="btn btn-default">Buscar</button>
	</div>
	
	
	
	<br>
	
	</form>
</div>