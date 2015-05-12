<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
		<div class="col-md-3">

		<ul class="nav nav-pills nav-stacked">
		  <li class="active"><a href="#">Inicio</a></li>
		</ul>

		</div>

		<div class = "col-md-9">
			<form action= "<?= base_url('administracion/modificar_show'); ?>" method="get" >
			  <div class="form-group">
			    <label>Selecciona el colegio:</label>
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
			     <input type="submit" value="Modificar" class="btn btn-danger" id="informacion">
			   </div>

			 </form>
			  
		
			
		</div>
	</div>
</div>





