<?php

class db {
	//host
	private $host = 'localhost';
	//usuario
	private $usuario = 'root';
	//senha
	private $senha = '';
	//banco de dados
	private $database ='tecneto';

	//função de conexão
	public function conecta_mysql(){


		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		mysqli_set_charset($con, 'utf8');

		if(mysqli_connect_errno()){
			echo 'Erro ao se conectar com o DB MySQL'.mysqli_connet_error();
		}

		return $con;
	}
}

?>