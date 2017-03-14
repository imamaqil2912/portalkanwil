<?php
Class Slider_model extends CI_Model
{
	function __constuct()
	{
		parent::__constuct();  // Call the Model constructor 
		loader::database();    // Connect to current database setting.
	}
	
	
	//untuk menampilkan
	function tampil_slider()
	{
		$q = $this->db->query("SELECT * from tbl_banner order by kode_banner ");
		return $q;
	}
	
	//query...dinamis cek di controller bisa digunakan untuk insert,update
	function jalankan_query_manual($datainput)
	{
		$q = $this->db->query($datainput);
		return $q;
	}
	
	
		function hapus_slider($id,$seleksi,$tabel)
	{
		$this->db->where($seleksi,$id);
		$this->db->delete($tabel);
	}

	
	//untuk menampilkan data pada edit
		function tampil_detail_slider($kode)
	{
		$q = $this->db->query("SELECT * from tbl_banner where kode_banner='$kode'");
		return $q;
	}
	
	
	
	
}
?>