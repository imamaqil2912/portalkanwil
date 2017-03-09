<!DOCTYPE html>
<html lang="en">
<head>

<title>Scaffold responsive website template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- styles -->
<link href="<?php echo base_url() ?>assets/front/css/bootstrap.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>assets/front/css/bootstrap-responsive.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>assets/front/css/docs.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>assets/front/css/prettyPhoto.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>assets/front/js/google-code-prettify/prettify.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>assets/front/css/nivo-slider.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>assets/front/css/style.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>assets/front/color/success.css" rel="stylesheet" />
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->

<script src="<?php echo base_url() ?>assets/front/js/jquery-1.8.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/google-code-prettify/prettify.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/modernizr.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/jquery.elastislide.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/jquery.tweet.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/application.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/nivo/jquery.nivo.slider.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/nivo/setting.js"></script>
<!-- Portfolio hover -->
<script src="<?php echo base_url() ?>assets/front/js/hover/jquery-hover-effect.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/hover/setting.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/custom.js"></script>
<!-- fav and touch icons -->
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/front/ico/favicon.ico" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/front/ico/apple-touch-icon-144-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/front/ico/apple-touch-icon-114-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/front/ico/apple-touch-icon-72-precomposed.png" />
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>assets/front/ico/apple-touch-icon-57-precomposed.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<header>
	<?php $this->load->view('front/layouts/header')?>
</header>
<section id="intro">
	<?php $this->load->view('front/layouts/slider')?>
</section>

<?php $this->load->view($main) ?>
<!-- Footer
 ================================================== -->
<footer class="footer">
	<?php $this->load->view('front/layouts/footer')?>
</footer>
</body>
</html>