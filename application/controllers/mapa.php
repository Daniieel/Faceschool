<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapa extends CI_Controller {
	
	public function __construct()
	     {
	          parent::__construct();
	          $this->dato['alert']="";
	          // Your own constructor code
	     }
	public function index()
	{
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//$dato['usuarios']= $this->uum->get_usuarios(); //cargo una consulta
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		$dato['comunas']= $this->uum->get_comunas();
		$dato['religiones']= $this->uum->get_religiones();
		$dato['idiomas']= $this->uum->get_idiomas();
		$dato['regiones']=$this->uum->get_regiones();
		$dato['dependencia']=$this->uum->get_dependencias();
		$dato['me_gusta']=$this->uum->get_megusta();
		

		$this->load->view('layouts/header',$this->dato);
		$this->load->view('mapa/index',$dato);
		$this->load->view('layouts/footer');


	}

	public function intento()
	{
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//$dato['usuarios']= $this->uum->get_usuarios(); //cargo una consulta
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		$dato['comunas']= $this->uum->get_comunas();
		$dato['religiones']= $this->uum->get_religiones();
		$dato['idiomas']= $this->uum->get_idiomas();
		$dato['regiones']=$this->uum->get_regiones();
		$dato['dependencia']=$this->uum->get_dependencias();
		

		$this->load->view('layouts/header',$this->dato);
		$this->load->view('mapa/intento',$dato);
		$this->load->view('layouts/footer');


	}

	public function filtro()
	{
		//$comuna =$this->input->get("comuna");
		$dependencia =$this->input->get("dependencia");
		$religion =$this->input->get("religion");
		$idioma =$this->input->get("idioma");
		if ($this->input->get("mensualidad") != "") {
			$mensualidad_entre = (explode(",", $this->input->get("mensualidad"))[0]);
			$mensualidad_hasta = (explode(",", $this->input->get("mensualidad"))[1]);
		}else{
			$mensualidad_entre = null;
			$mensualidad_hasta = null;
		}
		$ranking_nac =$this->input->get("ranking_nac");
		$metros_constru =$this->input->get("metros_constru");
		if ($this->input->get("matricula") != "") {
			$matricula_entre = (explode(",", $this->input->get("matricula"))[0]);
			$matricula_hasta = (explode(",", $this->input->get("matricula"))[1]);
		}else{
			$matricula_entre = null;
			$matricula_hasta = null;
		}
		// $region =$this->input->get("region");

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$colegios= $this->uum->filtro( $dependencia, $religion, $idioma,$mensualidad_entre,$mensualidad_hasta,$ranking_nac,$metros_constru,$matricula_entre,$matricula_hasta);
		echo json_encode($colegios);
	}

	public function recomendador()
	{
		//$comuna =$this->input->get("comuna");
		$dependencia =$this->input->get("dependencia");
		$religion =$this->input->get("religion");
		$idioma =$this->input->get("idioma");
		if ($this->input->get("mensualidad") != "") {
			$mensualidad_entre = (explode(",", $this->input->get("mensualidad"))[0]);
			$mensualidad_hasta = (explode(",", $this->input->get("mensualidad"))[1]);
		}else{
			$mensualidad_entre = null;
			$mensualidad_hasta = null;
		}
		$ranking_nac =$this->input->get("ranking_nac");
		$metros_constru =$this->input->get("metros_constru");
		if ($this->input->get("matricula") != "") {
			$matricula_entre = (explode(",", $this->input->get("matricula"))[0]);
			$matricula_hasta = (explode(",", $this->input->get("matricula"))[1]);
		}else{
			$matricula_entre = null;
			$matricula_hasta = null;
		}
		// $region =$this->input->get("region");

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$colegios= $this->uum->get_me_gusta($dependencia, $religion, $idioma,$mensualidad_entre,$mensualidad_hasta,$ranking_nac,$metros_constru,$matricula_entre,$matricula_hasta);
		echo json_encode($colegios);
	}

	public function colegios_por_religion()
	{
		$religion =$this->input->get("religion");
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		if ($religion == "Todos") {
			$colegios = $this->uum->get_colegios();
		}else{
			$colegios= $this->uum->get_colegios_por_religion($religion);// carga los colegios
		}
		echo json_encode($colegios);
	}		
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>
