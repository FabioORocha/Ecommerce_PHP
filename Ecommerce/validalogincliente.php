<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<title>Valida Login Cliente</title>
<link rel="stylesheet" type="text/css" href="css/styleadm.css" />
</head>
<body>

<?php 
	include 'cls/conexaoClass.php';
	include 'cls/clientesClass.php';
		

/*coletamos os dados do form anterior pelo metodo POST. mesmo método do formulário*/
if(isset($_POST['nome']))
	$nome_cliente=$_POST['nome'];
if(isset($_POST['senha']))
	$senha_cliente=$_POST['senha'];
	
	
 if(!(empty($email_cliente)) OR !(empty($senha_cliente))) //testa se algum campo está vazio
	{
		
		
		$cliente = new clientesClass();
		$cliente -> consulta($nome_cliente);
		$result = $cliente -> getConsulta();
		if ($linha = $result->fetch_assoc())		
		
		{	
			$id = $linha['id'];
			$senha = $linha['senha'];
			if ($senha == $senha_cliente)
				{					
				$_SESSION['nome'] = $linha['nome'];
				header("location: indexcliente.php");
				}
			else
			{
			print ('<p>Senha incorreta! Tente Novamente!</p>');
			}	
		}
		else //senão é sinal que o usuário digitado não existe
		{
			print ('<p>Usuario não confere! Tente Novamente!</p>');
		}
	}
	else
	{
		echo '<?>Digite o nome de usuário e senha';
	}
 
	
?>

</body>
</html>