<?php
	function insereReceita($conexao,$receita,$data,$descricao,$banco){
		//$descricao = mysqli_real_escape_string($conexao,$descricao);
		$query = "INSERT INTO receitas (valor,data_registro,descricao,banco_id) 
				  VALUES ({$receita},'{$data}','{$descricao}',{$banco})";
		return mysqli_query($conexao,$query);
	}
?>