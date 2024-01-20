<?php

//----------- Criar sessão para evitar ataques----
session_start();   

// ------- Confirma que  usuario digitado foi logado  com sucessono index.php--------------------------------

function usuarioEstaLogado(){

	return isset($_SESSION["usuario_logado"]);

}

// ----Segurança - Proteger a criação de outro Form indevido (adiciona-produto.php e produto-formulario.php)-----

function verificaUsuario(){
	if (!usuarioEstaLogado()){
		$_SESSION["danger"] = "Você não tem acesso a essa funcionalidade! Efetue Login primeiro.";
		header("location: index.php");
		die();

	}
}

// ----------- Retorna o nome do usário logado no momento do login no index.php logo depois do Bem Vindo--------
function usuarioLogado(){

	return $_SESSION["usuario_logado"];

}
// ---------------  Setacookie ou seja cria o cookie no caso de sucesso do Login no login.php por um tempo ----
function logaUsuario($email){
	$_SESSION["usuario_logado"]= $email;
}
//-------------Efetua o Logout do sistema ------------------------------------
function logout (){

	// unset($_SESSION["usuario_logado"]); Desconectado OU  destroy (destruida)
	session_destroy();
	session_start(); // criou uma nova sessão para chamar a msg de logout.


}


?>