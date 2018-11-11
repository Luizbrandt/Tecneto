<!DOCTYPE php>
<php lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tecneto - Tecnologia a um neto de você!</title>
    <link rel="icon" href="img/icone.png">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <script src="jquery-3.3.1.js"></script>
    <script type="text/javascript"></script>
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
                <li class="onde-estou"><a href="empresa.php">Empresa</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="cadastro.php">Cadastre-se</a></li>
                <li><a href="login.php">Login</a></li>
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