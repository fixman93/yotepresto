<!DOCTYPE html>
<html lang="en">
<head>
    <title>YOTEPRESTO.COM</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="web_author" content=""> 
    <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
	<?php include 'mini_header.php'; ?>
	<div class="register-panel">
		<div class="container-fluid clearfix">
			<h1>Para formar parte de nuestra comunidad registrate</h1>
			<form method="post">
			<div class="clearfix">
				<div class="col-xs-6">
					<h1 class="pull-left">
						<div><img src="img/hand.png" class="img-responsive"></div>
						<div>Quiero un <span>préstamo</span></div>
						<input type="radio" name="quiero">
					</h1>
				</div>
				<div class="col-xs-6">
					<h1 class="pull-right">
						<div><img src="img/hand2.png" class="img-responsive"></div>
						<div>Quiero <span>prestar</span></div>
						<input type="radio" name="quiero">
					</h1>
				</div>
			</div>
			</form>
			<div class="register-fields">
			<div class="alert alert-danger" id="alert-danger" style="display:none;"></div>
				<form>
					<div class="register-box">
						<input type="text" class="form-control" name="username" id="username" value="">
						<label>Usuario</label>
						<input type="text" class="form-control" name="email" id="email" value="">
						<label>Correo Electrónico</label>
						<input type="text" class="form-control" name="confirmemail" id="confirmemail" value="">
						<label>Confirma Correo Electrónico</label>
						<input type="text" class="form-control" name="password" id="password" value="">
						<label>Contraseña</label>
						<input type="text" class="form-control" name="confirmpassword" id="confirmpassword" value="">
						<label>Confirmar Contraseña</label>
					</div>
					<div class="accepto">
						<input type="checkbox" id="t_and_c">
						Acepto los <a href="#">Términos y Condiciones</a> de uso de la comunidad
						<h2>yotepresto.com</h2>
					</div>
					<div class="reg-btn">
						<button class="btn" id="registration-btn">Regístrarme</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
