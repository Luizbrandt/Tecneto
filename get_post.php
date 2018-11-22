<?php
	
	session_start();

  	require_once('db.class.php');

  	$id_usuario = $_SESSION['id_usuario'];

  	$objDb = new db();
	$link = $objDb->conecta_mysql();

	//Selec com order by para posicionar mais ao topo os post mais antigos
	$sql = "SELECT * FROM post WHERE id_usuario = $id_usuario ORDER BY data_inclusao DESC";
	
	//Variável que vai ter o retorno da nossa query com o MySQL
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		//Vários registros do banco de dados - mais de um tweet do mesmo user
		while($registro = mysqli_fetch_array($resultado_id)){
			var_dump($registro);
		}

	} else {
		echo 'Erro na consulta de posts no banco de dados! :(';
	}

?>