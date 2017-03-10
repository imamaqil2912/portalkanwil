
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portral KANWIL | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/font-awesome/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/font-awesome/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="container">
    <div class="row">
        
    </div>
    
</div>
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html">
	<img src="../assets/img/LOGO.png" width="180" height="50"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">
	<b>Sign in to start your session</b></p>
    <div id="infoMessage"><?php echo $message;?></div>
    <?php echo form_open("auth/login");?>
	<p>
	<b>Username</b>
	</p>
    <div class="form-group has-feedback">
      <?php echo form_input($identity);?>
    </div>
	<p>
	<b>Password</b>
	</p>
    <div class="form-group has-feedback">
      <?php echo form_input($password);?>
    </div>
    <div class="row">
      <div class="col-xs-8">
        <p>
            <?php echo lang('login_remember_label', 'remember');?>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
          </p>
      </div>
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign in</button>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.social-auth-links -->

    <a href="forgot_password"><b>Forgot Password?</b></a><br>
	<a href="create_user"><b>Register New User</b></a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<div>
<center><b>&copy; Duktekkom 2017 - All right reserved</b></center>
<center><b>Design by</b> <a href="https://www.instagram.com/m_doang/"><b>Muhammad</b></a></center>
</div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
</body>
</html>