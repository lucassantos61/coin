<?php
require_once("manipula-receitas.php");
require_once("banco.php");
if(insereReceita($conexao,$_POST['receita'],$_POST['data'],$_POST['descricao'],$_POST['banco_id'])){
	$_SESSION['success'] = "Nova receita cadastrada com sucessso";
	echo 'deu certo';
	} else{
		$_SESSION['danger'] = "Verifique novamente os dados para poder inserir";
		echo 'deu errado';
	
	}

?>