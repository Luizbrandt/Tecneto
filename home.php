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
      
      /*
      $(document).ready(function() 
      {
          $("#btncad").click(function() 
          {
             $('php, body').animate(
             {
                scrollTop: $("#cadastro").offset().top
             }, 2000);
          });
      });
      */
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
            <li class="onde-estou"><a href="home.php">Home</a></li>
            <li><a href="empresa.php">Empresa</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="cadastro.php">Cadastre-se</a></li>
            <li><a href="login.php">Login</a></li>
            
            <!-- <li class="dropdown">
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
          <a href="empresa.php" class="btn btn-custom btn-lg">Quem Somos</a>
          <a href="cadastro.php" class="btn btn-custom btn-lg">Cadastre-se</a>
        </div>
      </div>

      <br><br><br>

          <div class="row servicos">
            <div class="col-md-3 col-lg-3">
              <img src="img/android.png" class="img-responsive conteudo-centralizado-right">
            </div>

            <div class="col-md-9 col-lg-9">
              <p class="text-justify textocentralizado">
                Está com dificuldade de interagir com smartphones, tablets e outros dispositivos eletrônicos? Seu neto pode te ajudar a desmistificar os segredos desses aparelhos um tanto quanto estranhos!
              </p>
            </div> 
          </div><!--ROW-->

          <div class="row servicos">
            <div class="col-md-9 col-lg-9">
              <p class="text-justify textocentralizado">
                Quer dividir aqueles momentos especiais com os amigos, familiares e conhecidos nas redes sociais, mas não entende essa dinâmica de troco likes ou sigo de volta? Não tem problema! Seu neto pode, e vai te ensinar como aumentar os seguidores e usar todos os filtros possíveis, para sua foto ficar incrível.
              </p>
            </div>
            <div class="col-md-3 col-lg-3">
              <img src="img/instagram.png" class="img-responsive conteudo-centralizado-left">
            </div>
          </div><!--ROW-->

          <div class="row servicos">
            <div class="col-md-3 col-lg-3">
              <img src="img/whats.png" class="img-responsive conteudo-centralizado-right">
            </div>

            <div class="col-md-9 col-lg-9">
              <p class="text-justify textocentralizado">
                Já não aguenta mais estar por fora dos "vídeos do zap", ou queria participar da interação nos grupos, ver a fofoca nos grupos de família? Seu neto pode te ensinar a usar a ferramenta, mandar áudios, fotos, e conseguir manter aquele papo legal com quem te faz bem.
              </p>
            </div> 
          </div><!--ROW-->

          <div class="row servicos">
            <div class="col-md-9 col-lg-9">
              <p class="text-justify textocentralizado">
                Talvez você não saiba, mas tem como ouvir aquele álbum favorito, acompanhar os lançamentos dos seus artistas preferidos, relembrar momentos com a trilha sonora de cada época, e criar playlists para cada momento do seu dia. Seu neto sabe disso também, e pode te ajudar estar por dentro das paradas musicais.
              </p>
            </div>
            <div class="col-md-3 col-lg-3">
              <img src="img/spotify.png" class="img-responsive conteudo-centralizado-left">
            </div>
          </div><!--ROW-->

          <div class="row servicos">
            <div class="col-md-3 col-lg-3">
              <img src="img/netflix.png" class="img-responsive conteudo-centralizado-right">
            </div>

            <div class="col-md-9 col-lg-9">
              <p class="text-justify textocentralizado">
                Quer acompanhar séries pra comentar na roda de amigos ou na mesa de almoço do domingo, assistir os filmes do oscar para não fazer igual e Glória Pires e ser capaz de opinar? Existem serviços de streaming e <i>on demand</i> que te possibilitam isso. Parece difícil? Nosso Tecneto sabe exatamente como facilitar.
              </p>
            </div> 
          </div><!--ROW-->

          <div class="row servicos">
            <div class="col-md-9 col-lg-9">
              <p class="text-justify textocentralizado">
                Se não entendeu nada acima e só consegue pensar que computadores, celulares, tablets e qualquer outro aparelho eletrônico que têm acesso à internet parece de outro mundo: fica tranquilo(a)! Seu neto entende de todos eles, e pode te ajudar inclusive a escolher seu favorito, qual te atende melhor. Seja pra trabalho, diversão, ou aprendizado, liga pra gente! O seu Tecneto pode te ajudar! :) 
              </p>
            </div>
            <div class="col-md-3 col-lg-3">
              <img src="img/devices.png" class="img-responsive conteudo-centralizado-left" >
            </div>
          </div><!--ROW-->


          </div>
        </div>
      </div>
    </div>

    <br><br><br><br><br>

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