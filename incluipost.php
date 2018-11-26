<?php
	
	session_start();

	//Primeiro nível de autenticação - usuário
	if(!isset($_SESSION['usuario'])){
    header('Location: home.php?erro=1');
  	}

	require_once('db.class.php');

	$texto_post = $_POST['texto_post'];
	$id_usuario = $_SESSION['id_usuario'];

	//Segundo nível de autenticação - variáveis vazias
	if($texto_post == '' || $id_usuario == ''){
		die();
	}

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = " INSERT INTO post(id_usuario, postagem)values('$id_usuario','$texto_post')";

	mysqli_query($link, $sql);
?>
