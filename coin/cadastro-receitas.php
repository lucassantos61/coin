<?php 
	$titulo = "Receitas";
	require_once("cabecalho.php");
	require_once("bancos-financeiros.php");
	require_once("banco.php");
	$bancos = listaBanco($conexao);
?>
			
	<h1>Cadastro de receitas</h1>	
	<form method = "post" action = "receitas.php"> 

		<table class = "table">
			<?php
			require_once("formulario-base.php");
			?>
			<tr>
				<td><input type = "submit" value = "cadastrar" class = "btn btn-primary"></td>
			</tr>
		</table>
	</form>

<?php
	require_once("rodape.php");
?>