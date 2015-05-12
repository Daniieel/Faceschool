<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
			

		<div class = "col-md-12">
			<form  class="form-horizontal" role="form" action="<?= base_url('administracion/agregar_colegio')  ?>" method="post">
				
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Comuna</label>
				    <div class="col-sm-10">
				   		<select name= "id_comuna" class= "form-control" id="comuna">
		                    <option value="">Seleccione comuna</option>
		                        <?php foreach ($comunas as $comuna) {
		                        ?>
		                        <option value='<?= $comuna->id_comuna ?>'><?= $comuna->nombre ?></option>
		                        <?php }

		                         ?> 
				        </select>
				    </div>
				</div>

				
				<div class="form-group">
				   	<label for="inputEmail3" class="col-sm-2 control-label">Nombre colegio</label>
				   	<div class="col-sm-10">
				      	<input type="text" name="nombre" class="form-control" id="inputEmail3">
				    </div>
				</div>

				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
			   		<div class="col-sm-10">
			      		<input type="text" name="direccion" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>
				
				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="telefono" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Pagina Web</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="pagina_web" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Contacto</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="contacto" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Matricula</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="matricula" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Mensualidad</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="mensualidad" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Dependencia</label>
				    <div class="col-sm-10">
				   		<select name= "id_dependencia" class= "form-control" id="dependencia">
		                    <option value="">Seleccione dependencia</option>
		                        <?php foreach ($dependencias as $dependencia) {
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
			      		<input type="text" name="grupo_socioeco" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Religion</label>
				    <div class="col-sm-10">
				   		<select name= "id_religion" class= "form-control" id="religion">
		                    <option value="">Seleccione religion</option>
		                        <?php foreach ($religiones as $religion) {
		                        ?>
		                        <option value="<?= $religion->id_religion ?>"><?= $religion->religion ?></option>
		                        <?php }

		                         ?> 
				        </select>
				    </div>
				</div>

				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Idioma</label>
				    <div class="col-sm-10">
				   		<select name= "id_idioma" class= "form-control" id="idioma">
		                    <option value="">Seleccione idioma</option>
		                        <?php foreach ($idiomas as $idioma) {
		                        ?>
		                        <option value="<?= $idioma->id_idioma ?>"><?= $idioma->idioma ?></option>
		                        <?php }

		                         ?> 
				        </select>
				    </div>
				</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Latitud</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="latitud" class="form-control" id="inputEmail3">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">longitud</label>
			    	<div class="col-sm-10">
			      		<input type="text" name="longitud" class="form-control" id="inputEmail3">
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





