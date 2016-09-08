<?php
	require_once('banco.php');
/*
*Verifca  Se usuario e senha existem no banco de dados se existir retorna o usuario o senha senão existir retona null
*/
	function consultaUsuario($conexao , $email , $senha){
		$cripto = md5($senha);
		$email = mysqli_real_escape_string($conexao,$email);
		$query = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$cripto}'";
		$resultado = mysqli_query($conexao,$query);
		$usuario = mysqli_fetch_assoc($resultado);
		return $usuario;
	}
?>