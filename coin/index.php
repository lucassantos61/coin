<?php 
$titulo = "Home";
require_once("cabecalho.php");
require_once ("logica-usuario.php");
?>

<?php if (usuarioEstaLogado()) { 
		header("Location: principal.php");
		die();
	} else{ ?>
	<h1>Login</h1>
	<form method = "post" action = "login.php">
		<table class = "table">
			<tr>
				<td>Usuario : </td>
				<td><input type = "text" name = "usuario" class = "form-control" placeholder = "exemplo@exemplo.com.br"></td>
			</tr>
			<tr>
				<td>Senha : </td>
				<td><input type = "password" name = "senha" class = "form-control"></td>
			</tr>
			<tr>
				<td>
					<button class = "btn btn-primary">Login</button>
				</td>
			</tr>
		</table>		
	</form>
	<?php } ?>
<?php require_once("rodape.php");?>