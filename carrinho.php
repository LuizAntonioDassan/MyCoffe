<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../documentos-css/carrinho.css">
  <link rel="stylesheet" href="../documentos-css/style.css">
</head>

<body>

  <?php include "../PHP-includes/header.php" ?>

  <main class="container my-5" style="max-width: 800px; margin: auto;">

    <!-- Lista de produtos -->
    <?php include "../PHP-includes/itemCarrinho.php"?>
    <!-- Fim da Lista de Produtos -->

    <!-- Resumo do Pedido -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Resumo do Pedido</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Subtotal <span>R$</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Frete <span>R$</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Descontos <span>- R$</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong>Total</strong> <strong>R$</strong>
          </li>
        </ul>
      </div>
    </div>
    <!-- Fim do Resumo do Pedido -->

    <!-- Botões de Ação -->
    <div class="d-flex justify-content-between">
      <a href="#"><button class="btn botao-vermelho">Cancelar Compra</button></a>
      <a href="#"><button class="btn mx-1 botao-azul">Continuar comprando</button></a>
      <a href="#"><button class="btn botao-verde">Confirmar Pagamento</button></a>
    </div>
    <!-- Fim dos Botões de Ação -->
  </main>

  <?php include "../PHP-includes/footer.php" ?>

</body>

</html>