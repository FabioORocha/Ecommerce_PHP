<?php 
	include 'cls/produtosClass.php'; 
  	include 'cls/conexaoClass.php';
	
	$nome = $_SESSION['nome'];
?>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<?php
		//instancia o objeto e conecta ao banco de dados
		$produto = new produtosClass();
		$produto -> mostrar_produto();
			
	?>

	<br>
	
	<table border="1" class='table'>
		
		
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
					<td><a href="?m=adc&pro_id=<?php echo $linha['pro_id'];?>">Add Carrinho</a></td>
				</tr>
	  <?php }
	  ?>
	</table>

	