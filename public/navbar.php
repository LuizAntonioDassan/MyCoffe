<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/public/documentos-css/style.css">
  <link rel="stylesheet" href="/public/documentos-css/index.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>

  <header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <?php if (!isset($_SESSION['idUsuario'])) { ?>
          <a class="navbar-brand" href="/">
            MyCoffee
          </a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="" href="login">Login</a>
            </li>
          </ul>
          <?php } else { ?>
            <a class="navbar-brand" href="/produtos">
            MyCoffee
          </a>
        <?php } ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
            if (isset($_SESSION['idUsuario'])) {
              ?>
              <!--<li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Principal</a>
              </li>-->
              <li class="nav-item">
                <a class="nav-link" href="produtos">Produtos</a>
              </li>            
              <li class="nav-item">
                <a class="nav-link" href="carrinho">Carrinho</a>
              </li> 
                <?php
                if (isset($_SESSION['idcargo']) && $_SESSION['idcargo'] == 1) {
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="perfilFuncionario">Minha Conta</a>
                  </li>
                <?php }else{ ?>
                  <li class="nav-item">
                    <a class="nav-link" href="conta">Minha conta</a>
                  </li>
                <?php }?>
            <?php } ?>

            <?php
            if (!isset($_SESSION['idUsuario'])) {
              ?>
            <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="" href="logout">Logout</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>