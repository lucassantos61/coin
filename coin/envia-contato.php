<?php
	session_start();
	require_once("mail/PHPMailerAutoload.php");
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$comentario = $_POST['comentario'];

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host ="smtp.gmail.com";
	$mail->Port = 587;
	$mail->SMTPSecure = "tls";
	$mail->SMTPAuth = true;
	$mail->Username = "lucasferreira241@gmail.com";
	$mail->Password = "Seila101";

	$mail->setFrom("lucasferreira241@gmail.com","Contato sobre o coin");
	$mail->addAddress("lucasferreira241@gmail.com");
	$mail->Subject = "Email de contato do aplicativo";
	$mail->msgHTML("<html>de: {$nome}<br>email: {$email}<br>
		Telefon: {$telefone}
		<br>mensagem: {$comentario}</html>");
	$mail->altBody = "de: {$nome}\nTelefone: {$telefone}\nemail: {$email}\nmensagem: {$comentario}";
	if($mail->send()){
		$_SESSION['success'] = "Comentario enviado com sucesso";
		header("Location: index.php");
	}else{
		$_SESSION['danger'] = "Nao foi possível enviar o comentario";
	}
	die();
?>