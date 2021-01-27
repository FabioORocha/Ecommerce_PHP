<?php
		
	class produtosClass
	{
		//definição das propriedades da classe
		var $codigo;
		var $nome;
		var $valor;
		var $descricao;
		var $quantidade;
		var $img;
		var $resultado;
		
		//método que executa uma consulta select no Banco de Dados
		public function mostrar_produto()
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = 'SELECT * FROM produtos';
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn-> query($sql);			
			
		}
		
		//método que executa uma inserção no Banco de Dados
		public function insereproduto($nome, $valor, $descricao,$quantidade, $img)
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "INSERT INTO produtos (pro_nome, pro_valor, pro_descricao, pro_quantidade, img) VALUES ('$nome', '$valor', '$descricao', '$quantidade', '$img');";
			$conn = $Oconn -> getconn();
			$conn->query($sql);
			
		}
		
		//método que executa uma consulta select no Banco de Dados
		public function alteraproduto($codigo, $nome, $valor, $descricao, $quantidade, $img)
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "UPDATE produtos set pro_nome='$nome', pro_valor='$valor', pro_descricao='$descricao', pro_quantidade='$quantidade', img='$img' where pro_id=$codigo;";
			$conn = $Oconn -> getconn();
			$conn->query($sql);
			
		}
		
		//método que executa uma consulta select no Banco de Dados
		public function pesquisaproduto($codigo)
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "SELECT * FROM produtos  where pro_id=$codigo;";
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn-> query($sql);
			
			
		}
		
		//método que executa uma consulta select no Banco de Dados
		public function deletaproduto($codigo)
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "DELETE FROM produtos  where pro_id=$codigo;";
			$conn = $Oconn -> getconn();
			$conn->query($sql);
			
		}
		//método que executa uma consulta select com join no Banco de Dados
		public function consultacarrinho($nome_cliente)
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = 'SELECT * FROM produtos INNER JOIN carrinho ON produtos.pro_id = carrinho.pro_id  where nome="'.$nome_cliente.'"';
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn-> query($sql);

		}
		public function deletaproduto_carrinho($codigo)
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "DELETE FROM carrinho where pro_id=$codigo;";
			$conn = $Oconn -> getconn();
			$conn->query($sql);
			
		}
		
		//método que retorna a consulta efetuada.
		public function getConsulta()
		{
			return $this -> resultado;
		}
		
		
	}
	
?>