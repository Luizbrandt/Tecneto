<?php

	require_once('db.class.php');	

	$usuario = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	//variável que recebe os dados tratados pelo PHP e cria a instância (linha) da nossa 'table'
	$objDb = new db();
	//link recebe o retorno da função 'conecta_mysql()', que é a conexão com o banco de dados MySQL
	$link = $objDb->conecta_mysql();

	$emailexiste = false;

	//usuário já existe?
	$sql = " select * from usuarios where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)){
		
		$dados_usuario = mysqli_fetch_array($resultado_id);
		
		if(isset($dados_usuario['usuario'])){
			header('Location: cadastro.php?usuariocadastrado=1');
			$emailexiste = true;
		}

	}

	if($emailexiste) die();

	//inserção dos campos na table - registro de novo usuário
	$sql = " insert into usuarios (usuario,email,senha) values ('$usuario','$email','$senha') ";

	//execução da query
	if(mysqli_query($link,$sql)){

		header('location: login.php?registrosucesso=1');
	}
	else {

		echo 'Erro ao registrar o usuário!';
	}
	
?>