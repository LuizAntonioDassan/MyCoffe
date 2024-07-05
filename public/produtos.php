<?php require_once ("controller/isLogged.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="/public/documentos-css/produtos.css">
  <link rel="stylesheet" href="/public/documentos-css/lista.css">
  <link rel="stylesheet" href="/public/documentos-css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="public/js/adicionarCarrinho.js"></script>
</head>

<body>
  <?php include ('public/navbar.php');
  ?>
  <main>

    <!-- FILTRAR E BARRA DE PESQUISA -->
    <section class="container py-2">
      <div class="row">
        <div class="col-md-6">
          <div class="dropdown py-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Ordenar por
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Nome</a></li>
              <li><a class="dropdown-item" href="#">Menor valor</a></li>
              <li><a class="dropdown-item" href="#">Maior valor</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 py-2">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </section>

    <!-- LISTA DE CARDS DOS PRODUTOS -->
    <section class="container mt-2 mb-4">
      <div class="row">
        <?php
        require_once ('./model/dao/produtoDAO.php');
        require_once ('./model/conn/Database.php');
        $database = new Database();
        $produtoDB = new ProdutoDAO($database->getConnection());
        $listProdutos = $produtoDB->readAll();

        if ($listProdutos) {
          foreach ($listProdutos as $produto) {
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="card card-img-container">
                <?php if ($produto->getImagem()): ?>
                  <img src="data:image/jpeg;base64,<?php echo base64_encode(pg_unescape_bytea($produto->getImagem())); ?>"
                    alt="Imagem do Produto" width="100" class="card-img-top">
                <?php endif ?>
                <div class="card-body">
                  <!--<img src="public/imagens/cafes/cafe-gourmet-cerrado-mineiro.png" class="card-img-top" alt="Imagem do Produto">-->
                  <h5 class="card-title"><?php echo $produto->getNome(); ?></h5>
                  <p class="card-text"><?php echo $produto->getDescricao(); ?></p>
                  <p class="card-text">Preço: R$ <?php echo $produto->getPreco(); ?></p>
                  <p class="card-text">Descrição: <?php echo $produto->getDescricao(); ?></p>
                  <div>
                    <input type="number" name="quantidade" id="quantidade_<?php echo $produto->getCodigobarras(); ?>"
                      class="form-control text-center" min="1" max="99" value="1">
                  </div>
                  <div class="d-flex justify-content-between mt-2">
                    <a href="#" class="btn btn-primary btn-comprar" data-codigo="<?php echo $produto->getCodigobarras(); ?>"
                      data-preco="<?php echo $produto->getPreco(); ?>">
                      Comprar</a>
                  </div>
                  <?php
                  if (isset($_SESSION['produto_adicionado']) && $_SESSION['produto_adicionado'] == true) {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert' id='produto-adicionado'>
            Produto adicionado ao carrinho com sucesso!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
                    unset($_SESSION['produto_adicionado']); // Limpar a variável de sessão
                  }
                  ?>

                </div>
              </div>
            </div>
          <?php }
        }
        ?>

      </div>
    </section>

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