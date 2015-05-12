<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
	  <div class = "col-md-12">
		
		<div class="pull-right" style="margin-bottom: 30px;">
			<a  class="btn btn-info" href="<?= base_url('administracion/admin'); ?>"><i class="fa fa-plus-circle"></i> Agregar</a>
		</div>
		<table class="table table-striped" style="font-size:12px">
		      <thead>
		        <tr>
		          <th>Nombre</th>
		          <th>Dependencia</th>
		          <th>Comuna</th>
		          <th>Ver Colegio</th>
				  <th>Editar</th>
				  <th>Borrar</th>
		        </tr>

		      </thead>
		      <tbody>
		       <?php foreach ($colegios as $colegio) {
			   ?>
				        <tr>
				          
				          <td><?= $colegio->nombre ?></td>
				          <td><?= $colegio->dependencia ?></td>
				          <td><?= $colegio->comuna ?></td>
				          <td><a href="<?= base_url('colegio/show?colegio='.$colegio->id_colegio); ?>" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-eye"></i> Ver</a></td>
				          <td><a href="<?= base_url('administracion/modificar_show?colegio='.$colegio->id_colegio); ?>" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-pencil-square-o"></i> Editar</a></td>
				          <td><a href="<?= base_url('administracion/eliminar_colegio?colegio='.$colegio->id_colegio); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Esta seguro?');" data-confirm="Estas seguro?"><i class="fa fa-exclamation-triangle"></i> Eliminar</a></td>
				        </tr>
				        
				 <?php }

			     ?> 
		      </tbody>
		    </table>

		 </div>
			</form>
			
		</div>
	</div>
</div>