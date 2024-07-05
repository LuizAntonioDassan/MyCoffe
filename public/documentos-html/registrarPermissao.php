<?php
include_once './controller/hasPermisson.php'; 

$userId = $_SESSION['idUsuario'];
$requiredPermission = 'RegistraPermissao';

if (!hasPermission($userId, $requiredPermission)) {
    header('Location: /semPermissao'); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/documentos-css/formulario.css">
    <link rel="stylesheet" href="public/documentos-css/style.css">
</head>

<body>

    <?php include ('public/navbar.php'); ?>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Registro de permissao</h3>
                            <form action="createCargo" method="post">
                                <div class="mb-3">
                                    <label for="nome-categoria" class="form-label">Nome da permissao</label>
                                    <input type="text" class="form-control" id="nome-categoria"
                                        placeholder="Digite o nome da categoria" name="nome">
                                </div>                                                             
                                <button type="submit" class="btn w-100">Criar permissao</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once ('public/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>