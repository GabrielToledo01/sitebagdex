<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Dados</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/StyleEdit.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <nav id="navbar" class="navbar navbar-expand-sm bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img class="img-logo" src="<?= base_url('img/logo_bagdex_01-1024x656.png') ?>" width="100" height="50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('index.php/homelogin/') ?>"><i class="fa fa-fw fa-home"></i>Home</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <span class="nav-link dark-mode-button" onclick="toggleDarkMode()"><i class="fa fa-adjust"></i></span>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container" style="margin-top: 100px;">
    <h1>Editar Dados</h1>

    <form action="<?= base_url('homelogin/storeEdit') ?>" method="POST">

        <?php echo csrf_field(); ?>

    <div class="aviso" id="aviso-save" style="display:none;">
      <h4><?php echo $msg ?? ''; ?></h4>
    </div>

    <div class="aviso_erro" id="aviso-erro" style="display:none;">
      <h4><?php echo $msg_erro ?? ''; ?></h4>
    </div>

    <script>
      <?php if (isset($msg) && $msg !== '') : ?>
        document.getElementById('aviso-save').style.display = 'block';

        // Definir o tempo de exibição em milissegundos (por exemplo, 4000 = 4 segundos)
        var tempoExibicao = 4000;

        // Função para ocultar o aviso após o tempo definido
        setTimeout(function() {
          document.getElementById('aviso-save').style.display = 'none';
        }, tempoExibicao);
      <?php endif; ?>
    </script>

    <script>
      <?php if (isset($msg_erro) && $msg_erro !== '') : ?>
        document.getElementById('aviso-erro').style.display = 'block';

        // Definir o tempo de exibição em milissegundos (por exemplo, 4000 = 4 segundos)
        var tempoExibicao = 4000;

        // Função para ocultar o aviso após o tempo definido
        setTimeout(function() {
          document.getElementById('aviso-erro').style.display = 'none';
        }, tempoExibicao);
      <?php endif; ?>
    </script>

    <div class="mb-3" style="margin-top: 20px;">
      <label for="nome" class="form-label">Nome de Usuario</label>
      <input type="text" class="form-control" id="nome" name="usuario" value="<?php echo $usuarios['usuario'] ?? '' ?>">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuarios['email'] ?? '' ?>">
    </div>

    <div class="mb-3">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $usuarios['phone'] ?? '' ?>">
    </div>

    <div class="mb-3">
      <label for="telefone" class="form-label">Documento:</label>
      <input type="tel" class="form-control" id="doc" name="doc" value="<?php echo $usuarios['doc'] ?? '' ?>">
    </div>

    <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="********************">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>

    <input type="hidden" name="id" value="<?php echo isset($usuarios['id']) ? $usuarios['id'] : '' ?>">
    </form>
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