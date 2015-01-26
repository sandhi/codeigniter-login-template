<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contoh halaman login - sandhiyaniz.com</title>

	<!-- style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>

<div id="container">
	<div id="form">
	<div class='error_login'>
		<?php if($this->session->flashdata('errors')){echo $this->session->flashdata('errors');}; ?>
	</div>
	<?php echo form_open(base_url('member/login')); ?>
		<div class="input-group input-group-lg" style="width:500px">
		  <span class="input-group-addon glyphicon glyphicon-user"></span>
		  <input type="text" class="form-control" name="username" value="<?php echo $this->session->flashdata('username'); ?>" placeholder="Username" size="30">
		</div>
		<div style='height:10px'></div>
		<div class="input-group input-group-lg" style="width:500px">
		  <span class="input-group-addon glyphicon glyphicon-lock"></span>
		  <input type="password" class="form-control" name="password" value="" placeholder="Password" size="30">
		</div>
		<div style='height:10px'></div>
		<div><input type="submit" class="btn btn-lg btn-default" value="Login" style="width:500px" /></div>
	<?php echo form_close(); ?>
</div>
</div>
 	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>