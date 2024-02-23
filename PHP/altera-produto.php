<?php 
require_once("cabecalho.php"); 
 require_once("BD-produto.php");

$id = $_POST["id"];
// $nome = $_POST["nome"];
$produto = $_POST["produto"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria_id"];

if(array_key_exists('usado', $_POST)){
	$usado = 'true';	
} else{
	$usado = 'false';
}


if (alteraProduto($conexao, $id, $produto, $preco, $descricao, $usado, $categoria)){
	?>
		<p class = "text-success">  Produto <?= $produto; ?>, no valor de R$ <?= $preco; ?>. Foi alterado com sucesso!
		<li><a class="btn btn-primary" href="produto-formulario.php">OK</a></li>

	<?php
	} else { 
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao alterar o Produto: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>
<?php require_once ("rodape.php"); ?>
