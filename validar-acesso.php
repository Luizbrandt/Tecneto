<?php

	session_start();

	require_once('db.class.php');
	
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$sql = " SELECT id, usuario, email, senha FROM usuarios WHERE email = '$email' AND senha = '$senha' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){
			$_SESSION['id_usuario'] = $dados_usuario['id'];
			$_SESSION['usuario'] = $dados_usuario['usuario'];
			$_SESSION['email'] = $dados_usuario['email'];
			header('Location: index.php');
		} else {
			header('location: login.php?erro=1');
		}

	} else {
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site!';

	}

	// update true/false
	// insert true/false
	// select false/resource
	// delete true/false

?>