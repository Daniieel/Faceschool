<div class="container">
    <div class="row">
		<div class="well">
        <form action= "<?= base_url('puntuacion/show'); ?>" method="get" target="_blank" >
            <div class="col-md-5 h_search">
                
                        <div id="page-wrapper">
                                                   
                          <label for="colegio">Busca un colegio</label>
                          <input type="text" id="colegio" list="colegios" placeholder="Busca un colegio">
                          
                          <datalist id="colegios">
                          <?php foreach ($colegios as $colegio ) {
                              
                           ?>
                            <option value="<?= $colegio->nombre ?>"></option>

                            <?php } ?>
                          </datalist>
                          

                        </div>
                      
            </div>
            </form>
        </div>
	</div>
</div>