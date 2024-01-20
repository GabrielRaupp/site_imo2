<?php
require_once("conecta.php"); 

function buscaUsuario($conexao, $email, $senha){
	$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao,$email);  /* Protege de SQL Injecton*/
	$query = "select * from usuarios where  email = '{$email}' AND senha = '{$senhaMd5}'";
	$resultado = mysqli_query($conexao,$query);
	$usuario  = mysqli_fetch_assoc($resultado);
	return $usuario;
}	

