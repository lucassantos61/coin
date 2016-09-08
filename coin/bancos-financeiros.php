<?php
	require_once("banco.php");
	function listaBanco($conexao){
		$bancos = array();
		$query ="SELECT * FROM banco";
		$resultado = mysqli_query($conexao,$query);
		while ($banco = mysqli_fetch_assoc($resultado)) {
			array_push($bancos, $banco);
		}
		return $bancos;
	}

?>