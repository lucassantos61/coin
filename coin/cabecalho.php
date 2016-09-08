<?php 
	error_reporting(E_ALL ^ E_NOTICE);
require_once("mensagem.php");
?>
<html>
	<head>
		<meta charset   = "UTF-8">
		<link rel = "stylesheet" href = "css/bootstrap.css">
		<link rel = "stylesheet" href = "css/loja.css">
			<meta name="keywords" content="HTML5,javascript">
		<title><?=$titulo;?></title>
	</head>
	<body>
		<div class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container">
				<div class = "navbar-header">
					<a class = "navbar-brand" href = "index.php">Home</a>
				</div>
				<ul class = "nav navbar-nav">
					<li><a href = "cadastro.php">Cadastro</a></li>
					<li><a href = "contato.php">Entre em contato</a></li>
					<li><a href = "sobre.php">Sobre</a></li>
				</ul>
			</div>

		</div>
	<!--'	<div class = "jumbotron">-->
		<div class = "container">
		<div class = "principal">
		<?php
			mensageSucess("success");
			mensageSucess("danger");
		?>