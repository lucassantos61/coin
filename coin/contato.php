<?php
$titulo = "Contato";
require_once ("cabecalho.php");?>
	<h1>Contato</h1>
	<form method = "post" action = "enviar-email.php">
		<table class = "table">
			<tr>
				<td>Nome :</td>
				<td><input type = "text" name = "nome" class = "form-control" required></td>	
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type = "text" name = "email" class = "form-control" required placeholder = "exemplo@exemplo.com.br">
				</td>
			</tr>
			<tr>
				<td>Telefone : </td>
				<td><input type = "text" name = "telefone" class = "form-control" placeholder = "(11) 1234-5678"></td>
			</tr>
			<tr>
				<td>Comentario : </td>
				<div class = "col-sm-10">
				<td><textarea class = "form-control msg"  rows ="4" placeholder = "Comentario"  required>
				</textarea>
			</td>
			</div>
			</tr>
			<tr>
				<td><input type = "submit" value = "cadastrar" class = "btn btn-primary"><td>
			</tr>
		</table>
	</form>
<?php require_once("rodape.php")?>