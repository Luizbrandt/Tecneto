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

        $('#btn_procurar_pessoas').click(function(){
          if($('#nome_pessoa').val().length > 0){
              $.ajax({
                url: 'get_pessoas.php',
                method: 'post',
                data: $('#form_procurar_pessoas').serialize(),
                success: function (data) {
                  $('#pessoas').html(data);

                  $('.btn_seguir').click(function(){
                    //Recuperação do valor retornado no dado customizado
                    var id_usuario = $(this).data('id_usuario');
                    $.ajax({
                      url: 'seguir.php',
                      method: 'post',
                      data: {seguir_id_usuario: id_usuario },
                      success: function(data){
                        alert('Registro efetuado com sucesso!');
                      }

                    });

                  });

                  $('.btn_deixar_seguir').click(function(){
                    var id_usuario = $(this).data('id_usuario');
                    $.ajax({
                      url: 'deixar_seguir.php',
                      method: 'post',
                      data: {deixar_seguir_id_usuario: id_usuario },
                      success: function(data){
                        alert('Registro removido com sucesso!');
                  });
                }
              });
          }
        });

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
                      <li><a href="index.php">Index</a></li>
                    </ul>
            </li>
            

          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
          <br><br>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <p class="text-center quemsomos">
                  <label>Usuário:</label>
                  <?=$_SESSION['usuario']?>
                  <br/>
                  <label>E-mail:</label>
                  <?=$_SESSION['email']?>
                </p>
            </div>
          </div>

          <div class="row">

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="panel panel-default">
                <div class="panel-body">
                  <form id="form_procurar_pessoas" class="input-group">
                    <input type="text" name="nome_pessoa" id="nome_pessoa" class="form-control" placeholder="Quem você está procurando?" maxlength="140">
                    <span class="input-group-btn">
                      <button class="btn btn-default" id="btn_procurar_pessoas" type="button">Pesquisar</button>
                    </span>
                  </form>
                </div>
              </div>


              <!--Timeline-->
              <div id="pessoas" class="list-group">
                
              </div>

            </div>

            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="panel panel-default">
                <div class="panel-body">
                  
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