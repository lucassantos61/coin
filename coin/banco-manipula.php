<?php 
	require_once('banco.php');
/*
*Função que insere novo usuario no sistema
*/
function cadastraPessoa($conexao,$nome,$email,$senha){

		$eamil = mysqli_real_escape_string($conexao,$email);
		$nome = mysqli_real_escape_string($conexao,$nome);
		$query = "INSERT INTO usuarios (nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";
		return mysqli_query($conexao,$query);
}
/*
*Função que verifica se p e-mail já está cadastrado no sistema
*/
function verificaEmail($conexao , $email){
	$eamil = mysqli_real_escape_string($conexao,$email);
	$query = "SELECT email FROM usuarios WHERE email = '{$email}'";
	$resultado = mysqli_fetch_assoc(mysqli_query($conexao,$query));
	//var_dump($resultado) ;
	if (empty($resultado)){
		//echo "vazia";
		return 1;
	}else{
		//echo "achei algo";
		return 0;
	}

}
?>