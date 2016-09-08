function validaSenha(form){
	 senha = document.formulario.senha.value;
	 senhaRepetida = document.formulario.repete_senha.value;
	 if (senha != repete_senha){
	 	alert("Senha não são iguais");
	 	document.formulario.repete_senha.focus();
	 	return false;
	 }

}