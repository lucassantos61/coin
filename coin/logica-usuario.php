<?php
session_start();
	/*
 	*Metordo que verifica elemento o isset da variavel
 	*/
	function usuarioEstaLogado(){
		return isset($_SESSION['usuario_logado']);
	}
	/*
 	*Metodo que verifica se o usuario está logado 
 	*/	function verificaUsuario(){
		if(!usuario_logado()){
			$_SESSION["danger"] = "Você não tem acesso a essa funcionalidade";
			header("Location: index.php");
			die();
		}
	}
 	/*
 	* Método que extrai o usuário logado
 	*/
	function usuarioLogado (){
		return $_SESSION['usuario_logado'];
	}

 	/*
 	*insere na sessão cria o email do usuario para identificação
 	*/
	function logarUsuario($email){
		$_SESSION['usuario_logado'] = $email;
	}

	function logout(){
		session_destroy();
		session_start();
	}
?>