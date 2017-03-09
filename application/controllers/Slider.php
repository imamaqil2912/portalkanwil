<?php if(!defined('BASEPATH')) exit('No Allowed');

class Slider extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
		$this->load->helper(array('html','form', 'url', 'file'));
		$this->load->library(array('slider','form_validation','pagination'));
		$this->load->model(array('slider_model')); 
  }
  public function index()
  {
    redirect('slider/set_slider');
  }
  
  //lihat slider
  function set_slider(){
	 			$data['scriptmce'] = $this->scripttiny_mce();
				$data["judul"] = "Pengaturan Banner";
				$data["det"] = $this->slider_model->tampil_slider();
				$this->load->view('slider/slider_input',$data);
	}
	
	//tambah slider
	function insert_banner()
	{
				$tgl = " %Y-%m-%d";
				$jam = "%h:%i:%a";
				$time = time();
				$judul = mysql_real_escape_string($this->input->post('judul'));
				$deskripsi = mysql_real_escape_string($this->input->post('deskripsi'));
				$stts = mysql_real_escape_string($this->input->post('stts'));
				$acak=rand(00000000000,99999999999);
				$bersih=$_FILES['userfile']['name'];
				$nm=str_replace(" ","_","$bersih");
				$pisah=explode(".",$nm);
				$nama_murni=$pisah[0];
				$ubah=$acak.$nama_murni; //tanpa ekstensi
				$config["file_name"]=$ubah; //dengan eekstensi
				$nama_fl=$acak.$nm; //simpan nama ini k database
				$config['upload_path'] = './assets/slider/';
				$config['allowed_types'] = 'bmp|gif|jpg|jpeg|png';
				$config['max_size'] = '2000';
				$config['max_width'] = '9000';
				$config['max_height'] = '9000';					
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload())
				{
					echo $this->upload->display_errors();
				}
				else {
					$this->admin_model->jalankan_query_manual("insert into tbl_banner (judul,deskripsi,gambar,stts) 
					values('".$judul."','".$deskripsi."','".$nama_fl."','".$stts."')");
					echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/admin/set_banner'>";
				}
	}
	
	//hapus banner
		function hapus_banner()
	{
		$kode='';		
		if ($this->uri->segment(3) === FALSE)
		{
    			$kode='';
		}
		else
		{
    			$kode = $this->uri->segment(3);
		}
		$gb='';		
		if ($this->uri->segment(4) === FALSE)
		{
    			$gb='';
		}
		else
		{
    			$gb = $this->uri->segment(4);
		}
	
		{
				$file = 'slider/banner/'.$gb;
				unlink($file);
				$data["upd"] = $this->slider_model->hapus_banner($kode,"kode_banner","tbl_banner");
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."admin/set_banner'>";
			}
		}
	
	//edit manggil form...edit
	function edit_banner()
		{
		$kode='';		
		if ($this->uri->segment(3) === FALSE)
		{
    			$kode='';
		}
		else
		{
    			$kode = $this->uri->segment(3);
		}
	
				$data['scriptmce'] = $this->scripttiny_mce();
				$data["ls"] = $this->admin_model->tampil_detail_banner($kode);
				$data["judul"] = "Edit Banner ";
				$this->load->view('admin/banner_edit',$data);
				
	}
	
	//edit simpan..edit
	function update_banner()
	{
		
				$judul = mysql_real_escape_string($this->input->post('judul'));
				$deskripsi = mysql_real_escape_string($this->input->post('deskripsi'));
				$stts = mysql_real_escape_string($this->input->post('stts'));
				$gbr = $this->input->post('gbr');
				$id = $this->input->post('id');
				
				
				if(empty($_FILES['userfile']['name']))
				{
					$this->admin_model->jalankan_query_manual("update tbl_banner set judul='".$judul."',deskripsi='".$deskripsi."',stts='".$stts."' where 
					kode_banner='".$id."'");
					echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/admin/set_banner'>";
				}
				else
				{
					$acak=rand(00000000000,99999999999);
					$bersih=$_FILES['userfile']['name'];
					$nm=str_replace(" ","_","$bersih");
					$pisah=explode(".",$nm);
					$nama_murni=$pisah[0];
					$ubah=$acak.$nama_murni; //tanpa ekstensi
					$config["file_name"]=$ubah; //dengan eekstensi
					$nama_fl=$acak.$nm; //simpan nama ini k database
					$config['upload_path'] = './assets/banner/';
					$config['allowed_types'] = 'bmp|gif|jpg|jpeg|png';
					$config['max_size'] = '2000';
					$config['max_width'] = '680';
					$config['max_height'] = '200';					
					$this->load->library('upload', $config);
				
					if(!$this->upload->do_upload())
					{
						echo $this->upload->display_errors();
					}
					else {
						$file = './assets/banner/'.$gbr;
						unlink($file);
						$this->admin_model->jalankan_query_manual("update tbl_banner set judul='".$judul."',deskripsi='".$deskripsi."',stts='".$stts."', 
						gambar='".$nama_fl."' where kode_banner='".$id."'");
						echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/admin/set_banner'>";
					}
				}
	}

	//Function TinyMce------------------------------------------------------------------
		private function scripttiny_mce() {
		return '
		<!-- TinyMCE -->
		<script type="text/javascript" src="'.base_url().'jscripts/tiny_mce/tiny_mce_src.js"></script>
		<script type="text/javascript">
		tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "'.base_url().'system/application/views/themes/css/BrightSide.css",

		// Drop lists for link/image/media/template dialogs
		//"'.base_url().'media/lists/image_list.js"
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "'.base_url().'index.php/adminweb/image_list/",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : \'Bold text\', inline : \'b\'},
			{title : \'Red text\', inline : \'span\', styles : {color : \'#ff0000\'}},
			{title : \'Red header\', block : \'h1\', styles : {color : \'#ff0000\'}},
			{title : \'Example 1\', inline : \'span\', classes : \'example1\'},
			{title : \'Example 2\', inline : \'span\', classes : \'example2\'},
			{title : \'Table styles\'},
			{title : \'Table row 1\', selector : \'tr\', classes : \'tablerow1\'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>';	
	}
}  
  ?>