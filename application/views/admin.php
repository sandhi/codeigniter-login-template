<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contoh halaman login - sandhiyaniz.com</title>

	<!-- style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylesheets/style.css'); ?>">
</head>
<body> 

<div id="container">
	<div class='row'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>Selamat datang di halam Admin</h1>
			nama : <?php echo $this->session->userdata('username'); ?></br>
			<a href="<?php echo base_url('member/logout'); ?>"><button class='btn btn-danger'>Keluar</button></a>
		</div>
	</div>
</div>
</div>
 	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>