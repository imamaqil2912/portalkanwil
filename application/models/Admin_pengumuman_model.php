<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_pengumuman_model extends CI_Model
{

    public $table = 'pengumuman';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
	function show_all()
    {
        $q = $this->db->query("SELECT * from pengumuman order by id ASC ");
		return $q;
    }
    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('judul_pengumuman', $q);
	$this->db->or_like('isi_pengumuman', $q);
	$this->db->or_like('link_file', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('judul_pengumuman', $q);
	$this->db->or_like('isi_pengumuman', $q);
	$this->db->or_like('link_file', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Admin_pengumuman_model.php */
/* Location: ./application/models/Admin_pengumuman_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-03-14 19:33:31 */
/* http://harviacode.com */