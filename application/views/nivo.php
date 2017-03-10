<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NivoSlider Demo - Custom Theme</title>
	<link href="<?php echo base_url(); ?>nivo/css/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>nivo/css/custom-theme.css" rel="stylesheet" />
    
  </head>
  <body class="custom-theme">

    <div id="slider-wrapper">
      <div class="nivoSlider" id="nivoSlider">
				<?php
				foreach($banner->result_array() as $bn)
				{
				?>
				
				<a>
				
				
					<img src="<?php echo base_url(); ?>assets/banner/<?php echo $bn['gambar']; ?>" alt="" title="<?php echo strip_tags(substr($bn['judul'],0,25)); ?>...
						<?php echo strip_tags(substr($bn['deskripsi'],0,70)); ?>..." />
						
				</a>
				<?php
				}
				?>
		 
      </div>
    </div>

	<script type='text/javascript' src='<?php echo base_url(); ?>nivo/js/jquery-1.7.2.min.js'></script> 
	<script type='text/javascript' src='<?php echo base_url(); ?>nivo/js/jquery.nivo.slider.min.js'></script> 
    <script>
      $(window).load(function() {
        $('#nivoSlider').nivoSlider({
  	    directionNavHide: false
        });
      });
    </script>

  </body>
</html>