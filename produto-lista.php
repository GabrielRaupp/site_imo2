
<?php 
 require_once("cabecalho.php");  
 require_once("BD-produto.php");

?> 

<?php// require_once("BD-produto.php"); retirar o //, caso for usar só a lista separada;?>

 <table class="table table-striped table-bordered">
 	<h2 class="fa fa-list-alt titulo" > Lista de Produtos</h2></br>
 	<tr></br>			
	        <th class=" titulo1">Produto</th>
	        <th class=" titulo1">Preço</th>
	        <th class=" titulo1">Descrição</th>
	        <th class=" titulo1">Usado</th>
	        <th class=" titulo1">Categoria</th>
	        <th class=" titulo1">Alterar</th>
	        <th class="titulo1">Excluir</th>
	          
	</tr>	
	<?php
	$produtos =listaProduto($conexao);
	foreach ($produtos as $produto) :
	?>		
		<tr>			
			<td ><?= $produto['nome']?></td>
			<td >R$ <?= $produto['preco']?></td>
			<td ><?= substr($produto['descricao'], 0, 40)?></td>
			<td ><?= $produto['usado']?></td>
			<td ><?= $produto['categoria_nome']?></td>	
			<td>
				<form action="alterar-formulario-produto.php" method="POST"  >
					<input  type="hidden" name="id" value="<?= $produto['id']?>">
					<button tabindex="0" class=" fa fa-edit btn btn-link  ml-auto titulo2" aria-hidden="true" data-toggle="popover"  data-placement="right" data-trigger="focus" title="alterar" type="Submit" id="btn-alterar"></button>
				</form>
				
			</td>		
			<td>
				<form action="confirma-exclusao.php" method="POST"  >
					<input  type="hidden" name="id" value="<?= $produto['id']?>">
					<button tabindex="0" class=" fas fa-trash-alt text-danger btn btn-link  ml-auto titulo" data-toggle="popover"  data-placement="right" data-trigger="focus" title="Excluir" type="Submit" id="btn-excluir"></button>
				</form>
				
			</td>

		</tr>
	<?php	
	endforeach

	?>
</table>

<?php require_once("rodape.php"); ?>