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

	//utilizamos a função 'date_format' para formatar a data em padrão americano para o que estamos mais habituados - dia / mês / ano - horário
	$sql = " SELECT  date_format(p.data_inc,'%d %b %Y %T') AS data_inc_formatada, p.postagem, u.usuario ";
	$sql.= " FROM post AS p JOIN usuarios AS u ON (p.id_usuario = u.id)";
	$sql.= " WHERE id_usuario = $id_usuario ORDER BY data_inc DESC";

	//resultado externo no php, querry no MySQL
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		//Como podemos ter mais de uma postagem por usuário, é interessante fazer uso da função 'mysqli_fetch_array()' e iterar com while
		while ($regitro = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)) {
			//A tag a não apontará nenhum link, mas será utilizada pare reaproveitar a classe list-group-item do boostratp, para melhorar a exibição gráfica das postagens
			echo '<a href="#" class="list-group-item">';
				echo '<h4 class ="list-group-item-heading">'.$regitro['usuario'].': <small> - '.$regitro['data_inc_formatada'].'</small></h4>';
				echo '<p class="list-group-item-text">'.$regitro['postagem'].'</p>';
			echo '</a>';
		}

	} else{
		echo 'Erro na consulta de postagens no banco de dados!';
	}

?>