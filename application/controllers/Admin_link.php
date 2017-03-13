<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_link extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_link_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $admin_link = $this->Admin_link_model->get_all();

        $data = array(
            'admin_link_data' => $admin_link
        );

        $this->template->load('template','link_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Admin_link_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'url' => $row->url,
		'tab_baru' => $row->tab_baru,
		'url_gambar' => $row->url_gambar,
		'urutan' => $row->urutan,
		'hits' => $row->hits,
		'ip' => $row->ip,
		'waktu' => $row->waktu,
	    );
            $this->template->load('template','link_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin_link'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('admin_link/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	    'url' => set_value('url'),
	    'tab_baru' => set_value('tab_baru'),
	    'url_gambar' => set_value('url_gambar'),
	    'urutan' => set_value('urutan'),
	    'hits' => set_value('hits'),
	    'ip' => set_value('ip'),
	    'waktu' => set_value('waktu'),
	);
        $this->template->load('template','link_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'url' => $this->input->post('url',TRUE),
		'tab_baru' => $this->input->post('tab_baru',TRUE),
		'url_gambar' => $this->input->post('url_gambar',TRUE),
		'urutan' => $this->input->post('urutan',TRUE),
		'hits' => $this->input->post('hits',TRUE),
		'ip' => $this->input->post('ip',TRUE),
		'waktu' => $this->input->post('waktu',TRUE),
	    );

            $this->Admin_link_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin_link'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Admin_link_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin_link/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'url' => set_value('url', $row->url),
		'tab_baru' => set_value('tab_baru', $row->tab_baru),
		'url_gambar' => set_value('url_gambar', $row->url_gambar),
		'urutan' => set_value('urutan', $row->urutan),
		'hits' => set_value('hits', $row->hits),
		'ip' => set_value('ip', $row->ip),
		'waktu' => set_value('waktu', $row->waktu),
	    );
            $this->template->load('template','link_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin_link'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'url' => $this->input->post('url',TRUE),
		'tab_baru' => $this->input->post('tab_baru',TRUE),
		'url_gambar' => $this->input->post('url_gambar',TRUE),
		'urutan' => $this->input->post('urutan',TRUE),
		'hits' => $this->input->post('hits',TRUE),
		'ip' => $this->input->post('ip',TRUE),
		'waktu' => $this->input->post('waktu',TRUE),
	    );

            $this->Admin_link_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin_link'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Admin_link_model->get_by_id($id);

        if ($row) {
            $this->Admin_link_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin_link'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin_link'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('url', 'url', 'trim|required');
	$this->form_validation->set_rules('tab_baru', 'tab baru', 'trim|required');
	$this->form_validation->set_rules('url_gambar', 'url gambar', 'trim|required');
	$this->form_validation->set_rules('urutan', 'urutan', 'trim|required');
	$this->form_validation->set_rules('hits', 'hits', 'trim|required');
	$this->form_validation->set_rules('ip', 'ip', 'trim|required');
	$this->form_validation->set_rules('waktu', 'waktu', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Admin_link.php */
/* Location: ./application/controllers/Admin_link.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-03-13 18:32:49 */
/* http://harviacode.com */