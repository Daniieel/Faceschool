<?php 
/**
* 
*/
class Clasificador  extends CI_Controller
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
		$this->load->view('clasificador/index',$dato);
		$this->load->view('layouts/footer');

	}

	public function show(){

		//cargamos los datos desde get
		$val_profe = $this->input->get("val_profe");
		$val_ense = $this->input->get("val_ense");
		$val_infra = $this->input->get("val_infra");
		$val_ubi = $this->input->get("val_ubi");

		$val_suma = ($val_profe + $val_ense + $val_infra + $val_ubi );
		$val_porcent_profe = ((100* $val_profe)/$val_suma)/100;
		$val_porcent_ense = ((100* $val_ense)/$val_suma)/100;
		$val_porcent_infra = ((100* $val_infra)/$val_suma)/100;
		$val_porcent_ubi = ((100* $val_ubi)/$val_suma)/100;

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//$dato['usuarios']= $this->uum->get_usuarios(); //cargo una consulta
		$dato['colegios']= $this->uum->get_colegio_from_recomendation($val_profe,$val_ense,$val_infra,$val_ubi, $val_porcent_profe, $val_porcent_ense, $val_porcent_infra, $val_porcent_ubi);// carga los colegios

		$dato['megustas']= $this->uum->get_megusta_from_recomendation();
		

		$this->load->view('layouts/header',$this->dato);
		$this->load->view('clasificador/show',$dato);
		$this->load->view('layouts/footer');

	}

	public function show_2(){


	

		//cargamos los datos desde get
		$val_profe = $this->input->get("val_profe");
		$val_ense = $this->input->get("val_ense");
		$val_infra = $this->input->get("val_infra");
		$val_ubi = $this->input->get("val_ubi");

		$val_suma = ($val_profe + $val_ense + $val_infra + $val_ubi );
		$val_porcent_profe = ((100* $val_profe)/$val_suma)/100;
		$val_porcent_ense = ((100* $val_ense)/$val_suma)/100;
		$val_porcent_infra = ((100* $val_infra)/$val_suma)/100;
		$val_porcent_ubi = ((100* $val_ubi)/$val_suma)/100;

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//$dato['usuarios']= $this->uum->get_usuarios(); //cargo una consulta
		$dato['colegios']= $this->uum->get_colegio_from_recomendation($val_profe,$val_ense,$val_infra,$val_ubi, $val_porcent_profe, $val_porcent_ense, $val_porcent_infra, $val_porcent_ubi);// carga los colegios

		$dato['megustas']= $this->uum->get_megusta_from_recomendation();

			//$dato['usuarios']= $this->uum->get_usuarios(); //cargo una consulta
		$dato['colegios_mapa']= $this->uum->get_colegios();// carga los colegios
		

		$this->load->view('layouts/header',$this->dato);
		$this->load->view('clasificador/show',$dato);
		$this->load->view('layouts/footer');

	}

	

}
 ?>