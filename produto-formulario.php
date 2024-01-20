

<?php 
require_once("cabecalho.php");
require_once("BD-categoria.php");
require_once("BD-produto.php");
require_once("logica-usuario.php");

verificaUsuario();
$produto = array("nome"=> "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias = ListaCategorias($conexao);

?>

<h2 class="fa fa-list-alt titulo" > Formulário de Produto</h2> 		
	  	 
<form  action="adiciona-produto.php" method="POST"></br>
	<div class="form-row"> 
			
		<table class="table">
			<?php require_once("produto-formulario-base.php") ?>

		</table></br>	
	                 
		<div class="form-group col-sm-12">
					<button class="btn btn-primary" type="submit">Cadastrar</button> 
		</div></br>	
</form>
 <!-- Criação da Lista de Formulário  - pegando do Form produto-lista.php     -->

<table ></br>
	
		<?php 

			require_once("produto-lista.php");


		?>

</table>
	   	
<?php require_once("rodape.php"); ?>

</html>