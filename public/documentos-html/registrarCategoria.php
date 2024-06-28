<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/formulario.css">
    <link rel="stylesheet" href="../documentos-css/style.css">
</head>

<body>

<?php include('public/navbar.php'); ?>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Registro de Categoria</h3>
                            <form action="createCategoria" method="post">
                                <div class="mb-3">
                                    <label for="nome-categoria" class="form-label">Nome da categoria</label>
                                    <input type="text" class="form-control" id="nome-categoria"
                                        placeholder="Digite o nome da categoria" name="nome">
                                </div>                               
                                <div class="mb-3">
                                    <label for="imagem-categoria" class="form-label">Imagem</label>
                                    <input type="file" class="form-control" id="imagem-categoria">
                                </div>
                                <button type="submit" class="btn w-100">Criar categoria</button>
                            </form>
                        </div>
                    </div>
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