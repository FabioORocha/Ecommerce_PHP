<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/styleadm.css" />

</head>
<body>
		
<table id="loginmain" class="table">

		<tr>
			<td colspan="2">Login</td>
		</tr>
		<form action="validalogin.php" method="POST" name="formulario" id="formulario">
		<tr>
			<td>Usuário:</td>
			<td><input type="text" name="usuario" id="usuario"></td>
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