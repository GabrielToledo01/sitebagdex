<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/StyleHome.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <nav id="navbar" class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img class="img-logo" src="<?= base_url('img/logo_bagdex_01-1024x656.png') ?>" alt="Logo" width="100" height="50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('index.php/homelogin/') ?>"><i class="fa fa-fw fa-home"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://play.google.com/store/apps/details?id=br.com.bagdex.bagdex" 
              onclick="return confirm('Observação: O aplicativo atual, tem como finalidade apresentar detalhadamente para os jogadores todas as informações sobre todos os bágmons que serão encontrados no jogo. NÂO É O JOGO!');">
              <i class="fa fa-fw fa-download"></i>Baixar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('index.php/homelogin/form/') ?>"><i class="fa fa-fw fa-star"></i>Avaliar</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto" style="margin-right: 20px;">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              <i class="fa fa-fw fa-user"></i><strong><?php echo session('nomeUsuario'); ?></strong>
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url('index.php/homelogin/edit/' . $usuarios['id']) ?>">Editar perfil</a></li>
              <li><a class="dropdown-item" href="<?= base_url('index.php/logout/') ?>">Sair</a></li>
            </ul>
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

  <div class="pt-5" style="margin-top: 80px; margin-bottom: 30px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-7 mx-auto order-2 order-lg-1 pb-2"> <img class="img-fluid d-block mx-auto" alt="Imagem_Bagmons" src="<?= base_url('img/todos00.png') ?>"> </div>
      </div>
    </div>
  </div>
  <div id="darkform" class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="px-md-5 p-3 col-lg-6 d-flex flex-column align-items-start justify-content-center">
          <h3 class="display-4"><b>O mapa</b></h3>
          <h3>Baseado nas cinco regiões brasileiras, o continente de Brasilis será recheado de menções e referências as cidades do Brasil, prometendo ser totalmente explorável, tendo como principal objetivo de conscientização e apresentação da grandeza da nossa fauna, flora e cultura em geral.</h3>
        </div>
        <div class="col-lg-6"> <img class="img-fluid d-block pb-1" width="400" style="" alt="Imagem_LogoMapa" src="<?= base_url('img/01.jpg') ?>"> <img class="img-fluid d-block" width="400" alt="Imagem_Jogo" src="<?= base_url('img/mapa.jpg') ?>"> </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-4 d-flex justify-content-center flex-column">
          <h3 class="display-4"><b>Baixe o Aplicativo</b></h3>
          <h3>O aplicativo atual, tem como finalidade apresentar detalhadamente para os jogadores todas as informações sobre todos os bágmons que serão encontrados no jogo.</h3>
          <div class="row my-3">
            <div class="col-3 order-1 order-md-2 col-md-12"><a class="btn btn-primary" href="https://play.google.com/store/apps/details?id=br.com.bagdex.bagdex" 
              onclick="return confirm('Observação: O aplicativo atual, tem como finalidade apresentar detalhadamente para os jogadores todas as informações sobre todos os bágmons que serão encontrados no jogo. NÂO É O JOGO!');"><i class="fa fa-download fa-fw"></i><b>&nbsp;<b>Baixar</b></b></a></div>
          </div>
        </div>
        <div class="col-lg-5 col-8 mx-auto d-flex justify-content-center flex-column"> <img class="img-fluid d-block mx-auto" width="300" alt="Imagem_Aplicativo" src="<?= base_url('img/8454.png') ?>"> </div>
      </div>
    </div>
  </div>
  <footer id="footer" class="py-3 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-2 mb-0">Bágdex © 2022 Todos os direitos reservados - contato@bagdex.com.br</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?= base_url('js/script.js') ?>"></script>
</body>

</html>