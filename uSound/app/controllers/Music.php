<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends CI_Controller {

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
		$this->load->view('adm/Adm');
	}

	public function store () 
	{
		if($this->music_model->postMusic()) {
				// echo 'Registrou!! Agora precisamos redirecionar para a página inicial.';
			redirect(base_url(), 'refresh');
		} else {
			echo 'Não Registrou!! Vamos encontrar o problema.';
		}
	}

	public function __construct()
	    {
	        parent::__construct();

	        $this->load->model('music_model');
	        $this->load->helper('url');
		}
}
