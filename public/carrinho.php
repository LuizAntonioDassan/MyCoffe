<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="carrinho.css">

<body>
<?php include('public/navbar.php'); ?>
  
  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="text-white p-4">
            <h2 class="titulo-carrinho">Carrinho</h2>
            <ul class="list-group">

              <li class="list-group-item">
                <div class="row">
                  <div class="col-sm-2">
                    <img src="imagens/produtos/cafe_premium.png" class="produto-imagem">
                  </div>
                  <div class="col-sm-10 d-flex align-items-center">
                    <div class="mx-3">
                      <span>Nome do produto nome do produto</span>
                    </div>
                    <div class="mx-3">
                      Quantidade
                      <input type="number" value="1" min="1" step="1" class="form-control quantidade-input">
                    </div>
                    <div class="mx-3">
                      <span>Valor: R$ 00,00</span>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link excluir-produto"><i class="bi bi-trash"></i></button>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item">
                <div class="row">
                  <div class="col-sm-2">
                    <img src="imagens/produtos/cafe_premium.png" class="produto-imagem">
                  </div>
                  <div class="col-sm-10 d-flex align-items-center">
                    <div class="mx-3">
                      <span>Nome do produto nome do produto</span>
                    </div>
                    <div class="mx-3">
                      Quantidade
                      <input type="number" value="1" min="1" step="1" class="form-control quantidade-input">
                    </div>
                    <div class="mx-3">
                      <span>Valor: R$ 00,00</span>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link excluir-produto"><i class="bi bi-trash"></i></button>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item">
                <div class="row">
                  <div class="col-sm-2">
                    <img src="imagens/produtos/cafe_premium.png" class="produto-imagem">
                  </div>
                  <div class="col-sm-10 d-flex align-items-center">
                    <div class="mx-3">
                      <span>Nome do produto nome do produto</span>
                    </div>
                    <div class="mx-3">
                      Quantidade
                      <input type="number" value="1" min="1" step="1" class="form-control quantidade-input">
                    </div>
                    <div class="mx-3">
                      <span>Valor: R$ 00,00</span>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link excluir-produto"><i class="bi bi-trash"></i></button>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item">
                <div class="row">
                  <div class="col-sm-2">
                    <img src="imagens/produtos/cafe_premium.png" class="produto-imagem">
                  </div>
                  <div class="col-sm-10 d-flex align-items-center">
                    <div class="mx-3">
                      <span>Nome do produto nome do produto</span>
                    </div>
                    <div class="mx-3">
                      Quantidade
                      <input type="number" value="1" min="1" step="1" class="form-control quantidade-input">
                    </div>
                    <div class="mx-3">
                      <span>Valor: R$ 00,00</span>
                    </div>
                    <div>
                      <button type="button" class="btn btn-link excluir-produto"><i class="bi bi-trash"></i></button>
                    </div>
                  </div>
                </div>
              </li>

            </ul>

            <div class="preco-final-carrinho">
              <span>Preço: R$ 000,00</span><br>
              <span>Frete: R$ 00,00</span><br>
              <span>Desconto: - R$ 000,00</span><br>
              <span><strong>Total: R$ 000,00</strong></span>
            </div>

          </div>
        </div>
      </div>
      <div class="row px-4">
        <div class="col-sm">
          <button type="button" class="btn btn-danger mr-2">Limpar carrinho</button>
          <button type="button" class="btn btn-success mx-2">Finalizar Compra</button>
        </div>
      </div>
    </div>
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