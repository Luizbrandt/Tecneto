<!DOCTYPE php>
<php lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tecneto - Index</title>
    <link rel="icon" href="img/icone.png">
    
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <!-- jQuery -->
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
      });
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a href="home.php" class="navbar-brand"><img src="img/logopc.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home.php">Home</a></li>
            <li><a href="empresa.php">Empresa</a></li>
            <li><a href="clientes.php">Clientes</a></li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <br><br><br>
        <div>
          <img src="img/atebreve.png" class="img-responsive centralizacao">
        </div>
      </div>
    </div>

          <!-- Rodapé -->
          <footer>
            <div class="container">
              <div class="col-md-6 col-lg-6 col-6 col-sm-6 texto-rodape">
                Todos os Direitos Reservados &#174
              </div>

              <div class="col-md-2 col-lg-2 col-2 col-sm-2">
                <!--Facebook-->
                <img src="img/fbicon.png" class="img-responsive centralizacaoicones">
              </div>

              <div class="col-md-2 col-lg-2 col-2 col-sm-2">
                <!--Instagram-->
                <img src="img/instaicon.png" class="img-responsive centralizacaoicones">
              </div>

              <div class="col-md-2 col-lg-2 col-2 col-sm-2">
                <!--Twitter-->
                <img src="img/twiticon.png" class="img-responsive centralizacaoicones">
              </div>
            </div>
          </footer>
          <!-- Rodapé -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>

</php>