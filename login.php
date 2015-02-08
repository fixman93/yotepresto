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
	<div class="login-panel container-fluid">
		<div class="user-login-border">
			<div class="user-login">
			<div class="alert alert-danger" id="alert-danger" style="display:none;"></div>
				<input type="text" class="form-control" name="name" id="name">
				<label>Correo Electrónico</label>
				<input type="text" class="form-control" name="pass" id="pass">
				<label>Contraseña</label>
				<div class="olvide">
					<h1>Olvidé mi Contraseña</h1>
					<button class="btn ingresat" id="logg">Ingresat</button>
					<h2>¿No estás Registrado aún?</h2>
					<a href="register.php"><button class="btn registrate" >Regístrate</button></a>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
	
	
		
	