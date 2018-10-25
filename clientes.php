<!DOCTYPE php>
<php lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tecneto - Clientes!</title>
    <link rel="icon" href="img/icone.png">
    
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="jquery-3.3.1.js"></script>
    <script type="text/javascript">
      
    </script>
    

    <!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/php5shiv/3.7.2/php5shiv.min.js"></script>
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
            <li class="onde-estou"><a href="clientes.php">Clientes</a></li>
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

      <div class="row servicos">
            <div class="col-md-3 col-lg-3">
              <img src="img/idoso.png" class="img-responsive conteudo-centralizado-right">
            </div>

            <div class="col-md-9 col-lg-9">
              <p class="text-justify textocentralizado">
                Na última década, a tecnologia invadiu de forma rápida e intensa todos os aspectos da vida humana. Socialização, prestação de serviços, compras - não tem sequer um campo da vida cotidiana que não foi afetado pela presença dos computadores, smartphones, tablets e principalmente, da internet. Este processo tem se intensificado cada vez mais, o que dificulta a vida daqueles que têm dificuldade na interação com tecnologia em geral. Tais dificuldades assolam os mais variados grupos - idosos, adultos têm destaque nesta parcela.
              </p>
            </div> 
          </div><!--ROW-->

          <div class="row servicos">
            <div class="col-md-9 col-lg-9">
              <p class="text-justify textocentralizado">
                Mesmo enquanto jovens e adolescentes, grande parte da população nas faixas etárias mais baixas sofrem com o efeito da invasão tecnológica, e também ficam à margem do processo. Se a dificuldade não advém da interação com a tecnologia, a modificação intensa e renovação quase que diária tomam o foco dos problemas.
              </p>
            </div>
            <div class="col-md-3 col-lg-3">
              <img src="img/jovem.png" class="img-responsive conteudo-centralizado-left">
            </div>
          </div><!--ROW-->

          <div class="row servicos">
            <div class="col-md-3 col-lg-3">
              <img src="img/empresas.png" class="img-responsive conteudo-centralizado-right">
            </div>

            <div class="col-md-9 col-lg-9">
              <p class="text-justify textocentralizado">
                Em se tratando do âmbito profissinal, empresas têm encontrado dificuldade em manter o mesmo nível de conhecimento tecnológico entre seus associados: seja pela mudança de versão de programas, de dispositivos, ou pela nessecidade crescente de implementar tecnologia nos processos de trabalho mais simples. Como observado, nossa empresa tem foco abrangente em sua área de atuação: Qualquer um que possua dificuldades com relação às novas tecnologias, ou que precise aprimorar seus conhecimentos no assunto, pode contrarar um de nossos Tecnetos!
              </p>
            </div> 
          </div><!--ROW-->
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