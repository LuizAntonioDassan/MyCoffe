<?php
require_once ('./model/dao/carrinhoDAO.php');
require_once ('./model/dao/produtoDAO.php');
require_once ('./model/conn/Database.php');
$database = new Database();
$produtoDao = new ProdutoDAO($database->getConnection());

$carrinho_id = session_id();

$carrinhoDao = new CarrinhoDAO();
$listCarrinho = $carrinhoDao->readById($carrinho_id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="public/documentos-css/carrinho.css">
  <link rel="stylesheet" href="public/documentos-css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="public/js/carrinho.js"></script>

<body>

  <?php include ('public/navbar.php'); ?>

  <main class="container my-5" style="max-width: 800px; margin: auto;">
    <h1 class="mb-4">Carrinho de Compras</h1>

    <!-- Lista de Produtos -->
    <?php
    if ($listCarrinho) {
      $valorFinal = 0;
      foreach ($listCarrinho as $carrinho) {
        $produto = $produtoDao->readByCodigoBarras($carrinho->getCodigoProduto());
        $valorFinal += ($produto->preco) * $carrinho->getQuantidade();
        ?>
        <div class="list-group mb-4">
          <div class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <img src="/public/imagens/artesanais/doce-de-leite.jpg" alt="Produto" class="img-thumbnail"
                style="width: 100px; height: 100px; object-fit: cover;">
              <div class="ms-3">
                <h5 class="mb-1"><?php echo $produto->getNome(); ?></h5>
                <div>
                  <input type="number" class="form-control text-center" value="<?php echo $carrinho->getQuantidade(); ?>"
                    min="1" max="99">
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <span class="h5 mb-0 me-3">R$<?php echo $produto->getPreco(); ?></span>
              <button class="btn btn-outline-danger btn-sm">Excluir</button>
            </div>
          </div>
          <!-- Fim do Item do Produto -->
          <?php
      }
    }
    ?>
      <!-- Repita o bloco acima para cada produto -->
    </div>
    <!-- Fim da Lista de Produtos -->

    <!-- Resumo do Pedido -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Resumo do Pedido</h5>
        <ul class="list-group list-group-flush">
          <!--
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Subtotal <span>R$<?php if (isset($valorFinal)) {
              echo $valorFinal;
            } ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Frete <span>R$10,00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Descontos <span>-R$5,00</span>
          </li> -->
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong>Total</strong> <strong>R$<?php if (isset($valorFinal)) {
              $_SESSION['valorFinal'] = $valorFinal;
              echo $valorFinal;
            } ?></strong>
          </li>
        </ul>
      </div>
    </div>
    <!-- Fim do Resumo do Pedido -->
    <div class="alert alert-warning d-none" id="alertMensagem" role="alert"></div>

    <!-- Botões de Ação -->
    <div class="d-flex justify-content-between">
      <button class="btn btn-danger">Cancelar Compra</button>
      <button type="submit" class="btn btn-success" id="confirmar">Confirmar Pagamento</button>

    </div>
    <!-- Fim dos Botões de Ação -->

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