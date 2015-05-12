<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
		

		<div class = "col-md-12">

		<form class="form-horizontal" role="form" action="<?= base_url('administracion/modificar_colegio_action')  ?>" method="post">
			
		<div class="form-group">

				<input type="hidden" name="id_colegio" value="<?= $colegio->id_colegio?>">

				<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Comuna</label>
			    <div class="col-sm-10">
			      <select name= "id_comuna" class= "form-control" id="comuna">
	                    <option value="<?= $colegio->id_comuna?>"><?= $colegio->comuna ?></option>
	                        <?php foreach ($comunas as $comuna) {
	                        ?>
	                        <option value="<?= $comuna->id_comuna ?>"><?= $comuna->nombre ?></option>
	                        <?php }

	                         ?> 
			       </select>
			    </div>
			  </div>

			    <label for="inputEmail3" class="col-sm-2 control-label">Nombre colegio</label>
			    <div class="col-sm-10">
			       <input type="text" name="nombre" class="form-control" id="inputEmail3" value ="<?= $colegio->nombre ?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
			    <div class="col-sm-10">
			      <input name="direccion" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->direccion?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
			    <div class="col-sm-10">
			      <input name="telefono" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->telefono?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Pagina Web</label>
			    <div class="col-sm-10">
			      <input name="pagina_web" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->pagina_web?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Contacto</label>
			    <div class="col-sm-10">
			      <input name="contacto" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->contacto?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Matricula</label>
			    <div class="col-sm-10">
			      <input name="matricula" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->matricula?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Mensualidad</label>
			    <div class="col-sm-10">
			      <input name="mensualidad" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->mensualidad?>">
			    </div>
			  </div>

			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Dependencia</label>
			    <div class="col-sm-10">
			      <select name= "id_dependencia" class= "form-control" id="dependencia">
	                    <option value="<?= $colegio->id_dependencia?>"><?= $colegio->dependencia ?></option>
	                        <?php foreach ($dependencia as $dependencia) {
	                        ?>
	                        <option value="<?= $dependencia->id_dependencia ?>"><?= $dependencia->dependencia ?></option>
	                        <?php }

	                         ?> 
			       </select>
			    </div>
			  </div>

			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Grupo Socioeconomico</label>
			    <div class="col-sm-10">
			      <input name="grupo_socioeco" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->grupo_socioeco?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Religion</label>
			    <div class="col-sm-10">
			      <input name="id_religion" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->id_religion?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Idiomas</label>
			    <div class="col-sm-10">
			      <input name="id_idioma" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->id_idioma?>">
			    </div>
			  </div>

			  

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Latitud</label>
			    <div class="col-sm-10">
			      <input name="latitud" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->latitud?>">
			    </div>
			  </div>

			   <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Longitud</label>
			    <div class="col-sm-10">
			      <input name="longitud" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->longitud?>">
			    </div>
			  </div>
			  		  
			 <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Modificar</button>
			    </div>
			  </div>
			</form>
			
		</div>
	</div>
</div>


