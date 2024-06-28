<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/formulario.css">
    <link rel="stylesheet" href="../documentos-css/style.css">
</head>

<body>

    <?php include "navbar.php" ?>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Editar Categoria</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="nome-categoria" class="form-label">Nome da categoria</label>
                                    <input type="text" class="form-control" id="nome-categoria" placeholder="Digite o nome da categoria">
                                </div>
                                <div class="mb-3">
                                    <label for="descricao" class="form-label">Descrição</label>
                                    <textarea class="form-control" id="descricao" rows="3" placeholder="Digite a descrição da categoria"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="imagem-categoria" class="form-label">Imagem</label>
                                    <input type="file" class="form-control" id="imagem-categoria">
                                </div>
                                <button type="submit" class="btn botao-cadastrar w-100">Salvar alterações</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "footer.php" ?>

</body>

</html>