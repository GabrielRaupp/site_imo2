<?php
function buscaUsuario($conexao, $email, $senha){
	$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao,$email);  /* Protege de SQL Injecton*/
	$query = "select * from usuario where email = '{$email}' and senha = '{$senhaMd5}'";
	$resultado = mysql_query($conexao,$query);
	$usuario  = mysqli_fetch_assoc($resultado);
	return $usuario;
}