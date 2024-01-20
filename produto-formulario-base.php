
		<div class="form-group col-sm-5">
			<label class="alinhar">Nome  </label><input   type="text" class="form-control" name="nome" placeholder="Nome do Comprador" required /></br>
		</div>	
		<div class="form-group col-sm-4">
			<label class="alinhar">Produto</label><input  placeholder="Nome do Produto" required type="text" class="form-control" name="produto" value="<?=$produto['nome'] ?>" /></br>
		</div>	
		<div class="form-group col-sm-3">
			<label class="alinhar">Preço  </label> <input placeholder="Preço do Produto" required type="number" class="form-control" name="preco" value="<?=$produto['preco'] ?>" /></br>
		</div>	
		<div class="form-group col-sm-7">
			<label class="alinhar">Descrição  </label> <textarea placeholder="Descrição do Produto" required name="descricao" class="form-control"><?=$produto['descricao'] ?></textarea></br>
		</div>

		   <!-- campo ckeckbox -->
		<div class="form-group col-sm-1">
			<label class="alinhar">Usado</label><input type="checkbox" class="form-control" name="usado" <?=$usado?> value="true" /></br>
		</div>

		<table>
			<tr>
				<label class="form-group col-sm-1" >Categoria</label>
				<td>	
					<!-- Criação da Categoria com Combo Box - Caixa de Seleção -->

					<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria) : 

							$essaEhACategoria = $produto['categoria_id'] == $categoria['id']; 
							$selecao = $essaEhACategoria ? "selected = 'selected'" : "";
						?>

						  <option value="<?= $categoria['id'] ?>" <?=$selecao?>> <?= $categoria['nome']?></option>  

						<?php endforeach ?>

					</select>						

				</td>

				<!-- Criação da Categoria com Radio - compo de Bolinha para seleção -->

				<!-- <td>
					<?php foreach ($categorias as $categoria) : ?>

					  <input  type="radio" name="categoria_id" value="<?= $categoria['id'] ?>"> <?= $categoria['nome']?></br>

					<?php endforeach ?>

				</td> -->
				
			</tr>

		</table>	


