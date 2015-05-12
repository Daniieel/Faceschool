<form action= "<?= base_url('colegio/show'); ?>" method="get" target="_blank" >  
	<br>
	<br>
	<br>
	<select name="colegio" style="color:black; margin-left:6em" class="btn btn-default btn-lg" >
	    <?php foreach ($colegios as $colegio) {
        ?>
        <option value="<?= $colegio->id_colegio ?>"><?= $colegio->nombre ?></option>  
        <?php }

        ?>

       <input type="submit" value="Ver Informacion" class="btn btn-primary btn-lg" style="margin-left:1em"> 
</select>

<br>
<br>
<br>
