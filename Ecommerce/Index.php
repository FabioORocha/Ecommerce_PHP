<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="principal">
	<div id="cabecalho" style="background-color:#0F2E4C; color:black; padding:20px;"> 
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ecommerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?m=p">Home</a></li>
      <!--<li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>-->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="?m=c"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="?m=l"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
	</div>

	<div id="corpo">
		
		<div id="esquerda" >			
		<ul class="nav nav-pills nav-stacked">
		</ul>
			 
			<!-- substituir os href por href="?m=h" sendo que "m" é a variavel do módulo e "h" a pagina que se deseja chamar-->
				
		</div>

		<div id="centro" style="background-color:#E8EDF2;">
			
			<!-- colocar o conteúdo do módulo na div CENTRO  -->
			
			<?php
				if (!isset ($_GET['m']))
					require_once('listaprodutos.php');
				else {
					switch($_REQUEST['m']){
						
						case 'l':
						require_once('logincliente.php');
						break;
						
						case 'ica': //insere cliente action
						require_once('inserecliente.php');
						break;
						
						case 'c':
						require_once('form_inserecliente.php');
						break;
						
						case 'h':
						require_once('home.php');
						break;
						
						case 'p':
						require_once('listaprodutos.php');
						break;
						
					}
				}
			
			
			
			?>
			
			
		</div>
		
		<div style="clear: both;"></div>
		
	</div>

	<div id="rodape">
			<a href="adm/login.php"> Adiministrativo <a/><br/>	
	</div>
	
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>