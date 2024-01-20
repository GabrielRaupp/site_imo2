<?php
require_once("conecta.php"); 
   // ---------------Insere Produto-----------------
function insereProduto($conexao, $produto, $preco, $descricao, $usado, $categoria){
	
	// $produto = htmlspecialchars_decode("nome");
	// $descricao = htmlspecialchars_decode("descricao");

	$query = "insert into produtos (nome, preco, descricao, usado, categoria_id) values ('{$produto}', '{$preco}', '{$descricao}', '{$usado}', '{$categoria}')";	
	return mysqli_query($conexao,$query);
}
// ---------------Lista Produto-----------------
function listaProduto($conexao){
	
	$produtos = array();
	$query = "select prod.*, categ.nome as categoria_nome
	          from produtos as prod join categorias as categ
	          on categ.id=prod.categoria_id
	          order by prod.nome ASC";
	$resultado = mysqli_query($conexao, $query);
	while ( $produto = mysqli_fetch_assoc($resultado)) {
		
		array_push($produtos, $produto);
	}
	return $produtos;	
}
//-------------------Editar Produto--------------------
function buscaProduto($conexao, $id){
	
	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);	
	return mysqli_fetch_assoc($resultado);
}
//---------------------Altera Produto------------------
function alteraProduto($conexao, $id, $produto, $preco, $descricao, $usado, $categoria){
	
	$query = "update produtos set nome = '{$produto}', preco = {$preco}  , descricao = '{$descricao}', usado = {$usado} , categoria_id = {$categoria}  where id = {$id}";
	return mysqli_query($conexao, $query);
}
// ---------------Remove Produto-----------------------
function removeProduto($conexao, $id){
	
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);	
}
?>