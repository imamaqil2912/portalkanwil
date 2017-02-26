<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function viewall()
    {
        return $this->db->get('users');
    }

    public function save($data)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'company' => $this->input->post('company'),
            'phone' => $this->input->post('phone'),
            'group' => $this->input->post('group'),
        );

        $additional_data = array(
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'company' => $data['company'],
            'phone' => $data['phone'],
        );
        $group = array($data['group']); // Sets user to admin.

        if ($this->ion_auth->register($data['username'], $data['password'], $data['email'], $additional_data, $group))
        {
            $this->session->set_flashdata('status','success');
            $this->session->set_flashdata('message', 'Simpan data user pengguna sudah selesai');
        }
        else
        {
            $this->session->set_flashdata('status','danger');
            $this->session->set_flashdata('message',  $this->ion_auth->errors());
        }
    }
}