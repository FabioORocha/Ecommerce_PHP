<?php

			include 'cls/conexaoClass.php';

			$pro_id= $_GET['pro_id'];
			$nome = $_SESSION['nome'];
			
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "INSERT INTO carrinho(nome,pro_id) VALUES ('$nome', '$pro_id');";
			$conn = $Oconn -> getconn();
			$conn->query($sql);
			header("location: indexcliente.php");
		
	?>