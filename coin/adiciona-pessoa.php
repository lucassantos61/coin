<?php

	require_once("banco-manipula.php");
	require_once("logica-usuario.php");
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$senhaRepete = $_POST['repete_senha'];
	if($senha == $senhaRepete && verificaEmail($conexao,$email) == 1){
		if(cadastraPessoa($conexao,$nome,$email,md5($senha)) ){
		$_SESSION["success"] = "usuario cadastrado com sucesso";
		header("Location: index.php");
		die();
		}
			echo mysqli_error($conexao);
	}elseif (verificaEmail($conexao,$email) == 0){
		$_SESSION["danger"] = "Email já cadastrado no sistema";
		header("Location: cadastro.php");
		die();
	}else{
		$_SESSION["danger"] = "As senhas não são iguais";
		header("Location: cadastro.php");
		die();
	}

?>