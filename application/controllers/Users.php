<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
    	parent::__construct();
    	if($this->ion_auth->logged_in() != true){
    		redirect('auth/login');
    	}
        $this->load->model('users_model');
        $this->load->model('group_model');
  	}

	public function index()
	{
		$data['main'] = 'back/users/index';
        $data['menu'] = 101;
        $data['judul'] = 'Administrasi Pengguna';
        $data['breadcrumb'] = array('Beranda','Settings','Administrasi Users');

        $data['users'] = $this->users_model->viewall()->result();

        $data['css'] = array('plugins/datatables/dataTables.bootstrap');
        $data['js'] = array('plugins/datatables/jquery.dataTables.min','plugins/datatables/dataTables.bootstrap.min');
		$this->load->view('back/layouts/master',$data);
	}

    

    public function create()
    {
        $data['main']='back/users/create';
		$data['menu']= 101;
		$data['judul'] = 'Tambah Administrasi Users';
        $data['breadcrumb'] = array('Beranda','Settings','Administrasi Users','Tambah Users');

        $data['groups'] = $this->group_model->viewall()->result();

        $data['css'] = array('');
        $data['js'] = array('');
		$this->load->view('back/layouts/master',$data);
    }

    public function view($id)
    {}

    public function save()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('first_name', 'first_name', 'required');
        $this->form_validation->set_rules('last_name', 'last_name', 'required');
        $this->form_validation->set_rules('company', 'company', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('group', 'group', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            $data['main']='back/users/create';
            $data['menu']= 101;
            $data['judul'] = 'Tambah Administrasi Users';
            $data['breadcrumb'] = array('Beranda','Settings','Administrasi Users','Tambah Users');

            $data['groups'] = $this->group_model->viewall()->result();
            $this->session->set_flashdata('status','danger');
            $this->session->set_flashdata('message', validation_errors());

            $data['css'] = array('');
            $data['js'] = array('');
            $this->load->view('back/layouts/master',$data);
            
        }
        else
        {
            $this->users_model->save($data);
            redirect('users');
        }
    }


    public function edit($id)
    {
        if(empty($id))
        {
            redirect('home');
        }

        $data['main']='golongan_darah/edit';
		$data['menu']=1;
		$data['judul']='Edit Golongan Darah';

        $data['gol_darah'] = $this->golongan_darah_model->select_by_id($id)->row();
		$this->load->view('layouts/master',$data);

    }

    public function update()
    {
         $this->form_validation->set_rules('nama', 'Golongan Darah', 'required');

        $data = array(
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
        );

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('status','danger');
            $this->session->set_flashdata('message', validation_errors());

            return $this->edit($data['id']);
        }
        else
        {
            $this->golongan_darah_model->update($data);
            $this->session->set_flashdata('status','success');
            $this->session->set_flashdata('message', 'Ubah data Golongan Darah sudah selesai');
            redirect('golongan_darah');
        }
    }

    public function delete($id)
    {
       if(empty($id))
        {
            $this->session->set_flashdata('status','danger');
            $this->session->set_flashdata('message', 'Anda Tidak bisa akses');
            redirect('golongan_darah');
        }
        else
        {
            $this->golongan_darah_model->delete($id);
            $this->session->set_flashdata('status','success');
            $this->session->set_flashdata('message', 'Hapus data Golongan Darah sudah selesai');
            redirect('golongan_darah');   
        }
    }
}