<?php
Class user_model extends CI_Model
{
	function __constuct()
	{
		parent::__constuct();  // Call the Model constructor 
		loader::database();    // Connect to current database setting.
	}
	

	
	function tampil_banner()
	{
		$q = $this->db->query("SELECT * from tbl_banner where stts='1' order by kode_banner DESC");
		return $q;
	}
	
}
 
?>
