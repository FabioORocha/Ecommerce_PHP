<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<title>Estrutura de Página Tableless</title>
<link rel="stylesheet" type="text/css" href="../css/styleadm.css" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div id="principal">
	<div id="cabecalho" style="background-color:#0F2E4C; color:black; padding:20px;">
		<!--Estrutura do cabeçalho - Inserir uma imagem-->
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ecommerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?ma=h">Home</a></li>
      <li><a href="?ma=lp">Produtos</a></li>
      <!--<li><a href="#">Page 2</a></li>-->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
    </ul>
  </div>
</nav>
		 
	</div>

	<div id="corpo">
		
		<div id="esquerda">
			

			<br>		
			
		</div>

		<div id="centro">
			
			<?php
			if(!isset($_GET['ma']))
				require_once('home.php');
			else{
				switch($_REQUEST['ma']){	
					
					case 'h':
					require_once('home.php');
					break;
					
					
					case 'lp': //lista produtos
					require_once('listaprodutos.php');
					break;
					
					case 'ip': //insere produto
					require_once('form_insereproduto.php');
					break;
					
					case 'ipa': //insere produto action
					require_once('insereproduto.php');
					break;
					
					case 'ap': //altera produto
					require_once('form_alteraproduto.php');
					break;
					
					case 'apa': //altera produto
					require_once('alteraproduto.php');
					break;
					
					case 'dp': //deleta produto
					require_once('deletaproduto.php');
					break;
				}	
			}			
			?>
			
		</div>
		
		<div style="clear: both;"></div>
		
	</div>

	<div id="rodape">		
		
	</div>
	
</div>

</body>
</html>


