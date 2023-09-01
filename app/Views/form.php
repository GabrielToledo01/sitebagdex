<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Dados</title>
  <link rel="stylesheet" href="<?= base_url('css/StyleEdit.css') ?>">
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
            <a class="nav-link" href="<?= base_url('index.php/homelogin/') ?>"><i class="fa fa-fw fa-home"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://play.google.com/store/apps/details?id=br.com.bagdex.bagdex" onclick="return confirm('Observação: O aplicativo atual, tem como finalidade apresentar detalhadamente para os jogadores todas as informações sobre todos os bágmons que serão encontrados no jogo. NÂO É O JOGO!');">
              <i class="fa fa-fw fa-download"></i>
              Baixar
            </a>
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

  <div class="container" style="margin-top: 100px;">
    <h1>Avalie Nosso Jogo</h1>
    

    <form action="<?= base_url('homelogin/storeForm') ?>" method="POST">

      <?php echo csrf_field(); ?>

    <div class="aviso" id="aviso" style="display: <?php echo !empty($msg) ? 'block' : 'none'; ?>;">
      <h4><?php echo $msg ?? ''; ?></h4>
    </div>

    <div class="aviso_erro" id="aviso-erro" style="display: <?php echo !empty($msg_erro) ? 'block' : 'none'; ?>;">
      <h4><?php echo $msg_erro ?? ''; ?></h4>
    </div>

    <script>
      <?php if (isset($msg) && $msg !== '') : ?>
        document.getElementById('aviso').style.display = 'block';

        // Definir o tempo de exibição em milissegundos (por exemplo, 5000 = 5 segundos)
        var tempoExibicao = 4000;

        // Função para ocultar o aviso após o tempo definido
        setTimeout(function() {
          document.getElementById('aviso').style.display = 'none';
        }, tempoExibicao);
      <?php endif; ?>

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

    <div class="mb-3" style="margin-top: 20px;">
      <label for="name" class="form-label">Nome Completo</label>
      <input type="text" name="nome" class="form-control" id="name" placeholder="Digite seu nome completo" required>
    </div>
    <div class="mb-3">
      <label for="rating" class="form-label">Avaliação</label>
      <select class="form-select" id="rating" name="avaliacao" required>
        <option selected disabled>Selecione uma opção</option>
        <option value="1">1 Estrela</option>
        <option value="2">2 Estrelas</option>
        <option value="3">3 Estrelas</option>
        <option value="4">4 Estrelas</option>
        <option value="5">5 Estrelas</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="comments" class="form-label">Comentários</label>
      <textarea class="form-control" id="comments" rows="3" name="comentario" placeholder="Digite seus comentários" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <?php echo form_close(); ?>
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