			<tr>
				<td>Nova receita</td>
				<td ><input type = "number" name = "receita" class = "form-control"></td>
			</tr>
			<tr>
				<td>Data</td>
				<td ><input type = "date" name = "data" class = "form-control"></td>
			</tr>
			<tr>
				<td>Descrição:</td>
				<td><textarea name = "descricao" class = "form-control"></textarea></td>
			</tr>
			<tr>
				<td>Conta vinculada</td>
				<td>

					<select name = "banco_id" class = "form-control">
					<?php
					foreach ($bancos as $banco) :
						/*$conta = $receita['banco_id'] == $banco['id']
						$selecao = $conta  ? "selected = 'selected'": "";*/
						$selecao = "";
					?>
						<option name = "banco_id" value = "<?=$banco['banco_id']?>" class = "form-control" <?=$selecao?>> <?=$banco['nome_banco']?>
					<?php 
						endforeach
					?>
					</select>
				</td>
			</tr>
					