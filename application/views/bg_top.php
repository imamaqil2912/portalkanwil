<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<?php 	
			echo link_tag ("assets/css/bootstrap.css");
			echo link_tag ("assets/css/bootstrap.min.css");
			//echo link_tag ("assets/css/bootstrap-theme.css");
			//echo link_tag ("assets/css/bootstrap-theme.min.css");
			
			//echo link_tag ("assets/css/carrousel.css");
			echo link_tag ("assets/css/style.css");
			
			echo link_tag ("assets/css/slider.css");
	?>
	<script type="text/javascript" src="<?php //echo base_url(); ?>assets/js/bootstrap.js" ></script>
	<script type="text/javascript" src="<?php //echo base_url(); ?>assets/js/bootstrap.min.js" ></script>
	
	
	<!-- jquery banner-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.4.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/skrip.js" ></script>


	
	
			<script type="text/javascript"> 
			$(document).ready( function()
				{	
					$('#idslider').lofJSidernews( { interval:4000,
															 easing:'easeInOutQuad',
															duration:1000,
															auto:true } );						
				});
				
			<!--atas scripst baner-->		
			</script>
</head>

<body >
<!-- logo-->
</br>
<div id="nav">
					<?php
                        $this->load->view('plug/menu');
                    ?>
</div>

<div id="logo">



						<a href="<?php echo base_url('index.php/web/nivo')?>">contoh lain versi  NIVO</a>
					

</div>



<!--banner-->

	<div id="banner" style="border:1px dashed #666666; background-color:#DCDCDC; width:74%; padding:10px;">

		<div id="idslider" class="lof-slidecontent"> 
			<div  class="preload"><div></div></div> 
						<!-- MAIN CONTENT --> 
			<div class="lof-main-outer"> 
			<ul class="lof-main-wapper"> 
				<?php
				foreach($banner->result_array() as $bn)
				{
				?>
				
				<li>
				
				
					<img src="<?php echo base_url(); ?>assets/banner/<?php echo $bn['gambar']; ?>" />
				
			
				</li>
				<?php
				}
				?>
			</ul> 
		</div>      

<!--banner kanan kecil-->		
		<div class="lof-navigator-outer"> 
			<ul class="lof-navigator"> 
				<?php
				foreach($banner->result_array() as $bn2)
				{
				?>
			<li> 
			
			<div><img src="<?php echo base_url(); ?>assets/banner/<?php echo $bn2['gambar']; ?>" height="20"/>
				<h3><?php echo strip_tags(substr($bn2['judul'],0,25)); ?>...</h3> 
				<span class=tanggal><?php echo strip_tags(substr($bn2['deskripsi'],0,70)); ?>...</span> 
			</div> 
			
			</li>
			<?php
				}
				?>
			</ul> 
			
		</div> 
		</div> 
	</div>

	<!-- stop coding banner-->







			





    <div id="footer">
        <?php
           // $this->load->view('plug/footer');
        ?>
    </div>
</body>
</html>

