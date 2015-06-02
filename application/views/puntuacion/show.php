<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/star-rating.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/stylesheet.css">
<body>
<div class="container">
<div class="page-header">
        <div class = "col-md-12">

  <table width="200" border="5" class = "table table-striped" >
            <tr>
            <th><h5 >Imagen Referencial:</h5></th>
        
            <td><a href=<?= $colegio->foto?>><img src=<?= $colegio->foto?>

            alt="" WIDTH="300" HEIGHT="300" border="1"></a></td>

            </tr>

            <tr>
            <th><h5 >Nombre Colegio:</h5></th>
            <td><h5><?= $colegio->nombre ?></h5></td>


            </tr>


            <tr>
            <th><h5 >Direcci&oacute;n:</h5></th>
            <td><h5><?= $colegio->direccion ?></h5></td>


            </tr>

            <tr>
            <th><h5 >P&aacute;gina Web: </h5></th>

            <td><a target="_blank"  href="http://<?= $colegio->pagina_web ?>" class="fa-btn btn-1 btn-1e"><?= $colegio->pagina_web ?></a></td>
            </tr>
            </table>

                
                <table width="200" border="5" class = "table" >
                <form  class="form-horizontal" role="form" action="<?= base_url('puntuacion/agregar_puntuacion')  ?>" method="post">
                <tr>
                    <input type="hidden" name= "id_colegio" value='<?= $colegio->id_colegio ?>'></input>
                   
                    <p  class="para"><h3 >Calidad de profesores</h3></p>
                     <span class="starRating">
                      <input id="val_profel5" type="radio" name="val_profe" value="5">
                      <label for="val_profel5">5</label>
                      <input id="val_profel4" type="radio" name="val_profe" value="4">
                      <label for="val_profel4">4</label>
                      <input id="val_profel3" type="radio" name="val_profe" value="3" >
                      <label for="val_profel3">3</label>
                      <input id="val_profel2" type="radio" name="val_profe" value="2">
                      <label for="val_profel2">2</label>
                      <input id="val_profel1" type="radio" name="val_profe" value="1">
                      <label for="val_profel1">1</label>
                    </span>
                    <p  class="para"><h3 >Calidad de enseñanza</h3></p>
                     <span class="starRating">
                      <input id="val_ense5" type="radio" name="val_ense" value="5">
                      <label for="val_ense5">5</label>
                      <input id="val_ense4" type="radio" name="val_ense" value="4">
                      <label for="val_ense4">4</label>
                      <input id="val_ense3" type="radio" name="val_ense" value="3" >
                      <label for="val_ense3">3</label>
                      <input id="val_ense2" type="radio" name="val_ense" value="2">
                      <label for="val_ense2">2</label>
                      <input id="val_ense1" type="radio" name="val_ense" value="1">
                      <label for="val_ense1">1</label>
                    </span>
                    <p  class="para"><h3 >Infraestructura</h3></p>
                     <span class="starRating">
                      <input id="val_infra5" type="radio" name="val_infra" value="5">
                      <label for="val_infra5">5</label>
                      <input id="val_infra4" type="radio" name="val_infra" value="4">
                      <label for="val_infra4">4</label>
                      <input id="val_infra3" type="radio" name="val_infra" value="3" >
                      <label for="val_infra3">3</label>
                      <input id="val_infra2" type="radio" name="val_infra" value="2">
                      <label for="val_infra2">2</label>
                      <input id="val_infra1" type="radio" name="val_infra" value="1">
                      <label for="val_infra1">1</label>
                    </span>
                    <p  class="para"><h3 >Ubicaci&oacute;n</h3></p>
                    <span class="starRating">
                      <input id="val_ubi5" type="radio" name="val_ubi" value="5">
                      <label for="val_ubi5">5</label>
                      <input id="val_ubi4" type="radio" name="val_ubi" value="4">
                      <label for="val_ubi4">4</label>
                      <input id="val_ubi3" type="radio" name="val_ubi" value="3">
                      <label for="val_ubi3">3</label>
                      <input id="val_ubi2" type="radio" name="val_ubi" value="2">
                      <label for="val_ubi2">2</label>
                      <input id="val_ubi1" type="radio" name="val_ubi" value="1">
                      <label for="val_ubi1">1</label>
                    </span>

                    

                    <p  class="para"><h3 >Define tu perfil</h3></p>
                    <div class="identificar">
                        <input id="rbFamilia" type="radio" name="perfil" value="apoderado"><label for="rbFamilia"><h4>Apoderado</h4></label>
                        <input id="rbAlumno" type="radio" name="perfil" value="estudiante"><label for="rbAlumno"><h4>Alumno</h4></label>
                        <input id="rbExalumno" type="radio" name="perfil" value="alumno"><label for="rbExalumno"><h4>Ex-alumno</h4></label>
                        <input id="rbOtros" type="radio" name="perfil" value="otro"><label for="rbOtros"><h4>Otros</h4></label>
                                        
                    </div>
                    <p  class="para"><h3 >Nombre</h3></p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input id="name" type="name" class="form-control" name="nombre" value="" placeholder="Tu nombre">                                        
                    </div>
                    <p  class="para"><h3 >Comentario</h3></p>
                                                    
                    
                        <textarea name= "comentario"class="form-control input-sm " type="textarea" id="message" placeholder="Comentario" maxlength="250" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block "> Tienes 250 caracteres </p></span>                    
                    
                    <br style="clear:both">
                    
                    <div class="textoCerti">
                        <input onChange="return comprobar(checkbox.value);" type="checkbox" name="checkbox" class="chec" id="checkboxCer" value="acepto"><label for="checkboxCer">Certifico que este comentario se basa en mi propia experiencia y es mi opinión verdadera de esta escuela, y que no tengo ninguna relación personal o de negocios con este establecimiento, y no han ofrecido algún incentivo o pago procedentes de la creación de escribir este comentario. Entiendo que Faceschool tiene una tolerancia cero.policyon reseñas falsas</label>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                    <button name="terminos" id="button" class="btn btn-primary" type="submit" value="acepto" disabled/>Enviar</button>
                    
                                
                </form>

               
                        
                    
                    
                    
                </tr>
   
                  </tbody>
                
                </tr>
 
                </table>

                <div class="container">
                  <div class="row">
                    
                      <h2 class="page-header">Comentarios</h2>
                          <section class="comment-list">
                          <!-- First Comment -->
                         <?php foreach ($comentario as $comentario) {
                        ?>
                        <?php if ( $comentario->id_colegio ==  $colegio->id_colegio && $comentario->comentario!=NULL) {
                        ?>
                          <!--<h1><?php var_dump($colegios) ?>slsdfkl</h1>-->
                          <article class="row">
                            <div class="col-md-2 col-sm-2 hidden-xs">
                              <figure class="thumbnail">
                                <img class="img-responsive" src="http://www.cromo.com.uy/wp-content/uploads/2013/09/facebook-profile-picture-n-copy-580x360.jpg" />
                                <figcaption class="text-center"><strong><?= $comentario->nombre ?></strong></figcaption>
                              </figure>
                            </div>
                            
                            <div class="col-md-8 col-sm-8">
                              <div class="panel panel-default arrow left">
                                <div class="panel-body">
                                  <header class="text-left">
                                    <div class="comment-user"><i class="fa fa-graduation-cap fa-2x"></i></i> <font size=4>
                                    <?php if ($comentario->val_promedio < 3) {
                                     ?>
                                    
                                    <strong style="color:red">Nota Valoracion general: <?= $comentario->val_promedio ?>/5 Estrellas</strong></font>
                                    <?php }else{ ?>
                                      <strong>Nota Valoracion general: <?= $comentario->val_promedio ?>/5 Estrellas</strong></font>
                                  <?php } ?>
                                    </div>
                                  </header>
                                  <div class="comment-post">
                                    <p>
                                      <?= $comentario->comentario ?>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                          </article>
                         <?php }

                          ?> 
                          <?php  }
                           ?>

                        </section>
                    
                  </div>
                </div>
        </div>


    
    
</form>
<hr>




</div>  
</body>
</html>
<script language="JavaScript" type="text/javascript">
function comprobar()
{ 
  if (document.getElementById('checkboxCer')==0)
    document.getElementById('button').disabled = true;
  else
      document.getElementById('button').disabled = false;
}
</script>