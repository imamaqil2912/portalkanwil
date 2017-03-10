<body class="desain">

<!--navbar-->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a  class="brand">GIZI</a>
				
				<a data-toggle="collapse" data-target=".nav-collapse" class="btn btn-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="nav-collapse">
					<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
					<li><a href="<?php echo base_url('index.php/c_amb/view_about')?>">About</a></li>
					</ul>
				</div>
				<div class="nav-collapse">
					<ul class="nav pull-right">
						<li><a href="" data-toggle="modal" data-target="#modal-contact-form">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- end navbar -->
	
	
	
	
	
	<!-- MODAL CONTACT FORM -->
	<div class="modal hide fade" id="modal-contact-form">
		<div class="modal-header">
			<button class="close" data-dismiss="modal">&times;</button>
			<h3>Login</h3>
		</div>
		
		<div class="modal-body">
			<form action="<?php echo base_url();?>index.php/login/login_form" method="post" name="login" class="form-horizontal">
				<div class="control-group ">
					<label for="contact-name" class="control-label">user name:</label>
					
					<div class="controls">
						<input type="text" name="username" id="contact-name" />
					</div>
				</div>

				<div class="control-group">
					<label for="contact-password"  class="control-label">password:</label>
					
					<div class="controls">
						<input type="password" name="password" id="contact-password"  />
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">
						<input type="submit" name="login" class="btn btn-primary" value="Login" />
					</div>
				</div>
			</form>
		</div>
		
		<div class="modal-footer">
			<a href="" data-dismiss="modal" class="btn">Cancel</a>
		</div>
	</div> <!-- end modal -->
<!-- badan-->
