<?php 
require_once("cabecalho.php");  
 require_once("BD-produto.php");
 require_once("logica-usuario.php");

verificaUsuario();

$nome = $_POST["nome"];
$produto = $_POST["produto"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria_id"];

if(array_key_exists('usado', $_POST)){
	$usado = true;	
} else{
	$usado = false;
}


if (insereProduto($conexao, $produto, $preco, $descricao, $usado, $categoria)){
	?>
		<p class = "text-success"> O Sr(a). <?=$nome; ?> comprou o produto <?= $produto; ?>, no valor de R$ <?= $preco; ?>. Produto adicionado com sucesso!
		<li><a class="btn btn-primary" href="produto-formulario.php">OK</a></li>

	<?php
	} else { 
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao inserir o Produto. Erro inserção nos campos: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>
<?php require_once ("rodape.php"); ?>
