<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Login</title>
  <link rel="stylesheet" href="<?= base_url('css/StyleLogin.css') ?>">
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


  <div  class="container" style="margin-top: 80px;">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div id="darkform" class="card-body p-4 p-sm-5">
            <h4 class="title card-title text-center mb-5 fw-light fs-2"><strong> Faça o login </strong></h4>

            <form method="post">

              <?php echo csrf_field(); ?>

              <div class="aviso_sucess" id="aviso-redefinir" style="display:none;">
                <h4 class="sucess"><?php echo $msg_sucess ?? ''; ?></h4>
              </div>

              <div class="aviso" id="aviso-login" style="display:none;">
                <h4 class="error"><?php echo $msg ?? ''; ?></h4>
              </div>

              <script>
                <?php if (isset($msg) && $msg !== '') : ?>
                  document.getElementById('aviso-login').style.display = 'block';

                  // Definir o tempo de exibição em milissegundos (por exemplo, 5000 = 5 segundos)
                  var tempoExibicao = 4000;

                  // Função para ocultar o aviso após o tempo definido
                  setTimeout(function() {
                    document.getElementById('aviso-login').style.display = 'none';
                  }, tempoExibicao);
                <?php endif; ?>
              </script>

              <script>
                <?php if (isset($msg_sucess) && $msg_sucess !== '') : ?>
                  document.getElementById('aviso-redefinir').style.display = 'block';

                  // Definir o tempo de exibição em milissegundos (por exemplo, 5000 = 5 segundos)
                  var tempoExibicao = 4000;

                  // Função para ocultar o aviso após o tempo definido
                  setTimeout(function() {
                    document.getElementById('aviso-redefinir').style.display = 'none';
                  }, tempoExibicao);
                <?php endif; ?>
              </script>

              <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name" required>
                <label for="floatingInput">E-mail</label>
              </div>

              <div class="form-floating mb-3">
                <input type="Password" name="senha" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Senha</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="title form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Entrar</button>
              </div>

              <hr>
              <div class="d-grid">
                <a href="<?= base_url('index.php/reset-password') ?>" class="btn btn-danger btn-login text-uppercase fw-bold">Esqueceu a senha ?</a>
              </div>
              <br>
            </form>
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