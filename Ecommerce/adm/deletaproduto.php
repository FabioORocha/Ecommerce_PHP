<?php 
	include '../cls/produtosClass.php'; 
  	include '../cls/conexaoClass.php';
?>

	<?php
		//instancia o objeto e conecta ao banco de dados
		$produto = new produtosClass();
		
		$pro_id = $_GET['cod'];
		
		$produto -> deletaproduto($pro_id);
		
		header("location: principal.php?ma=lp");
	?>
	
	
