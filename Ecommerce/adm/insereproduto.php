<?php 
	include '../cls/produtosClass.php'; 
  	include '../cls/conexaoClass.php';
?>
	
	<?php
		//instancia o objeto e conecta ao banco de dados
		$produto = new produtosClass();
		
		$nome = $_POST['nome'];
		$valor =  $_POST['valor'];
		$descricao = $_POST['descricao'];
		$quantidade = $_POST['quantidade'];
		$img = $_POST['img'];		
		
		$produto -> insereproduto($nome, $valor, $descricao,$quantidade, $img);
		
		header("location: principal.php?ma=lp");
	?>
	
	
