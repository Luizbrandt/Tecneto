<?php

  session_start();

  //$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

  if(!isset($_SESSION['usuario'])){
    header('Location: home.php?erro=1');
  }

?>

<!DOCTYPE php>
<php lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tecneto - Index</title>
    <link rel="icon" href="img/icone.png">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <script src="jquery-3.3.1.js"></script>
    
    <script type="text/javascript">
      $(document).ready( function(){
        //Verificar preenchimento correto dos campos de login
        $('#btnCadastro').click(function(){

          var campo_vazio = false;

          if($('#nome').val() == ''){
            $('#nome').css({'background': 'rgba(255, 0, 0, 0.25)'});
            campo_vazio = true;
          } else {
            $('#nome').css({'background': 'rgba(255, 255, 255, 1)'});
          }
          if($('#email').val() == ''){
            $('#email').css({'background': 'rgba(255, 0, 0, 0.25)'});
            campo_vazio = true;
          } else {
            $('#email').css({'background': 'rgba(255, 255, 255, 1)'});
          }
          if($('#senha').val() == ''){
            $('#senha').css({'background': 'rgba(255, 0, 0, 0.25)'});
            campo_vazio = true;
          } else {
            $('#senha').css({'background': 'rgba(255, 255, 255, 1)'});
          }

          if(campo_vazio) return false;
        })

        $('#btn_post').click(function(){
          if($('#texto_post').val().length > 0){
              //A função ajax do JQuerry utiliza um Json como parâmetro de comunicação
              $.ajax({
                //url que direciona a ação
                url: 'incluipost.php',
                //o que executar em caso de sucesso
                method: 'post',
                //dados passados ao Json, no formato similar aos maps, contendo chave e valor. Neste caso, nossa chave será o id do campo de input, e recuperamos o valor entrado através da função seletora do JQuerry '$.('#seu_id').val()'. Uma alternativa é a função serialize, que cria Jsons com base nos formulários, criando chaves com os ids dos campos e retornando os valores de entrada
                data: $('#form_post').serialize(),
                success: function (data) {
                  //Limpando o campo de postagem após requisição bem sucedida
                  $('#texto_post').val('');
                  //Confirmação de requisição bem sucedida por alert
                  atualizaPost();
                }
              });
          }
        });

        //Função capaz de atualizar a 'div' de postagens no momento que a página for atualizada
        function atualizaPost(){
          //carrega posts
          $.ajax({
            url: 'get_post.php',
            success: function(data) {
              //passando os parâmetros de retorno de forma semelhante ao inner html
              $('#posts').html(data);
            }
          })
        }

        atualizaPost();

      });
    </script>
  </head>
  
  <body>

    <!-- BarraNavegaciones -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">Alternar Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><img src="img/logopc.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle onde-estou" data-toggle="dropdown">
                Minha Conta <span class="caret"></span>
                </a>
                    <ul class="dropdown-menu">
                      <li><a href="sair.php">Logout</a></li>
                    </ul>
            </li>
            

          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <br><br><br>
            <div>
              <img src="img/boasvindas.png" class="img-responsive centralizacao">
            </div>
        </div>
      </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <p class="text-center quemsomos">
                  Usuário autenticado!
                  <br/>
                  <label>Usuário:</label>
                  <?=$_SESSION['usuario']?>
                  <br/>
                  <label>E-mail:</label>
                  <?=$_SESSION['email']?>
                </p>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="panel panel-default">
                <div class="panel-body">
                  Postagens: 1
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="panel panel-default">
                <div class="panel-body">
                  <form id="form_post" class="input-group">
                    <input type="text" name="texto_post" id="texto_post" class="form-control" placeholder="Digite aqui! :)" maxlength="140">
                    <span class="input-group-btn">
                      <button class="btn btn-default" id="btn_post" type="button">Post</button>
                    </span>
                  </form>
                </div>
              </div>


              <!--Timeline-->
              <div id="posts" class="list-group">
                
              </div>

            </div>

            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="procurar_pessoas.php">Outros Usuários</a>
                </div>
              </div>
            </div>
          </div>
    </div>
    
    <br><br><br>

    <!--Rodapé-->
    <footer>
      <div class="container">
        <div class="texto-rodape"> Todos os Direitos Reservados &#174 </div>
        <div><img src="img/fbicon.png">&emsp;|&emsp;<img src="img/instaicon.png">&emsp;|&emsp;<img src="img/twiticon.png"></div>
      </div>
    </footer> 
    <!--Rodapé-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>

</php>