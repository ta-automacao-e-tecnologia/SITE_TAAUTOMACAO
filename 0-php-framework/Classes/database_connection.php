<?php

	class connection
	{
		protected $conn;

		public function __construct()
		{
			try
			{
				$host    = "localhost";
				$bdname  = "taautomodelo";
				$usuario = "root";
				$senha   = "";

				$this->conn = new PDO("mysql:host={$host};dbname={$bdname}", $usuario, $senha);
				$this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //Chama atributos como objetos

				if($this->conn)
				{
					return $this->conn;
				}
				else
				{
					die();
				}
			}
			catch(Exception $e)
			{
				return "Ocorreu um erro de conexão com o banco de dados<br>Error: " . $e;
			}  

		}
	}