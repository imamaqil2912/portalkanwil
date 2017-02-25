<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Group_model extends CI_Model
{
    public function viewall()
    {
        return $this->db->get('groups');
    }
}