<?php 
	include 'cls/clientesClass.php'; 
  	include 'cls/conexaoClass.php';
?>

<?php
	$clientes = new clientesClass();
	
	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$pais=$_POST['pais'];
	$cidade=$_POST['cidade'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	
	$clientes -> inserecliente($nome, $sobrenome, $pais, $cidade, $email, $senha);
	//$sql = mysql_query("INSERT INTO clientes(nome,sobrenome,pais,cidade,email,senha)
	//VALUES('$nome', '$sobrenome', '$pais', '$cidade', '$email', '$senha')");
	header("location: index.php?ma=l");
?>
	</body>
</html>