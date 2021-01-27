<?php

	class conexaoClass
	{
		var $conn;//propriedade
		
		//método
		function abrir_conexao()//abrir conexao com o banco de dados
			{
				$servername = 'localhost';
				$username = 'root';
				$password = '';
				$dbname = '';
				
				$this -> conn = new mysqli($servername, $username, $password, $dbname);
				
			}
			
		function getconn()
			{
				return $this -> conn;
			}
	}
	
?>