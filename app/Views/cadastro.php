<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Cadastro</title>
  <link rel="stylesheet" href="<?= base_url('css/StyleCadastro.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <a class="nav-link" href="<?= base_url('/') ?>"><i class="fa fa-fw fa-home"></i>Home</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto" style="margin-right: 20px;">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('index.php/home/login') ?>"><i class="fa fa-fw fa-user"></i><strong>Login</strong></a>
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


  <div id="container" class="container" style="margin-top: 80px;">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div id="darkform" class="card-body p-4 p-sm-5">
            <h4 class="title card-title text-center mb-5 fw-light fs-2"><strong> Crie sua conta </strong></h4>

            
            <form action="<?= base_url('index.php/home/store') ?>" method="POST">

              <?php echo csrf_field(); ?>

            <div class="aviso" id="aviso-cadastro" style="display:none;">
              <h4><?php echo $msg ?? ''; ?></h4>
            </div>

            <div class="aviso_erro" id="aviso-erro" style="display:none;">
              <h4><?php echo $msg_erro ?? ''; ?></h4>
            </div>

            <script>
              <?php if (isset($msg) && $msg !== '') : ?>
                document.getElementById('aviso-cadastro').style.display = 'block';

                // Definir o tempo de exibição em milissegundos (por exemplo, 5000 = 5 segundos)
                var tempoExibicao = 4000;

                // Função para ocultar o aviso após o tempo definido
                setTimeout(function() {
                  document.getElementById('aviso-cadastro').style.display = 'none';
                }, tempoExibicao);
              <?php endif; ?>
            </script>

            <script>
              <?php if (isset($msg_erro) && $msg_erro !== '') : ?>
                document.getElementById('aviso-erro').style.display = 'block';

                // Definir o tempo de exibição em milissegundos (por exemplo, 5000 = 5 segundos)
                var tempoExibicao = 4000;

                // Função para ocultar o aviso após o tempo definido
                setTimeout(function() {
                  document.getElementById('aviso-erro').style.display = 'none';
                }, tempoExibicao);
              <?php endif; ?>
            </script>

            <div class="form-floating mb-3">
              <input type="text" name="usuario" class="form-control" id="floatingInput" placeholder="Nome" required>
              <label for="floatingInput">Nome de Usuario</label>
            </div>

            <div class="form-floating mb-3">
              <input type="e-mail" name="email" class="form-control" id="floatingInput" placeholder="Email" required>
              <label for="floatingInput">E-mail</label>
            </div>
            
            <div class="form-floating mb-3">
              <input type="tel" name="phone" class="form-control" id="floatingInput" placeholder="Telefone" required>
              <label for="floatingInput">Telefone (somente números)</label>
            </div>

            <div class="form-floating mb-3">
              <input type="int" name="doc" class="form-control" id="floatingInput" placeholder="Documento" required>
              <label for="floatingInput">Informe seu CPF (somente números)</label>
            </div>

            <div class="form-floating mb-3">
              <input type="Password" name="senha" class="form-control" id="floatingPassword" placeholder="Senha" required>
              <label for="floatingPassword">Senha</label>
            </div>

            <div class="d-grid">
              <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Cadastrar</button>
            </div>

            <?php echo form_close(); ?>

          </div>
        </div>
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