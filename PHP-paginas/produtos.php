<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/style.css">
    <link rel="stylesheet" href="../documentos-css/produtos.css">
</head>

<body>

    <?php include "../PHP-includes/header.php" ?>

    <main>

        <!-- ORDENAÇÃO E BARRA DE PESQUISA -->
        <section class="container py-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="dropdown py-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <button class="btn botao-verde" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- FIM DA ORDENAÇÃO DE BARRA DE PESQUISA -->

        <section class="container mt-2 mb-4">
            <div class="row">

                <!-- Início dos cards dos produtos -->
                <?php include "../PHP-includes/cardProdutos.php"?>
                <!-- Fim dos cards dos produtos -->

            </div>
        </section>

    </main>

    <?php include "../PHP-includes/footer.php" ?>

</body>

</html>