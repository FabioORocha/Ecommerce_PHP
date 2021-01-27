<?php	
	class usuariosClass
	{
		//definição das propriedades da classe
		
		var $resultado;
		
		//método que executa uma consulta select no Banco de Dados
		public function consulta($nome_login)
		{
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = 'SELECT * FROM usuarios WHERE usuario="'.$nome_login.'"';
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