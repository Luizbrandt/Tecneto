<?php
	session_start();

	if(!$isset($_SESSION['usuario'])){
    	header('Location:index.php?erro=');
  	}
	
	require_once('db.class.php');

	$texto_post = $_POST['texto_post'];		//Variável que usa o ID do input para armazenar o texto
	$id_usuario = $_SESSION['id_usuario'];	//Variável que utiliza da session para armazenar o id de quem postou

	//Teste de validação
	if($texto_post != '' && $id_usuario != ''){
	
		//Conexão das informações de input do 'post' com o banco
		$objDb = new db();
		$link = $objDb->conecta_mysql();
	
		$sql = " INSERT INTO post(id_usuario,post) values('$id_usuario', '$texto_post') ";
	
		//Inclusão do tweet no banco
		mysqli_query($link, $sql); 
	}
?>