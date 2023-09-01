<!DOCTYPE html>

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/StyleHome.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav id="navbar" class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img class="img-logo" src="<?= base_url('img/logo_bagdex_01-1024x656.png') ?>" width="100" height="50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('/index.php') ?>"><i class="fa fa-fw fa-home"></i>Home</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto" style="margin-right: 20px;">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('index.php/home/login') ?>"><i class="fa fa-fw fa-user"></i><strong>Login</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('index.php/home/create') ?>"><strong>Criar conta</strong></a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <span class="nav-link dark-mode-button" onclick="toggleDarkMode()"><i class="fa fa-adjust"></i></span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="pt-5" style="margin-top: 50px;">
    <div class="container">
      <div class="row">
        <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
          <h3 class="display-4"><b>O aplicativo da Bágdex chegou!</b></h3>
          <h3 class="text-justify">Conheça todos os Bágmon e monte seu time em um aplicativo interativo totalmente narrado. Aprenda sobre a fauna, flora, folclore e cultura do nosso Brasil de uma forma única!</h3><a href="#" alt="Baixar" class="btn btn-primary"><i class="fa fa-download fa-fw"></i><b><b>&nbsp;Baixar</b></b></a>
        </div>
        <div class="col-lg-6"> <img class="img-fluid d-block" src="<?= base_url('img/artes_site_01-2-1536x1412.png') ?>"> </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6"> <img class="img-fluid d-block mx-auto" src="<?= base_url('img/55665.jpg') ?>" width="440"> </div>
        <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
          <h3 class="display-4 text-left"><b>A Jornada está prestes a começar!</b></h3>
          <h4 class="text-justify">A Bágdex é um projeto autoral que se iniciou em 2021, com o objetivo de enaltecer a cultura e a diversidade do nosso país através de personagens e histórias. Um universo que está sendo criado e expandido cada vez mais para mostrar tudo o que temos de incrível no Brasil. Seja criança, jovem ou adulto, a Bágdex foi pensada e criada para gerar conexão com o povo brasileiro de uma forma lúdica e diferente. Esse aplicativo é o primeiro passo de uma grande jornada. Venha conhecer cada um dos Bágmon e se aventurar conosco!</h4>
        </div>
      </div>
    </div>
  </div>
  <div id="darkform" class="text-center pb-3 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="display-4"><b>Já escolheu seu inicial?</b></h3>
          <h3>Toda jornada precisa de um companheiro inicial! </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-6 p-4"> <img class="img-fluid d-block" width="1500" alt="Imagem_Voara" src="<?= base_url('img/img_inicial_site_01-1.png') ?>">
          <h4 class="mt-3 mb-0 text-left"><b class="">Voara</b>&nbsp;<br>O inicial de planta da Bágdex.</h4>
        </div>
        <div class="col-md-3 col-6 p-4"> <img class="img-fluid d-block" width="1500" alt="Imagem_Pequemico" src="<?= base_url('img/img_inicial_site_02-1.png') ?>">
          <h4 class="mt-3 mb-0 text-left"><b>Pequemico<br></b>O inicial de fogo da Bágdex.</h4>
        </div>
        <div class="col-md-3 col-6 p-4"> <img class="img-fluid d-block" width="1500" alt="Imagem_Capi" src="<?= base_url('img/img_inicial_site_03-1.png') ?>">
          <h4 class="mt-3 mb-0 text-left"><b>Capi</b><br>O inicial de água da Bágdex.</h4>
        </div>
        <div class="col-md-3 col-6 p-4"> <img class="img-fluid d-block" width="1500" alt="Imagem_Tamanduí" src="<?= base_url('img/img_inicial_site_04-1.png') ?>">
          <h4 class="mt-3 mb-0 text-left"><b>Tamanduí<br></b>O inicial de terra da Bágdex.</h4>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-5 mb-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4 text-center"><b>Faça parte da comunidade Bágdex</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center">Em nosso Discord você fica por dentro de&nbsp;todas as novidades&nbsp;<br>do projeto, além de desafios e bate-papos exclusivos</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center"><a href="#" alt="Entrar no Discord" class="btn btn-secondary"><b><b>Entrar no Discord</b></b></a></div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
          <h3 class="display-4"><b>O Jogo da Bágdex vem aí!</b></h3>
          <h4>A nossa Jornada está apenas começando.&nbsp;<br><br>Em breve iniciaremos um financiamento coletivo para a produção do jogo “Bágdex – Jornada Brasil” em parceria com a Dumativa.&nbsp;<br><br>Fiquem ligados em todas as novidades e anúncios em nosso Discord.</h4>
        </div>
        <div class="col-lg-6"> <img class="img-fluid d-block" src="<?= base_url('img/banner_2.jpeg') ?>"></div>
      </div>
    </div>
  </div>

  <footer id="footer" class="py-3 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="p mt-2 mb-0">Bágdex © 2022 Todos os direitos reservados - contato@bagdex.com.br</p>
        </div>
      </div>
    </div>
  </footer>


<script src="<?= base_url('js/script.js') ?>"></script>

</body>

</html>