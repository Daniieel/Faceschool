<?php 
/**
* 
*/
class Recomendador  extends CI_Controller
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
		

		$this->load->view('layouts/header',$this->dato);
		$this->load->view('recomendador/index',$dato);
		$this->load->view('layouts/footer');

	}

	public function show(){

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//$dato['usuarios']= $this->uum->get_usuarios(); //cargo una consulta
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		

		$this->load->view('layouts/header',$this->dato);
		$this->load->view('recomendador/show',$dato);
		$this->load->view('layouts/footer');

	}

	

}
 ?>