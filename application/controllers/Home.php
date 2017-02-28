<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
    	parent::__construct();
    	if($this->ion_auth->logged_in() != true){
    		redirect('auth/login');
    	}
  	}

	public function index()
    {
		$data = array();
        $this->template->load('template','back/home/index', $data);
    }
}
