<?php 
class Colegio_model extends CI_Model {
	function get_usuarios(){ //funcion para tener todos los usuarios
		$query = $this->db->query(
			"SELECT * 
			FROM Usuario 
			LIMIT 1");
		return $query->row();
	}

	function get_colegios(){ //funcion para traer colegios
		$query = $this->db->query(
			"SELECT 
			  a.id_colegio
			, a.foto 
			, a.nombre
			, a.direccion
			, a.id_dependencia as id_dependencia
			, b.dependencia as dependencia
			, c.nombre as comuna
			, replace(a.latitud,',','.') as latitud
			, replace(a.longitud,',','.') as longitud 
			FROM colegio a
			left join dependencia b
			on a.id_dependencia = b.id_dependencia
			left join comuna c
			on a.id_comuna = c.id_comuna");
		return $query->result();
	}

	function get_ultimo_colegio(){ //funcion para el ultimo colegio agergado
		$query = $this->db->query("SELECT * FROM Colegio ORDER BY id_colegio DESC LIMIT 1");
		return $query->row();
	}



	function get_colegio($colegio_id){ //para traer un colegio
		$query = $this->db->query(
			"SELECT
				  a.id_colegio 
				, a.nombre
				, a.foto
				, l.nombre as region
				, l.id_region as id_region
				, k.nombre as provincia
				, k.id_provincia as id_provincia
				, j.nombre as comuna
				, a.id_comuna
				, a.direccion
				, a.telefono
				, a.pagina_web
				, a.contacto
				, a.ranking_nac
				, a.met_ense
				, a.conv_extr
				, a.act_extr
				, a.hrs_ingles
				, a.logr_dep
				, a.cant_alu
				, a.cant_prof
				, a.matricula
				, a.mensualidad_entre
				, a.mensualidad_hasta
				, b.dependencia
				, a.id_dependencia
				, a.grupo_socioeco
				, a.id_religion
				, a.id_idioma
				, c.lenguaje_promedio as lenguaje_promedio_2012
				, d.lenguaje_promedio as lenguaje_promedio_2013
				, c.lenguaje_maximo as lenguaje_maximo_2012
				, d.lenguaje_maximo as lenguaje_maximo_2013
				, c.lenguaje_minimo as lenguaje_minimo_2012
				, d.lenguaje_minimo as lenguaje_minimo_2013
				, c.matematicas_promedio as matematicas_promedio_2012
				, d.matematicas_promedio as matematicas_promedio_2013
				, c.matematicas_maximo as matematicas_maximo_2012
				, d.matematicas_maximo as matematicas_maximo_2013
				, c.matematicas_minimo as matematicas_minimo_2012
				, d.matematicas_minimo as matematicas_minimo_2013
				, e.compresion_lectora as comprension_lectora_2bas_2013
				, f.compresion_lectora as comprension_lectora_4bas_2013
				, f.matematicas as matematicas_4bas_2013
				, f.ciencias_naturales as ciencias_naturales_4bas_2013
				, g.compresion_lectora as compresion_lectora_6bas_2013
				, g.matematicas as matematicas_6bas_2013
				, g.escritura as escritura_6bas_2013
				, h.compresion_lectura as comprension_lectora_8bas_2013
				, h.matematicas as matematicas_8bas_2013
				, h.ciencias_naturales as ciencias_naturales_8bas_2013
				, i.comprension_lectura as comprension_lectora_2med_2013
				, i.matematicas as matematicas_2med_2013
				, replace(a.latitud,',','.') as latitud
				, replace(a.longitud,',','.') as longitud 
			FROM colegio a 
			left join dependencia b 
			on a.id_dependencia = b.id_dependencia
			left join psu c 
			on a.id_colegio = c.id_colegio
			left join psu d 
			on a.id_colegio = d.id_colegio
			left join simce_2bas e
			on a.id_colegio = e.id_colegio
			left join simce_4bas f
			on a.id_colegio = f.id_colegio
			left join simce_6bas g
			on a.id_colegio = g.id_colegio
			left join simce_8bas h
			on a.id_colegio = h.id_colegio
			left join simce_2med i
			on a.id_colegio = i.id_colegio
			left join comuna j
			on a.id_comuna = j.id_comuna
			left join provincia k
			on j.id_provincia = k.id_provincia
			left join region l
			on k.id_region = l.id_region
			WHERE a.id_colegio='$colegio_id'and c.anio = 2012 and d.anio = 2013 and l.id_region = 5 and k.id_region = 5
			LIMIT 1");
		return $query->row();
	}

	function get_comunas(){
		$query = $this->db->query("SELECT * FROM comuna");
		return $query->result();
	}

	function get_provincias(){
		$query = $this->db->query("SELECT * FROM provincia");
		return $query->result();
	}

	function get_regiones(){
		$query = $this->db->query("SELECT * FROM region where id_region = 5");
		return $query->result();
	}
	function get_dependencias(){
		$query = $this->db->query("SELECT * FROM dependencia");
		return $query->result();
	}
	function get_colegios_por_comuna($nombre_comuna){ //sacar los colegios filtrados por comuna
		$query = $this->db->query("SELECT * FROM colegio WHERE comuna='$nombre_comuna' ");
		return $query->result();
	}

	function get_administracion_login($usuario, $contraseña){
		$query = $this->db->query("SELECT * FROM admin WHERE usuario ='$usuario' and contraseña = '$contraseña' LIMIT 1");
		if ($query->num_rows == 1) {
			return $query->row();
		}else{
			return FALSE;
		}
	}
	function get_colegio_from_recomendation($val_profe,$val_ense,$val_infra, $val_ubi, $val_porcent_profe, $val_porcent_ense, $val_porcent_infra, $val_porcent_ubi)
	{
		$query = "SELECT  a.id_colegio as id_colegio
							,b.latitud 
							,b.longitud
						   ,avg(a.val_profe)*$val_porcent_profe as prom_val_profe
						   ,avg(a.val_ense) * $val_porcent_ense as prom_val_ense
						   ,avg(a.val_infra) * $val_porcent_infra as prom_val_infra
						   ,avg(a.val_ubi) * $val_porcent_ubi as prom_val_ubi
						   ,avg(a.val_profe) + avg(a.val_ense) + avg(a.val_infra) + avg(a.val_ubi) as sum_prom
						   ,(avg(a.val_profe)*$val_porcent_profe + avg(a.val_ense) * $val_porcent_ense + avg(a.val_infra) * $val_porcent_infra + avg(a.val_ubi) * $val_porcent_ubi)*0.8 as sum_prom_mult
						   ,b.nombre as nombre
						   ,b.direccion as direccion
						   ,b.foto as foto
						   ,(SELECT count(id_colegio) FROM me_gusta c WHERE c.id_colegio = a.id_colegio)*0.2 as contador_megusta
						   ,ROUND(((SELECT count(id_colegio) FROM me_gusta c WHERE c.id_colegio = a.id_colegio)*0.2) + ((avg(a.val_profe)*$val_porcent_profe + avg(a.val_ense) * $val_porcent_ense + avg(a.val_infra) * $val_porcent_infra + avg(a.val_ubi) * $val_porcent_ubi)*0.8),2) as suma_total
						   FROM estrellas a
						   LEFT JOIN colegio b
						   on a.id_colegio = b.id_colegio
						   group by a.id_colegio 
						   order by suma_total DESC
						   LIMIT 5
						   ";
		
		

		

		$query = $this->db->query($query);
		return $query->result();		
	}

	function get_megusta_from_recomendation(){
		$query = "SELECT id_colegio
						, count(id_colegio) as cont 
						FROM me_gusta 
						group by id_colegio";

		$query = $this->db->query($query);
		return $query->result();
	}

	function get_megusta()
	{
		$query = $this->db->query(
			"SELECT a.id_colegio as id_colegio
					, b.nombre as nombre
					, COUNT(a.id_colegio) as total_megusta 
					FROM me_gusta a
					LEFT JOIN colegio b
					ON a.id_colegio = b.id_colegio
					GROUP BY id_colegio 
					ORDER BY total_megusta DESC
					LIMIT 3
					 ");
		return $query->result();
	}

	function get_votos(){
		$query = $this->db->query(
			"SELECT id_colegio as id_colegio
					, COUNT(id_colegio) as total_votos 
					FROM estrellas 
					GROUP BY id_colegio 
					");
		return $query->result();
	}

	function agregar_colegio($colegio){
		  $this->db->insert('colegio',$colegio);
	}

	function agregar_colegio_psu($psu){
		  $this->db->insert('psu',$psu);
	}

	function agregar_colegio_simce_2bas($simce_2bas){
		  $this->db->insert('simce_2bas',$simce_2bas);
	}

	function agregar_colegio_simce_4bas($simce_4bas){
		  $this->db->insert('simce_4bas',$simce_4bas);
	}

	function agregar_colegio_simce_6bas($simce_6bas){
		  $this->db->insert('simce_6bas',$simce_6bas);
	}

	function agregar_colegio_simce_8bas($simce_8bas){
		  $this->db->insert('simce_8bas',$simce_8bas);
	}

	function agregar_colegio_simce_2med($simce_2med){
		  $this->db->insert('simce_2med',$simce_2med);
	}




	function modificar_colegio($colegio,$id){
		$this->db->where('id_colegio', $id);
		return $this->db->update('Colegio', $colegio);
	}

	function eliminar_colegio($id){
		$this->db->where('id_colegio',$id);
        return $this->db->delete('colegio');
	}

	function get_religiones(){
		$query = $this->db->query("SELECT * FROM religion");
		return $query->result();
	}

	function get_colegios_por_religion($nombre_religion){ //sacar los colegios filtrados por comuna
		$query = $this->db->query("SELECT * FROM colegio WHERE religion='$nombre_religion' ");
		return $query->result();
	}

	function get_idiomas(){
		$query = $this->db->query("SELECT * FROM idioma");
		return $query->result();
	}

	function get_colegios_por_idioma($nombre_idioma){ //sacar los colegios filtrados por comuna
		$query = $this->db->query("SELECT * FROM colegio WHERE idioma='$nombre_idioma' ");
		return $query->result();
	}

	function filtro( $dependencia, $religion, $idioma, $mensualidad_entre, $mensualidad_hasta, $ranking_nac, $metros_constru,$matricula_entre,$matricula_hasta){

		$query = "SELECT a.id_colegio, a.id_comuna, a.nombre, a.direccion, 
			a.telefono, a.pagina_web, a.contacto, a.matricula,a.matricula_entre,a.matricula_hasta, a.mensualidad_entre, a.mensualidad_hasta, 
			a.id_dependencia, a.grupo_socioeco, a.id_religion, a.id_idioma, a.latitud, 
			a.longitud, a.ranking_nac, a.metros_constru
			FROM colegio a 
			LEFT JOIN comuna b ON a.id_comuna = b.id_comuna
			LEFT JOIN dependencia c ON a.id_dependencia = c.id_dependencia
			LEFT JOIN religion d on a.id_religion = d.id_religion
			LEFT JOIN idioma e on a.id_idioma = e.id_idioma ";
		$band = 0;
		
		/*comuna
		if ($comuna!= "Todos" and $band== 0) {
			$query = $query."WHERE b.id_comuna='$comuna' ";
			$band = 1;

		}elseif($comuna!= "Todos" and $band== 1){
			$query = $query."and b.id_comuna='$comuna' ";
		}*/
		//dependencia
		if ($dependencia) {
			if ($dependencia!= "Todos" and $band == 0) {
				$query = $query."WHERE c.id_dependencia='$dependencia' ";
			 	$band = 1;
			 }elseif($dependencia!= "Todos" and $band== 1){
			 	$query = $query."and c.id_dependencia='$dependencia' ";
			 }	
		}
		

		//religion
		if ($religion) {
			if ($religion!= "Todos" and $band== 0) {
			 	$query = $query."WHERE d.id_religion='$religion' ";
			 	$band = 1;
			 }elseif($religion!= "Todos" and $band== 1){
			 	$query = $query."and d.id_religion='$religion' ";
			 }
		}
		

		//idioma
		 if ($idioma) {
		 	if ($idioma!= "Todos" and $band== 0) {
		 		$query = $query."WHERE e.id_idioma='$idioma' ";
		 		$band = 1;
		 	}elseif($idioma!= "Todos" and $band== 1){
		 		$query = $query."and e.id_idioma='$idioma' ";
		 	}
		 }
		 //mensualidad
		 	if ( ($mensualidad_entre != null and $mensualidad_hasta != null) and  ($mensualidad_entre != "Todos"))   {
		 		if ($band == 0) {
		 		$query = $query." WHERE a.mensualidad_entre >= '$mensualidad_entre' AND a.mensualidad_hasta <= '$mensualidad_hasta' ";
		 		$band = 1;
			 	}elseif ($band == 1) {
			 		$query = $query." AND a.mensualidad_entre >= '$mensualidad_entre' AND a.mensualidad_hasta <= '$mensualidad_hasta'  ";
			 	}
		 	}
		 //ranking_nac
		if ($ranking_nac!= "Todos" and $band== 0) {
			$query = $query."WHERE a.ranking_nac='$ranking_nac' ";
			$band = 1;

		}elseif($ranking_nac!= "Todos" and $band== 1){
			$query = $query."and a.ranking_nac='$ranking_nac' ";
		}

		 //metros_constru
		if ($metros_constru!= "Todos" and $band== 0) {
			$query = $query."WHERE a.metros_constru='$metros_constru' ";
			$band = 1;

		}elseif($metros_constru!= "Todos" and $band== 1){
			$query = $query."and a.metros_constru='$metros_constru' ";
		}

		//Matricula
		 	if ( ($matricula_entre != null and $matricula_hasta != null) and  ($matricula_entre != "Todos"))   {
		 		if ($band == 0) {
		 		$query = $query." WHERE a.matricula_entre >= '$matricula_entre' AND a.matricula_hasta <= '$matricula_hasta' ";
		 		$band = 1;
			 	}elseif ($band == 1) {
			 		$query = $query." AND a.matricula_entre >= '$matricula_entre' AND a.matricula_hasta <= '$matricula_hasta'  ";
			 	}
		 	}
		 	
		#echo $query;
		$consulta = $this->db->query($query);
		
		return $consulta->result();
	}

//-------------------
	function get_me_gusta($dependencia, $religion, $idioma, $mensualidad_entre, $mensualidad_hasta, $ranking_nac, $metros_constru,$matricula_entre,$matricula_hasta){
		$query = "SELECT a.id_colegio, f.nombre, COUNT(a.id_colegio) as total_megusta 
			FROM me_gusta a 
			LEFT JOIN colegio f ON a.id_colegio = f.id_colegio
			LEFT JOIN comuna b ON f.id_comuna = b.id_comuna
			LEFT JOIN dependencia c ON f.id_dependencia = c.id_dependencia
			LEFT JOIN religion d ON f.id_religion = d.id_religion
			LEFT JOIN idioma e ON f.id_idioma = e.id_idioma
			 ";
		$band = 0;
		
		/*comuna
		if ($comuna!= "Todos" and $band== 0) {
			$query = $query."WHERE b.id_comuna='$comuna' ";
			$band = 1;

		}elseif($comuna!= "Todos" and $band== 1){
			$query = $query."and b.id_comuna='$comuna' ";
		}*/
		//dependencia
		if ($dependencia) {
			if ($dependencia!= "Todos" and $band == 0) {
				$query = $query."WHERE c.id_dependencia='$dependencia' ";
			 	$band = 1;
			 }elseif($dependencia!= "Todos" and $band== 1){
			 	$query = $query."and c.id_dependencia='$dependencia' ";
			 }	
		}
		

		//religion
		if ($religion) {
			if ($religion!= "Todos" and $band== 0) {
			 	$query = $query."WHERE d.id_religion='$religion' ";
			 	$band = 1;
			 }elseif($religion!= "Todos" and $band== 1){
			 	$query = $query."and d.id_religion='$religion' ";
			 }
		}
		

		//idioma
		 if ($idioma) {
		 	if ($idioma!= "Todos" and $band== 0) {
		 		$query = $query."WHERE e.id_idioma='$idioma' ";
		 		$band = 1;
		 	}elseif($idioma!= "Todos" and $band== 1){
		 		$query = $query."and e.id_idioma='$idioma' ";
		 	}
		 }
		 //mensualidad
		 	if ( ($mensualidad_entre != null and $mensualidad_hasta != null) and  ($mensualidad_entre != "Todos"))   {
		 		if ($band == 0) {
		 		$query = $query." WHERE a.mensualidad_entre >= '$mensualidad_entre' AND a.mensualidad_hasta <= '$mensualidad_hasta' ";
		 		$band = 1;
			 	}elseif ($band == 1) {
			 		$query = $query." AND a.mensualidad_entre >= '$mensualidad_entre' AND a.mensualidad_hasta <= '$mensualidad_hasta'  ";
			 	}
		 	}
		 //ranking_nac
		if ($ranking_nac!= "Todos" and $band== 0) {
			$query = $query."WHERE a.ranking_nac='$ranking_nac' ";
			$band = 1;

		}elseif($ranking_nac!= "Todos" and $band== 1){
			$query = $query."and a.ranking_nac='$ranking_nac' ";
		}

		 //metros_constru
		if ($metros_constru!= "Todos" and $band== 0) {
			$query = $query."WHERE a.metros_constru='$metros_constru' ";
			$band = 1;

		}elseif($metros_constru!= "Todos" and $band== 1){
			$query = $query."and a.metros_constru='$metros_constru' ";
		}

		//Matricula
		 	if ( ($matricula_entre != null and $matricula_hasta != null) and  ($matricula_entre != "Todos"))   {
		 		if ($band == 0) {
		 		$query = $query." WHERE a.matricula_entre >= '$matricula_entre' AND a.matricula_hasta <= '$matricula_hasta' ";
		 		$band = 1;
			 	}elseif ($band == 1) {
			 		$query = $query." AND a.matricula_entre >= '$matricula_entre' AND a.matricula_hasta <= '$matricula_hasta'  ";
			 	}
		 	}
		 $query = $query."GROUP BY a.id_colegio ORDER BY total_megusta DESC LIMIT 3";
		$consulta = $this->db->query($query);
		return $consulta->result();
	}
//-----------------

	function agregar_puntuacion($colegio){
			
			 $this->db->insert('estrellas',$colegio);  
	}
	

	function agregar_me_gusta($me_gusta){
			
		$this->db->insert('me_gusta',$me_gusta);
		
	  
	}

	function get_comentario(){ //funcion para traer los comentarios
		$query = $this->db->query(
			"SELECT * 
			 FROM estrellas");
		return $query->result();
	}


	function like_colegio($id_colegio, $ip_usuario){
		$query =$this->db->query("SELECT * from me_gusta WHERE id_colegio='$id_colegio' AND 
			ip_usuario='$ip_usuario'");
		if ($query->num_rows() > 0 ){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}
?>