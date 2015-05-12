<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Informacion extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//carago una consulta
		$dato['colegios']= $this->uum->get_colegios();

		$this->load->view('layouts/header');
		$this->load->view('informacion/index',$dato);
		$this->load->view('layouts/footer');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */