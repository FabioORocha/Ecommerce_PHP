<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<title>Valida Login</title>
<link rel="stylesheet" type="text/css" href="css/styleadm.css" />
</head>
<body>

<?php 
	include 'cls/conexaoClass.php';
	include 'cls/usuariosClass.php';
		

/*coletamos os dados do form anterior pelo metodo POST. mesmo m�todo do formul�rio*/
if(isset($_POST['usuario']))
	$nome_usuario=$_POST['usuario'];
if(isset($_POST['senha']))
	$senha_usuario=$_POST['senha'];
	
	
 if(!(empty($nome_usuario)) OR !(empty($senha_usuario))) //testa se algum campo est� vazio
	{
		
		
		$usuario = new usuariosClass();
		$usuario -> consulta($nome_usuario);
		$result = $usuario -> getConsulta();
		if ($linha = $result->fetch_assoc())		
		
		{	
			$senha = $linha['senha'];
			if ($senha == $senha_usuario)
				{
				$_SESSION['id_usuario'] = $linha['id_usuario']; 
					header("location: Index.php");
				}
			else
			{
			print ('<p>Senha incorreta! Tente Novamente!</p>');
			}	
		}
		else //sen�o � sinal que o usu�rio digitado n�o existe
		{
			print ('<p>Usu�rio n�o confere! Tente Novamente!</p>');
		}
	}
	else
	{
		echo '<?>Digite o nome de usu�rio e senha';
	}
 
	
?>

</body>
</html>