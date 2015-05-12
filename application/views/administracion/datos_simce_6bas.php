<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
			

		<div class = "col-md-12">
			<form class="form-horizontal" role="form" action="<?= base_url('administracion/datos_simce_6bas_action')  ?>" method="post">
				
				<input type="hidden" name="id_colegio" value="<?= $colegio->id_colegio?>">

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Año</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="anio" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Comprension Lectora</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="compresion_lectora" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Matematicas</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="matematicas" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Escritura</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="escritura" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>			  			  	



			  	<div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<button type="submit" class="btn btn-default">Siguiente</button>
			    	</div>
			  	</div>
			</form>
			
		</div>
	</div>
</div>
