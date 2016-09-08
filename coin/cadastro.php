<?php 
$titulo = "Bloco de notas";
require_once("cabecalho.php");	
require_once("logica-usuario.php");
?>
	<?php if(usuarioEstaLogado()){
		header("Location: principal.php");
		die();
	} else{
	?>
	<h1>Cadastro</h1>
	<form method= "POST" action = "adiciona-pessoa.php"  name = "formulario">
	<table class = "table">
		<tr>
			<td>Nome:</td>
			<td><input type = "text" name = "nome" class = "form-control" required placehokder = "Lucas Ferreira dos santos"></td>
		</tr>
			<tr>
				<td>E-mail</td>
				<td><input type = "email" name = "email" class = "form-control" required placeholder = "exemplo@exemplo.com.br"></td>
			</tr>
		<tr>
				<td>Senha</td>
				<td><input type = "password" name = "senha" class = "form-control" required></td>
		</tr>
			<tr>
				<td>Repita sua senha</td>
				<td><input type = "password" name = "repete_senha" class = "form-control" required ></td>
			</tr>
		<tr>
			<td>
				<input type = "submit" name = "gravar" class = "btn btn-primary">
			</td>
		</tr>
	</table>
	</form>
	<?php }
	?>
<?php require_once("rodape.php");?>
