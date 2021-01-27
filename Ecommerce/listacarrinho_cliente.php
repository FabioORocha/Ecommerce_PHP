<?php 

  	include 'cls/conexaoClass.php';
	include 'cls/produtosClass.php'; 
	include 'cls/clientesClass.php'; 
	
	$nome = $_SESSION['nome'];
	$produto = new produtosClass();
	$produto -> consultacarrinho($nome);
	$cliente = new clientesClass();
	$cliente -> consulta($nome);
?>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<br>
	<table border="1" class='table'>
		
		
		<tr>
			<td>Nome</td>
			<td>pais</td>
			<td>cidade</td>
		</tr>
		
		<?php
			$resulta = $cliente -> getConsulta();
			while ($linhac = $resulta->fetch_assoc())
			{
		?>
				<tr>
					<td><?php echo $linhac['nome'];?><?php echo ' ', $linhac['sobrenome'];?></td>
					<td><?php echo $linhac['pais'];?></td>
					<td><?php echo $linhac['cidade'];?></td>						
				</tr>
	  <?php }
	  ?>
	</table>

	<br>
	<hr>
	<table border="1" class='table'>
		
		<caption>Produtos</caption>
		<tr>
			<td>Nome</td>
			<td>Valor</td>
			<td>Descricao</td>
			<td>Imagem</td>
		</tr>
		
		<?php
			$result = $produto -> getConsulta();
			while ($linha = $result->fetch_assoc())
			{
		?>
				<tr>
					<td><?php echo $linha['pro_nome'];?></td>
					<td><?php echo $linha['pro_valor'];?></td>
					<td><?php echo $linha['pro_descricao'];?></td>
					<td><img src='img/<?php echo $linha['img'];?>' alt='Foto de exibição' style="width:150px;height:150px;" /></td>
					<td><a href="?m=dp&cod=<?php echo $linha['pro_id'];?>">Remover</a></td>
				</tr>
	  <?php }
	  ?>
	</table>

	