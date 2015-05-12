<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends CI_Controller {


	public function __construct()
	     {
	          parent::__construct();
	          $this->dato['alert']="";
	          
	     }
	public function login()
	{
		if ($this->input->get('err')== "1") {
			$this->dato['alert']= array(
			'alert' => "danger",
			'mensaje' => "Usuario y/o contraseña inválida"
			);
		}
		// carga los colegios
		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/login');
		$this->load->view("layouts/footer");

	}
	public function login_action()
	{
		$usuario=$this->input->post("usuario");
		$contraseña=$this->input->post("contrasena");
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$validacion=$this->uum->get_administracion_login($usuario, $contraseña);

		if ($validacion==FALSE) {
			redirect(base_url('administracion/login?err=1'));
		}else{
			$newdata = array(
			 'username' => $validacion->usuario,
			 'logged_in' => TRUE
			 );
			$this->session->set_userdata($newdata);
			
			redirect(base_url('administracion/inicio?sus=1'));

		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('administracion/login'));
	}

	public function inicio()
	{
		if ($this->input->get('ad')== "1") {
			$this->dato['alert']= array(
			'alert' => "success",
			'mensaje' => "Colegio agregado corectamente"
			);
		}
		if ($this->input->get('mod')== "1") {
			$this->dato['alert']= array(
			'alert' => "success",
			'mensaje' => "Modificado correctamente"
			);
		}
		if($this->input->get('sus')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Has iniciado sesión correctamente"
			);
		}
		if($this->input->get('del')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Se ha borrado el colegio correctamente"
			);
		}
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegios']= $this->uum->get_colegios();

		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/inicio', $dato);
		$this->load->view("layouts/footer");
	}

//El ADMINISTRADOR AGREGA LOS PRIMEROS DATOS DEL COLEGIO
	public function admin() 
	{
		if($this->input->get('sus')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Has iniciado sesión correctamente"
			);
		}
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegios']= $this->uum->get_colegios();
		$dato['comunas']= $this->uum->get_comunas();
		$dato['dependencias']= $this->uum->get_dependencias();
		$dato['idiomas']= $this->uum->get_idiomas();
		$dato['religiones']= $this->uum->get_religiones();


		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/admin', $dato);
		$this->load->view("layouts/footer");
	}
	public function agregar_colegio() //agregar un datos de un colegio
	{
		$this->autorizar();

		//guardo en un array todos los datos que insertaron en el formulario anterior
		$colegio = array(
			'id_comuna' => $this->input->post('id_comuna'),
			'nombre' => $this->input->post('nombre'), //con el name de cada input obtengo los valores de cada uno
			'direccion' => $this->input->post('direccion'),
			'telefono' => $this->input->post('telefono'),
			'pagina_web' => $this->input->post('pagina_web'),
			'contacto' => $this->input->post('contacto'),
			'matricula' => $this->input->post('matricula'),
			'mensualidad' => $this->input->post('mensualidad'),
			'id_dependencia' => $this->input->post('id_dependencia'),
			'grupo_socioeco' => $this->input->post('grupo_socioeco'),
			'id_religion' => $this->input->post('id_religion'),
			'id_idioma' => $this->input->post('id_idioma'),
			'latitud' => $this->input->post('latitud'),
			'longitud' => $this->input->post('longitud'),
			
			);
	

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_colegio($colegio); //agrego el colegio asignado 


		redirect(base_url('administracion/datos_psu?sus=1'));

	}

	//ADMINISTRADOR AGREGA DATOS DE LA PSU DEL COLEGIO

	public function datos_psu() //PAra saber el id_colegio del colegio que estoy agrefando
	{
		if($this->input->get('sus')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Se agregaron los datos del colegio. Ahora sigue con la PSU"
			);
		}
		
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_ultimo_colegio();
		


		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/datos_psu', $dato);
		$this->load->view("layouts/footer");

	}

	public function datos_psu_2013() //PAra saber el id_colegio del colegio que estoy agrefando
	{
		if($this->input->get('sus')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Se agregaron los datos PSU 2012. Ahora sigue con la PSU 2013"
			);
		}
		
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_ultimo_colegio();
		


		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/datos_psu_2013', $dato);
		$this->load->view("layouts/footer");

	}


	public function datos_psu_action()
	{
		$this->autorizar();
		$psu = array(
			'anio' => $this->input->post('anio'),
			'id_colegio' => $this->input->post('id_colegio'),
			'lenguaje_promedio' => $this->input->post('lenguaje_promedio'),
			'lenguaje_maximo' => $this->input->post('lenguaje_maximo'),
			'lenguaje_minimo' => $this->input->post('lenguaje_minimo'),
			'matematicas_promedio' => $this->input->post('matematicas_promedio'),
			'matematicas_maximo' => $this->input->post('matematicas_maximo'),
			'matematicas_minimo' => $this->input->post('matematicas_minimo'),
			'lenguaje_mas_matematicas' => $this->input->post('lenguaje_mas_matematicas'),
			);
	

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_colegio_psu($psu); //agrego la psu del colegio asignado 


		redirect(base_url('administracion/datos_psu_2013?sus=1'));
	}

	public function datos_psu_2013_action()
	{
		$this->autorizar();
		$psu = array(
			'anio' => $this->input->post('anio'),
			'id_colegio' => $this->input->post('id_colegio'),
			'lenguaje_promedio' => $this->input->post('lenguaje_promedio'),
			'lenguaje_maximo' => $this->input->post('lenguaje_maximo'),
			'lenguaje_minimo' => $this->input->post('lenguaje_minimo'),
			'matematicas_promedio' => $this->input->post('matematicas_promedio'),
			'matematicas_maximo' => $this->input->post('matematicas_maximo'),
			'matematicas_minimo' => $this->input->post('matematicas_minimo'),
			'lenguaje_mas_matematicas' => $this->input->post('lenguaje_mas_matematicas'),
			);
	

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_colegio_psu($psu); //agrego la psu del colegio asignado 


		redirect(base_url('administracion/datos_simce_2bas?sus=1'));
	}

	//ADMINISTRADOR AGREGA DATOS DEL SIMCE 2 BASICO DEL COLEGIO
	public function datos_simce_2bas() //PAra saber el id_colegio del colegio que estoy agrefando
	{
		if($this->input->get('sus')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Se agregaron los datos de la PSU. Ahora sigue con el Simce de 2 Basico"
			);
		}
		
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_ultimo_colegio();
		


		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/datos_simce_2bas', $dato);
		$this->load->view("layouts/footer");

	}

	public function datos_simce_2bas_action()
	{
		$this->autorizar();
		$simce_2bas = array(
			'id_colegio' => $this->input->post('id_colegio'),
			'anio' => $this->input->post('anio'),
			'compresion_lectora' => $this->input->post('compresion_lectora'),
			
			);
	
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_colegio_simce_2bas($simce_2bas); //agrego la psu del colegio asignado 


		redirect(base_url('administracion/datos_simce_4bas?sus=1'));
	}

	//ADMINISTRADOR AGREGA DATOS DEL SIMCE 4 BASICO DEL COLEGIO

	public function datos_simce_4bas() //PAra saber el id_colegio del colegio que estoy agrefando
	{
		if($this->input->get('sus')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Se agregaron los datos del simce de 2 Basico. Ahora sigue con el Simce de 4 Basico"
			);
		}
		
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_ultimo_colegio();
		


		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/datos_simce_4bas', $dato);
		$this->load->view("layouts/footer");

	}

	public function datos_simce_4bas_action()
	{
		$this->autorizar();
		$simce_4bas = array(
			'id_colegio' => $this->input->post('id_colegio'),
			'anio' => $this->input->post('anio'),
			'compresion_lectora' => $this->input->post('compresion_lectora'),
			'matematicas' => $this->input->post('matematicas'),
			'ciencias_naturales' => $this->input->post('ciencias_naturales'),
			);
	

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_colegio_simce_4bas($simce_4bas); //agrego la psu del colegio asignado 


		redirect(base_url('administracion/datos_simce_6bas?sus=1'));
	}

	//

	//ADMINISTRADOR AGREGA DATOS DEL SIMCE 6 BASICO DEL COLEGIO

	public function datos_simce_6bas() //PAra saber el id_colegio del colegio que estoy agrefando
	{
		if($this->input->get('sus')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Se agregaron los datos del Simce de 4 Basico. Ahora sigue con el Simce de 6 Basico"
			);
		}
		
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_ultimo_colegio();
		


		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/datos_simce_6bas', $dato);
		$this->load->view("layouts/footer");

	}

	public function datos_simce_6bas_action()
	{
		$this->autorizar();
		$simce_6bas = array(
			'id_colegio' => $this->input->post('id_colegio'),
			'anio' => $this->input->post('anio'),
			'compresion_lectora' => $this->input->post('compresion_lectora'),
			'matematicas' => $this->input->post('matematicas'),
			'escritura' => $this->input->post('escritura'),
			);
	

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_colegio_simce_6bas($simce_6bas); //agrego la psu del colegio asignado 


		redirect(base_url('administracion/datos_simce_8bas?sus=1'));
	}

	//

	//ADMINISTRADOR AGREGA DATOS DEL SIMCE 8 BASICO DEL COLEGIO

	public function datos_simce_8bas() //PAra saber el id_colegio del colegio que estoy agrefando
	{
		if($this->input->get('sus')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Se agregaron los datos del Simce de 6 Basico. Ahora sigue con el Simce de 8 Basico"
			);
		}
		
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_ultimo_colegio();
		


		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/datos_simce_8bas', $dato);
		$this->load->view("layouts/footer");

	}

	public function datos_simce_8bas_action()
	{
		$this->autorizar();
		$simce_8bas = array(
			'id_colegio' => $this->input->post('id_colegio'),
			'anio' => $this->input->post('anio'),
			'compresion_lectura' => $this->input->post('compresion_lectura'),
			'matematicas' => $this->input->post('matematicas'),
			'ciencias_naturales' => $this->input->post('ciencias_naturales'),
			);
	

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_colegio_simce_8bas($simce_8bas); //agrego la psu del colegio asignado 


		redirect(base_url('administracion/datos_simce_2med?sus=1'));
	}

	//
//ADMINISTRADOR AGREGA DATOS DEL SIMCE 2 MEDIO DEL COLEGIO

	public function datos_simce_2med() //PAra saber el id_colegio del colegio que estoy agrefando
	{
		if($this->input->get('sus')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Se agregaron los datos del Simce de 8 Basico. Ahora sigue con el Simce de 2 Medio"
			);
		}
		
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_ultimo_colegio();
		


		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/datos_simce_2med', $dato);
		$this->load->view("layouts/footer");

	}

	public function datos_simce_2med_action()
	{
		$this->autorizar();
		$simce_2med = array(
			'id_colegio' => $this->input->post('id_colegio'),
			'anio' => $this->input->post('anio'),
			'comprension_lectura' => $this->input->post('comprension_lectura'),
			'matematicas' => $this->input->post('matematicas'),
			
			);
	

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_colegio_simce_2med($simce_2med); //agrego la psu del colegio asignado 


		redirect(base_url('administracion/inicio?ad=1'));
	}

	//



	
	public function seleccionar_colegio_mod()
	{
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		$dato['comunas']= $this->uum->get_comunas();

		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/seleccionar_colegio_mod', $dato);
		$this->load->view("layouts/footer");
	}


	//Administrador modificado datos de un colegio

	public function modificar_colegio()
	{
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		$dato['comunas']= $this->uum->get_comunas();

		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/modificar_colegio', $dato);
		$this->load->view("layouts/footer");
	}

	

	//

	public function eliminar_colegio()
	{
		$this->autorizar();	
		$this->load->model("colegio_model","uum");
		$this->uum->eliminar_colegio($this->input->get('colegio'));
		//var_dump($this->input->get('colegio'));
		redirect(base_url('administracion/inicio?del=1'));
	}

	public function index()  //para modificar colegio (intento)
	{
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//carago una consulta
		$dato['colegios']= $this->uum->get_colegios();
		$dato['region']= $this->uum->get_regiones();

		$this->load->view('layouts/header');
		$this->load->view('administracion/index',$dato);
		$this->load->view('layouts/footer');
	}

	//MOdificar Oficial

	public function modificar_show() 
	{
		$this->load->helper('url');
		$colegio_id = $this->input->get("colegio"); 
		
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_colegio($colegio_id); 
		$dato['comunas']= $this->uum->get_comunas();
		$dato['dependencia']= $this->uum->get_dependencias();

		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/modificar_show', $dato);
		$this->load->view("layouts/footer");
	}

	public function modificar_colegio_action(){
		

		$this->autorizar();
		$colegio = array(
			'id_colegio' => $this->input->post('id_colegio'),
			'id_comuna' => $this->input->post('id_comuna'),
			'nombre' => $this->input->post('nombre'), //con el name de cada input obtengo los valores de cada uno
			'direccion' => $this->input->post('direccion'),
			'telefono' => $this->input->post('telefono'),
			'pagina_web' => $this->input->post('pagina_web'),
			'contacto' => $this->input->post('contacto'),
			'matricula' => $this->input->post('matricula'),
			'mensualidad' => $this->input->post('mensualidad'),
			'id_dependencia' => $this->input->post('id_dependencia'),
			'grupo_socioeco' => $this->input->post('grupo_socioeco'),
			'id_religion' => $this->input->post('id_religion'),
			'id_idioma' => $this->input->post('id_idioma'),
			'latitud' => $this->input->post('latitud'),
			'longitud' => $this->input->post('longitud'),
			
			);
	
		//var_dump($colegio);
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->modificar_colegio($colegio, $this->input->post('id_colegio')); //agrego el colegio asignado 


		redirect(base_url('administracion/inicio?mod=1'));
	}


	
	private function autorizar(){
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect(base_url('administracion/login'));
		}
	}
}

