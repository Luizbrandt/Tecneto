<?php

  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
  $registrosucesso = isset($_GET['registrosucesso']) ? $_GET['registrosucesso'] : 0;

?>

<!DOCTYPE php>
<php lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tecneto - Login</title>
    <link rel="icon" href="img/icone.png">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <script src="jquery-3.3.1.js"></script>
    <script type="text/javascript">
      $(document).ready( function(){
        //Verificar preenchimento correto dos campos de login
        $('#btnLogin').click(function(){

          var campo_vazio = false;

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
      });
    </script>
  </head>
  <body>

    <!--Barra de Navegação-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a href="home.php" class="navbar-brand"><img src="img/logopc.png"></a>
              
          </div>
            <div class="collapse navbar-collapse" id="barra-navegacao">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php">Home</a></li>
                <li><a href="empresa.php">Empresa</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="cadastro.php">Cadastre-se</a></li>
                <li class="onde-estou"><a href="login.php">Login</a></li>
              </ul>
            </div>
      </div>
    </nav>
    <!--Barra de Navegação-->
    
    <br>
    <br>
    <br>

    <div class="container">

      <div class="page-header cabecalho col-md-12 col-lg-12">
          <img src="img/logocabec.png" class="img-responsive cabecalho">
      </div>

              <!-- CABEÇALHO -->
                <div class="capa">
                  <div class="texto-capa">
                    <div class="col-md-12 col-lg-12">
                      <img src="img/textocapa.png" class="img-responsive centralizacao">
                    </div>
                  </div>
                </div>
              <!-- CABEÇALHO -->

          <!-- LOGIN LOGIN LOGIN LOGIN LOGIN -->
          <div id="login">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <img src="img/cadastro.png" class="img-responsive conteudo-centralizado-left">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <h3>Login</h3>
                <form method="post" action="validar-acesso.php" id="formLogin">

                          <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail.">
                          </div>

                          <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha.">
                          </div>


                          <button id ="btnLogin" type="submit" class="btn btn-custom-2">Login</button>
                </form>

                <?php
                    if($erro == 1){
                       echo "<script type=\"text/javascript\">alert('Usuário e/ou Senha Incorretos!');</script>";
                    }
                    if($registrosucesso ==1){
                       echo "<script type=\"text/javascript\">alert('Usuário registrado com Sucesso. Efetue Login!');</script>";
                    }
                ?>

              </div>
            </div>
          </div>
          <!-- LOGIN LOGIN LOGIN LOGIN LOGIN -->

    </div>

    <br><br><br><br><br>

    <!--Rodapé-->
    <footer>
      <div class="container">
        <div class="texto-rodape"> Todos os Direitos Reservados &#174 </div>
        <div><img src="img/fbicon.png">&emsp;|&emsp;<img src="img/instaicon.png">&emsp;|&emsp;<img src="img/twiticon.png"></div>
      </div>
    </footer> 
    <!--Rodapé-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</php>