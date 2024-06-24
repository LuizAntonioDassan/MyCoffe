<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/style.css">
    <link rel="stylesheet" href="../documentos-css/lista.css">

<body>

<?php include('public/navbar.php'); ?>

    <main class="container">
        <!-- Seção de ordenação e busca -->
        <section class="container py-2 px-0">
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

        <!-- Lista de produtos -->
        <!-- Lista de produtos -->
        <section class="row">
        <?php 
        require_once('./model/dao/produtoDAO.php');
        require_once('./model/conn/Database.php');
        $database = new Database();
        $produtoDB = new ProdutoDAO($database->getConnection()); 
        $listProdutos = $produtoDB->readAll();

        if($listProdutos){
          foreach($listProdutos as $produto){

        ?>
            <!-- Card de exemplo de produto -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                <?php if($produto->getImagem()): ?>
              <!--<img src="public/imagens/cafes/cafe-gourmet-cerrado-mineiro.png" class="card-img-top" alt="Imagem do Produto"> -->
              <img src="data:image/jpeg;base64,<?php echo base64_encode(pg_unescape_bytea($produto->getImagem())); ?>" alt="Imagem do Produto" width="100">
            <?php endif ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produto->getNome(); ?></h5>
                        <p class="card-text">
                            <strong>Código de Barras: </strong><?php echo $produto->getCodigobarras(); ?><br>
                            <strong>Quantidade: </strong><?php echo $produto->getQuantidade(); ?><br>
                            <strong>Preço: </strong>R$ <?php echo $produto->getPreco(); ?><br>
                            <strong>Descrição: </strong><?php echo $produto->getDescricao(); ?>
                        </p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary">
                                <a href="editarProduto?id=<?php echo $produto->getCodigobarras(); ?>" class="btn btn-primary">Editar</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
        }?>
    </main>

    <?php require_once('public/footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>