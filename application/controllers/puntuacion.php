<?php 
/**
* 
*/
class Puntuacion  extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	    $this->dato['alert']="";
	    // Your own constructor code
	}

	public function index(){

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//$dato['usuarios']= $this->uum->get_usuarios(); //cargo una consulta
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		$dato['comunas']= $this->uum->get_comunas();
		$dato['religiones']= $this->uum->get_religiones();
		$dato['idiomas']= $this->uum->get_idiomas();
		$dato['regiones']=$this->uum->get_regiones();
		$dato['dependencia']=$this->uum->get_dependencias();
		$dato['votos']=$this->uum->get_votos();

		$this->load->view('layouts/header',$this->dato);
		$this->load->view('puntuacion/index',$dato);
		$this->load->view('layouts/footer');

	}

	public function show(){

		$this->load->helper('url');
		$colegio_id = $this->input->get("colegio"); 
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_colegio($colegio_id);
		$dato['comentario']= $this->uum->get_comentario();

		$this->load->view('layouts/header',$this->dato);
		$this->load->view('puntuacion/show',$dato);
		$this->load->view('layouts/footer');

	}

	public function agregar_puntuacion() //agregar un datos de un colegio
	{
		$val_profe = (int) $this->input->post('val_profe');
		$val_ense =  (int) $this->input->post('val_ense');
		$val_infra =  (int) $this->input->post('val_infra');
		$val_ubi =  (int) $this->input->post('val_ubi');

		$val_promedio = ($val_profe + $val_ense + $val_infra + $val_ubi ) 	/4;
		//guardo en un array todos los datos que insertaron en el formulario anterior
		$colegio = array(
			'id_colegio' => $this->input->post('id_colegio'),
			'val_profe' => $this->input->post('val_profe'), //con el name de cada input obtengo los valores de cada uno
			'val_ense' => $this->input->post('val_ense'),
			'val_infra' => $this->input->post('val_infra'),
			'val_ubi' => $this->input->post('val_ubi'),
			'val_promedio' => $val_promedio,
			'perfil' => $this->input->post('perfil'),
			'nombre' => $this->input->post('nombre'),
			'comentario' => $this->input->post('comentario'),
			'terminos' => $this->input->post('terminos'),
						
			);
		

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_puntuacion($colegio); //agrego el colegio asignado 

		redirect(base_url('puntuacion/show?colegio='.$colegio['id_colegio']));
		
		
	}

}
 ?>