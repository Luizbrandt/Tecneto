<!DOCTYPE php>
<php lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tecneto - Tecnologia a um neto de você!</title>
    <link rel="icon" href="img/icone.png">
    
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="jquery-3.3.1.js"></script>
    <script type="text/javascript">
      
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
            <li class="onde-estou"><a href="empresa.php">Empresa</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="cadastro.php">Cadastre-se</a></li>
            <li><a href="login.php">Login</a></li>
            
            <!--
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Minha Conta <span class="caret"></span>
              </a>
              
              <ul class="dropdown-menu">
                <li><a href="#">Configurações</a></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
            -->

          </ul>
        </div>

      </div>
    </nav>
    
    <br>
    <br>
    <br>

    <div class="container">

      <div class="page-header cabecalho col-md-12 col-lg-12">
          <img src="img/logocabec.png" class="img-responsive cabecalho">
      </div>

      <div class="capa">
        <div class="texto-capa">
          <div class="col-md-12 col-lg-12">
            <img src="img/textocapa.png" class="img-responsive centralizacao">
          </div>
          <br>
        </div>
      </div>

      <div>
        <img src="img/quemsomos.png" class="img-responsive centralizacao">
      </div>

      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <p class="text-justify quemsomos">
                Nosso time de Tecnetos pode ensinar a qualquer pessoa os mistérios da tecnologia. Independente da idade ou da natureza da dúvida nós podemos te ajudar: jovens, idosos, dificuldades com plataformas, redes sociais, mecanismos de busca, aparelhos, compras, qualquer coisa. Está com alguma dúvida ou dificuldade? Envolve tecnologia? Nós podemos te ajudar.
              </p>
        </div>
      </div>

    </div>

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
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</php>