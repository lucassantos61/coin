<?php

require_once("login-usuario.php");
require_once("logica-usuario.php");
	$usuario = consultaUsuario($conexao,$_POST['usuario'], $_POST['senha']);
	if ($usuario == null){
		$_SESSION["danger"] = "Usuário ou senha inválido";
		header("Location: index.php");
	}else{
		$_SESSION["success"] = "Usuário logado com sucesso";
		logarUsuario($usuario["email"]);
		header("Location: principal.php");
		

	}
	//var_dump($usuario);	
	die();
?>