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
  <?php require_once('public/navbar.php');?>
  <main class="container my-5" style="max-width: 800px; margin: auto;">

    <div class="card mb-4 p-3">
        <h2 class="text-center">Informações de pagamento e entrega</h2>

        <h3 class="mt-3">Valor total:</h3>
        <span>R$ <?php if(isset($_SESSION['valorFinal'])){echo $_SESSION['valorFinal'];}?></span>

        <h3 class="mt-3">Endereço de entrega:</h3>
        <span>Endereço</span>
        <span>Rua: <?php echo $_SESSION['rua'];?></span>
        <span>Bairro: <?php echo $_SESSION['bairro'];?></span>
        <span>Numero: <?php echo $_SESSION['numero'];?></span>
        <span>CEP: <?php echo $_SESSION['cep'];?></span>

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
        <button type="submit" class="btn btn-success" id="btnFinalizar">Confirmar Pagamento</button>
      </form>

  </main>

  <?php require_once('public/footer.php');?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>