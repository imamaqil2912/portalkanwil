<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $user = $this->User_model->get_all();

        $data = array(
            'user_data' => $user
        );

        $this->template->load('template','user_list', $data);
    }

    public function read($id) 
    {
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nip9' => $row->nip9,
		'nama' => $row->nama,
		'password' => $row->password,
		'jabatan' => $row->jabatan,
		'unit_kerja' => $row->unit_kerja,
		'role' => $row->role,
	    );
            $this->template->load('template','user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user/create_action'),
	    'id' => set_value('id'),
	    'nip9' => set_value('nip9'),
	    'nama' => set_value('nama'),
	    'password' => set_value('password'),
	    'jabatan' => set_value('jabatan'),
	    'unit_kerja' => set_value('unit_kerja'),
	    'role' => set_value('role'),
	);
        $this->template->load('template','user_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nip9' => $this->input->post('nip9',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'password' => $this->input->post('password',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'role' => $this->input->post('role',TRUE),
	    );

            $this->User_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/update_action'),
		'id' => set_value('id', $row->id),
		'nip9' => set_value('nip9', $row->nip9),
		'nama' => set_value('nama', $row->nama),
		'password' => set_value('password', $row->password),
		'jabatan' => set_value('jabatan', $row->jabatan),
		'unit_kerja' => set_value('unit_kerja', $row->unit_kerja),
		'role' => set_value('role', $row->role),
	    );
            $this->template->load('template','user_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nip9' => $this->input->post('nip9',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'password' => $this->input->post('password',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'role' => $this->input->post('role',TRUE),
	    );

            $this->User_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $this->User_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nip9', 'nip9', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
	$this->form_validation->set_rules('unit_kerja', 'unit kerja', 'trim|required');
	$this->form_validation->set_rules('role', 'role', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-03-09 16:31:34 */
/* http://harviacode.com */