<?php
 require_once("cabecalho.php"); 
 require_once("BD-produto.php"); 
 require_once("logica-usuario.php");
 ?>
<?php

 $id = $_POST['id'];
$produto = buscaProduto($conexao,$id);
 if (removeProduto($conexao,$id)){
	?>
		<p class = "text-success">  Produto <?= $produto['nome']?> no valor de R$ <?= $produto['preco']?>. Foi Excluido com sucesso!
		<li><a class="btn btn-primary" href="produto-formulario.php">OK</a></li>

	<?php
	} else { 
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao Excluir o Produto <?= $produto['nome']?> no valor de R$ <?= $produto['preco']?>: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>
	



 