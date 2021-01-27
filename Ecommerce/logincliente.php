<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<title>LOGIN Cliente</title>
<link rel="stylesheet" type="text/css" href="css/styleadm.css" />

</head>
<body>
		
<table id="loginmain" class="table">

		<tr>
			<td colspan="2">Login Cliente</td>
		</tr>
		<form action="validalogincliente.php" method="POST" name="formulario" id="formulario">
		<tr>
			<td>Nome:</td>
			<td><input type="text" name="nome" id="nome"></td>
		</tr>
		<tr>
			<td>Senha:</td>
			<td><input type="password" name="senha" id="senha"></td>
		</tr>

		<tr>	
			<td><input type="submit" name="Enviar" id="entrar" value="Enviar"></td>
			<td><input type= "reset" name="Limpar" id="limpar" value= "Limpar"></td>
		</tr>
		</form>		

		
</table>
		
</body>
</html>