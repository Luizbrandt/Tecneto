<?php

	session_start();

	//Primeiro nível de autenticação - usuário
	if(!isset($_SESSION['usuario'])){
    header('Location: home.php?erro=1');
  	}

  	//classe de conexão com o banco de dados
  	require_once('db.class.php');

  	//recuperação do 'id' do usuário para consulta no banco de dados e recuperação das postagens pela sessão
  	$id_usuario = $_SESSION['id_usuario'];

  	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = " SELECT * FROM post WHERE id_usuario = $id_usuario ORDER BY data_inc DESC";

	//resultado externo no php, querry no MySQL
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		//Como podemos ter mais de uma postagem por usuário, é interessante fazer uso da função 'mysqli_fetch_array()' e iterar com while
		while ($regitro = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)) {
			var_dump($regitro);
			echo '<br/><br/>';
		}

	} else{
		echo 'Erro na consulta de postagens no banco de dados!';
	}

?>