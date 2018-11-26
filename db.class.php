<?php

class db {
	//host
	//private $host = 'localhost';
	private $host = 'localhost';
	//usuario
	private $usuario = '1361824';
	//private $usuario = 'root';
	//senha
	private $senha = 'Micaefeldspato1';
	//private $senha = '';

	//banco de dados
	private $database ='1361824';
	//private $database ='tecneto';


	//função de conexão
	public function conecta_mysql(){

		//função de conexão com o banco de dados, espera quatro parâmetros (localização do bd, usuario de acesso, snha, banco de dados)
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajustar o 'charset' entre a aplicação e o banco de dados - dois parâmetros, processo de comunicação (variável) e codificação de caracteres 'uft8'
		mysqli_set_charset($con, 'utf8');

		//a função 'mysqli_connect_errno' retorna um código de erro, se não for 0, existem erros no processo de comunicação com o banco de dados - já a função 'mysqli_connet_error' recupera a mensagem de erro, é retornada uma concatenação da string e da mensagem de erro
		if(mysqli_connect_errno()){
			echo 'Erro ao se conectar com o DB MySQL'.mysqli_connet_error();
		}

		return $con;
	}
}

?>