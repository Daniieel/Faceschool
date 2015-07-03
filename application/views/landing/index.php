<div class="slider_bg"><!-- start slider -->
		<div class="container">
				<div id="da-slider" class="da-slider text-center">
					<div class="da-slide">
						<h2>FaceSchool</h2>
						<p><strong>Busca tu colegio preferido.</strong></p>
						<h3 class="da-link">
							<div class="col-md-10 h_search">
								<form action= "<?= base_url('colegio/show'); ?>" method="get" target="_blank">
									<input style=" border: 1px solid black;" type="text" class="text" value="Escribe aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Busca un colegio';}" list="colegios" name="colegio">
									<datalist id="colegios">
									<?php foreach ($colegios as $colegio) {
									?>
									  <!-- <option value="<?= $colegio->id_colegio ?>" label="<?= $colegio->nombre ?>"></option>-->

									<?php } ?>
									</datalist>
									<input type="submit" value="Buscar" disabled>
								</form>
							</div>
					</div>
			   </div>
			</div>


	
</div><!-- end slider -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-laptop"></i></span>
				<h4><a>Persona</a></h4>
				<p class="para">Lee y opina sobre los colegios.Califica y comenta sobre ellos aportando informaci&oacute;n ver&iacute;dica y de calidad.</p>
				<!--<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>-->
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-male"></i> </span>
				<h4><a>T&uacute; mejor opci&oacute;n</a></h4>
				<p class="para">Encuentra cu&aacute;l es el mejor establecimiento educacional en base a tus necesidades.Contribuye a que otros tomen la mejor opci&oacute;n.</p>
				<!--<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>-->
			</div>	
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-clock-o"></i></span>
				<h4><a>Tiempo</a></h4>
				<p class="para">Sabemos cuanto tarda elegir el correcto colegio para nuestros hijos, es por eso que te invitamos a ocupar esta sencilla y r&aacute;pida  herramienta.</p>
				<!--<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>-->
			</div>
			<div class="col-md-3 images_1_of_4 text-center">
				<span class="bg"><i class="fa fa-globe"></i></span>
				<h4><a>Educaci&Oacute;n</a></h4>
				<p class="para">Construyamos la red educativa mas grande de Chile para que la educaci&oacute;n tome el valor social que se merece.</p>
				<!--<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>-->
			</div>
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			<div class="col-md-6 content_left">
				<img src="images/pic1.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 content_right">
				<h4><span>Nuestro Alcance </span></h4>
				<p class="para">Con el fin de cumplir el objetivo, este proyecto lograra brindar una mejor información sobre los colegios de la region a través de una pagina web.</p>
				<p class="para">Esto <strong>Incluye</strong></p>
				<p class="para">	- Mostrar al usuario la mayor cantidad de colegios de la zona que este se ubique.</p>
				<p class="para">	- Proporcionar la información del colegio.</p>
				<p class="para">	- Comparara la información de los colegios. </p>
				<!--<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>-->
			</div>
		</div>
				<!--start-img-cursual-->
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Fernando Figueroa</a></h4>
								<p>
									<!--CEO.-->
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Daniel Labra</a></h4>
								<p>
									<!--<br>Desarrollador.</br>-->
									
								</p>
							</div>
						</div>
						
					</div>
					<!--//End-img-cursual-->
	</div>
</div>