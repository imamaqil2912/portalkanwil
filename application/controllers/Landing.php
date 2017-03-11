<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function __construct(){
    	parent::__construct();
		$this->load->helper(array('html','form', 'url', 'file'));
		$this->load->library(array('session','form_validation','pagination'));
		$this->load->model(array('user_model'));
  	}

	public function index()
	{
		$data['main'] = 'front/home/index';
        $data['menu'] = '0';
		$data['banner'] = $this->user_model->tampil_banner();
        // $data['css']=array('css/datatables.min');
        // $data['js']= array('js/jquery.dataTables','js/dataTables.bootstrap');
		$this->load->view('front/layouts/master',$data);
		
	}
}
