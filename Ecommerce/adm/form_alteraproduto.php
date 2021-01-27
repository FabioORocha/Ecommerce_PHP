<?php 
	include '../cls/produtosClass.php'; 
  	include '../cls/conexaoClass.php';
	
	
	
	$pro_id= $_GET['cod'];
	
	$produto = new produtosClass();
	$linha = $produto -> pesquisaproduto($pro_id);
	
	$result = $produto -> getConsulta();
	if ($linha = $result->fetch_assoc())
	{
	?>
	
	<table>
	<form action="?ma=apa" class="form-group" method=POST>
		<tr>
			<td colspan=2>Altere os dados desejados do produto</td><br><br>
		</tr>
		<tr>
			<td>Codigo:</td><td><input type="text" name="codigo" value="<?php echo $linha['pro_id'];?>" readonly="readonly"></td><br>
		</tr>
		<tr>
			<td>Nome:</td><td><input type="text" name="nome" value="<?php echo $linha['pro_nome'];?>"></td><br>
		</tr>
		<tr>
			<td>Valor:</td><td><input type="text" name="valor" value="<?php echo $linha['pro_valor'];?>"></td><br>
		</tr>
		<tr>
			<td>Descrição:</td><td><input type="text" name="descricao" value="<?php echo $linha['pro_descricao'];?>"></td><br>	
		</tr>
		<tr>
			<td>Quantidade:</td><td><input type="number_format" name="quantidade" value="<?php echo $linha['pro_quantidade'];?>"></td><br>
		</tr>
		<tr>
			<td>Imagem:</td><td><input type="file" name="img" value="<?php echo $linha['img'];?>"></td><br>
		</tr>
		<tr>
			<td colspan=2><input type="submit" name="Enviar">	</td>
		</tr>
	</form>	
	</table>
	<?php	
	}
	 ?>