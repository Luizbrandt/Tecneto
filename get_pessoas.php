<?php

	session_start();

	//Primeiro nível de autenticação - usuário
	if(!isset($_SESSION['usuario'])){
    header('Location: home.php?erro=1');
  	}

  	//classe de conexão com o banco de dados
  	require_once('db.class.php');

  	$nome_pessoa = $_POST['nome_pessoa'];
  	$id_usuario = $_SESSION['id_usuario'];

  	$objDb = new db();
	$link = $objDb->conecta_mysql();

	//O parâmetro 'like' na querry de pesquisa permite que busquemos strings contidas nos nomes de usuário, utilizando o caracter coringa '%' na especificação do campo de pesquisa, à direita e à direita da cadeia de caracteres de entrada. Exemplo: 'lipe' retornando usuário 'Felipe'.
	$sql = "SELECT * FROM usuarios WHERE usuario like '%$nome_pessoa%' AND id <> '$id_usuario'";

	//resultado externo no php, querry no MySQL
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		while ($regitro = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)) {
			echo '<a href="#" class="list-group-item">';
				echo '<strong>'.$regitro['usuario'].'<strong> <small> - '.$regitro['email'].' </small>';
				//No HTML5, podemos definir customização de dados, e é isso que nos possibilitará retornar o 'id' do usuário no momento que o evento de click no botão seguir for capturado. Na tag 'button' que está o nosso botão de seguir, criamos um dado customizado que armazena o id do usuário retornado pelo pesquisa.
				echo '<p class="list-group-item-text pull-right">';
					echo '<button type="button" class="btn btn-primary btn_seguir" data-id_usuario="'.$regitro['id'].'">Seguir</button>';
					echo '<button type="button" class="btn btn-default btn_deixar_seguir" data-id_usuario="'.$regitro['id'].'">Deixar de Seguir</button>';
				echo '</p>';
				echo '<div class="clearfix"></div>';
			echo '</a>';
		}

	} else{
		echo 'Erro na consulta de usuários no banco de dados!';
	}

?>