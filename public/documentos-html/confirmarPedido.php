<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmar pedido</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../documentos-css/style.css">
  <link rel="stylesheet" href="../documentos-css/carrinho.css">
</head>

<body>
  <header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg custom-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MyCoffee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Carrinho</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Minha conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Entrar/Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="container my-5" style="max-width: 800px; margin: auto;">

    <div class="card mb-4 p-3">
        <h2 class="text-center">Informações de pagamento e entrega</h2>

        <h3 class="mt-3">Valor total:</h3>
        <span>R$ <?php echo session_id();?></span>

        <h3 class="mt-3">Endereço de entrega:</h3>
        <span>Endereço</span>

        <h3 class="mt-3">Selecione o método de pagamento</h3>
        <form>
          <input type="radio" id="pix" name="payment_method" value="pix">
          <label for="pix">PIX</label><br>
          <input type="radio" id="credit_card" name="payment_method" value="credit_card">
          <label for="credit_card">Cartão de Crédito</label><br>
          <input type="radio" id="debit_card" name="payment_method" value="debit_card">
          <label for="debit_card">Cartão de Débito</label><br>
          <input type="radio" id="boleto" name="payment_method" value="boleto">
          <label for="boleto">Boleto bancário</label><br>
        </form>
    </div>
    <form action="finalizaCompra" method="post">
        <input type="hidden" name="identificador" value="<?php echo session_id(); ?>">
        <button type="submit" class="btn btn-success">Confirmar Pagamento</button>
      </form>

  </main>

  <footer class="text-center background-footer">

    <section class="container p-4 pb-0">
      <a href="#!" class="btn"><i class="bi bi-whatsapp"></i></a>
      <a href="#!" class="btn"><i class="bi bi-instagram"></i></a>
      <a href="#!" class="btn"><i class="bi bi-twitter"></i></a>
    </section>

    <div class="p-3">
      UFMS 2024 <i class="bi bi-c-circle"></i> Construção de Software
    </div>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>