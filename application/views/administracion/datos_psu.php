<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
			

		<div class = "col-md-12">
			<form class="form-horizontal" role="form" action="<?= base_url('administracion/datos_psu_action')  ?>" method="post">
				
				<!-- 2012! -->
			  	<p  class="para"><h2 >PSU 2012</h2></p>
				
				<input type="hidden" name="anio" value="2012">
			  	
			  	<input type="hidden" name="id_colegio" value="<?= $colegio->id_colegio?>">

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Lenguaje Promedio</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="lenguaje_promedio" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Lenguaje Maximo</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="lenguaje_maximo" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Lenguaje minimo</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="lenguaje_minimo" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Matematicas Promedio</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="matematicas_promedio" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Matematicas maximo</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="matematicas_maximo" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Matematicas minimo</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="matematicas_minimo" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Lenguaje + Matematicas</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="lenguaje_mas_matematicas" class="form-control" id="inputEmail3">
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





