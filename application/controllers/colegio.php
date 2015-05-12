<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colegio extends CI_Controller {

	public function __construct()
	     {
	          parent::__construct();
	          $this->dato['alert']="";
	          // Your own constructor code
	     }
	public function show()
	{
		$this->load->helper('url');
		$colegio_id = $this->input->get("colegio"); 
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_colegio($colegio_id); 

		$dato['like'] = $this->uum->like_colegio($colegio_id,$this->getClientIP());
		$this->load->view("layouts/header",$this->dato);
		$this->load->view('colegio/show', $dato);
		$this->load->view("layouts/footer");
	}

	public function agregar_me_gusta()
	{
		

		//guardo en un array todos los datos que insertaron en el formulario anterior
		$me_gusta = array(
			//con el name de cada input obtengo los valores de cada uno
			'ip_usuario' => $this->input->post('ip_usuario'),
			'id_colegio' =>$this->input->post('id_colegio'),
			
			);
	

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_me_gusta($me_gusta); //agrego el colegio asignado 

		
		redirect(base_url('colegio/show?colegio='.$me_gusta['id_colegio']));
		
		

	}

	private function getClientIP() {

    if (isset($_SERVER)) {

        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            return $_SERVER["HTTP_X_FORWARDED_FOR"];

        if (isset($_SERVER["HTTP_CLIENT_IP"]))
            return $_SERVER["HTTP_CLIENT_IP"];

        return $_SERVER["REMOTE_ADDR"];
    }

    if (getenv('HTTP_X_FORWARDED_FOR'))
        return getenv('HTTP_X_FORWARDED_FOR');

    if (getenv('HTTP_CLIENT_IP'))
        return getenv('HTTP_CLIENT_IP');

    return getenv('REMOTE_ADDR');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */