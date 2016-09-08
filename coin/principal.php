<?php 
	$titulo = "Principal";
	require_once("cabecalho.php");
	require_once("logica-usuario.php");
?>	
		<h1>Bem vindo</h1>
	<p><a href = "logout.php" class = "btn btn-primary" >Logout</a></p>
<div class = "pos">
	<a class = "btn  btn-lg botao-receitas tamanho-botao" href = "cadastro-receitas.php">Receita</a>

	<a class = "btn btn-lg botao-despesas tamanho-botao" href = "cadastro-despesas.php">Desepesas</a>

	<a class = "btn btn-lg botao-cartao tamanho-botao" href = "cadastro-gasto-cartoes.php">Despesa<br>com cartão</a>
</div>
<?php
require_once("rodape.php")
?>