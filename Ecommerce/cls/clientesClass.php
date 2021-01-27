<?php
		
	class clientesClass
	{
		//definição das propriedades da classe
		var $codigo;
		var $nome;
		var $sobrenome;
		var $pais;
		var $cidade;
		var $email;
		var $senha;
		var $resultado;
		
		//método que executa uma inserção no Banco de Dados
		public function inserecliente($nome, $sobrenome, $pais, $cidade, $email, $senha)
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "INSERT INTO clientes (nome,sobrenome,pais,cidade,email,senha) VALUES ('$nome', '$sobrenome', '$pais', '$cidade', '$email', '$senha');";
			$conn = $Oconn -> getconn();
			$conn->query($sql);
			
		}
			public function consulta($nome_login)
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = 'SELECT * FROM clientes  where nome="'.$nome_login.'"';
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn-> query($sql);
			
			
		}
		
				public function consulta_carrinho($nome_cliente)
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = 'SELECT * FROM clientes  where nome="'.$nome_cliente.'"';
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn-> query($sql);
			
			
		}
		
		//método que retorna a consulta efetuada.
		public function getConsulta()
		{
			return $this -> resultado;
		}
	}
	
?>