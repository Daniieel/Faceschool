<div class="container">
    <div class="row">
		<div class="well">
        <h1 class="text-center">Califica a los colegios</h1>
        <?php foreach ($colegios as $colegio) {
            ?>
        <div class="list-group">
          <a href="#" class="list-group-item">
                <div class="media col-md-3">
                    <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive"  src=<?= $colegio->foto ?> alt="placehold.it/350x250" >
                    </figure>
                </div>
                <div class="col-md-6">
                    <h4 class="list-group-item-heading"> <?= $colegio->nombre ?> </h4>
                    <p class="list-group-item-text"> <?= $colegio->direccion ?></p>
                </div>
                <div class="col-md-3 text-center">
                    <h2> 1000 <small> Votos </small></h2>
                    <button type="button" class="btn btn-default btn-lg btn-block" onclick="alert('Hello world!')"> Vota ahora! </button>
                    
                   
                </div>
          </a>
          
        </div>
        <?php }

            ?> 
        </div>
	</div>
</div>