<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/style.css">
    <link rel="stylesheet" href="../documentos-css/lista.css">
</head>

<body>

    <?php include "navbar.php" ?>

    <main class="container">
        <!-- Seção de ordenação e busca -->
        <section class="container py-2 px-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="dropdown py-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ordenar por
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Nome (Ordem crescente)</a></li>
                            <li><a class="dropdown-item" href="#">Nome (Ordem decrescente)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                        <button class="btn botao-verde" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </section>

        <a href="#"><button class="botao-registrar-funcionario">Adicionar funcionário</button></a>

        <!-- Lista de funcionarios -->
        <section class="row">
            <!-- Lista de card de funcionarios -->
            <?php include "cardListaDeFuncionarios.php" ?>
            <!-- Fim da lista de card de funcionario -->
        </section>

    </main>

    <?php include "footer.php" ?>

</body>

</html>