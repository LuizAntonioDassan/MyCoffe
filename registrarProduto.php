<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/formulario.css">
    <link rel="stylesheet" href="../documentos-css/style.css">
</head>

<body>

    <?php include "../PHP-includes/header.php" ?>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Registrar Produto</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="nome-produto" class="form-label">Nome do produto</label>
                                    <input type="text" class="form-control" id="nome-produto" placeholder="Digite o nome do produto">
                                </div>
                                <div class="mb-3">
                                    <label for="codigo-barras" class="form-label">Código de barras</label>
                                    <input type="text" class="form-control" id="codigo-barras" placeholder="Digite o código de barras">
                                </div>
                                <div class="mb-3">
                                    <label for="quantidade" class="form-label">Quantidade</label>
                                    <input type="number" class="form-control" id="quantidade" placeholder="Digite a quantidade">
                                </div>
                                <div class="mb-3">
                                    <label for="preco" class="form-label">Preço (R$)</label>
                                    <input type="number" class="form-control" id="preco" placeholder="Digite o preço" step="0.01">
                                </div>
                                <div class="mb-3">
                                    <label for="descricao" class="form-label">Descrição</label>
                                    <textarea class="form-control" id="descricao" rows="3" placeholder="Digite a descrição do produto"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="imagem-produto" class="form-label">Imagem</label>
                                    <input type="file" class="form-control" id="imagem-produto">
                                </div>
                                <button type="submit" class="btn botao-cadastrar w-100">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "../PHP-includes/footer.php" ?>

</body>

</html>