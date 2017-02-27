<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function __construct(){
    	parent::__construct();
  	}

	public function index()
	{
		$data['main'] = 'front/home/index';
        $data['menu'] = '0';

        // $data['css']=array('css/datatables.min');
        // $data['js']= array('js/jquery.dataTables','js/dataTables.bootstrap');
		$this->load->view('front/layouts/master',$data);
	}
}
