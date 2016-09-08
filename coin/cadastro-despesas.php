<?php 
	$titulo = "Despesas";
	require_once("cabecalho.php");
	require_once("banco.php");
	require_once("bancos-financeiros.php");
?>	
	<form action = "gastos.php">
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