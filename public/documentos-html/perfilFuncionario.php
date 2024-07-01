<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil do funcionário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="public/documentos-css/style.css">
  <link rel="stylesheet" href="public/documentos-css/conta.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/public/js/perfilFuncionario.js"></script>
</head>

<body>

  <?php include ('public/navbar.php'); ?>



  <main class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2>Perfil de Funcionário</h2>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <h5>Nome:</h5>
          <p><?php echo $_SESSION['nome']; ?></p>
        </div>
        <div class="mb-3">
          <h5>E-mail:</h5>
          <p><?php echo $_SESSION['email']; ?></p>
        </div>
        <div class="mb-3">
          <h5>Permissão:</h5>
          <p><?php echo $_SESSION['nomecargo'];?></p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2">
          <?php if (isset($_SESSION['idcargo']) && $_SESSION['idcargo'] == 1) { ?>
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg w-100" id="listaFuncionario">Lista de
                funcionários</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg w-100" id="listaCliente">Lista de clientes</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg w-100" id="listaProdutos">Lista de produtos</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg w-100" id="listaCategorias">Lista de categorias</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-secondary btn-lg w-100" id="cadastraFuncionario">Registrar
                funcionário</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-secondary btn-lg w-100" id="cadastraCliente">Registrar cliente</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-secondary btn-lg w-100" id="cadastraProduto">Registrar produto</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-secondary btn-lg w-100" id="cadastraCategoria">Registrar
                categoria</button>
            </div>
          </div>
        <?php } ?>
        <?php if (isset($_SESSION['idcargo']) && $_SESSION['idcargo'] == 2) { ?>
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg w-100" id="listaFuncionario">Lista de
                funcionários</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg w-100" id="listaCliente">Lista de clientes</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg w-100" id="listaProdutos">Lista de produtos</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg w-100" id="listaCategorias">Lista de categorias</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-secondary btn-lg w-100" id="cadastraFuncionario">Registrar
                funcionário</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-secondary btn-lg w-100" id="cadastraCliente">Registrar cliente</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-secondary btn-lg w-100" id="cadastraProduto">Registrar produto</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-secondary btn-lg w-100" id="cadastraCategoria">Registrar
                categoria</button>
            </div>
          </div>
        <?php } ?>
        <?php if (isset($_SESSION['idcargo']) && $_SESSION['idcargo'] == 3) { ?>
        <div class="col">
              <button type="button" class="btn btn-primary btn-lg w-100" id="listaProdutos">Lista de produtos</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg w-100" id="listaCategorias">Lista de categorias</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-secondary btn-lg w-100" id="cadastraProduto">Registrar produto</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-secondary btn-lg w-100" id="cadastraCategoria">Registrar
                categoria</button>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </main>
  <?php require_once ('public/footer.php'); ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>