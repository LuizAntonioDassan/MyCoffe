<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/style.css">
    <link rel="stylesheet" href="../documentos-css/conta.css">
</head>

<body>

    <?php include "navbar.php" ?>

    <main class="container my-5" style="max-width: 800px; margin: auto;">

        <div class="card mb-4 p-3">
            <h1 class="mb-4 text-center">Informações da Conta</h1>
            <div class="card-body text-center">
                <img src="" class="img-thumbnail mb-3" style="width: 350px; height: 350px; object-fit: cover;">
                <h3 class="mb-3">Nome do Cliente</h3>
                <p class="mb-1"><strong>E-mail:</strong></p>
                <p class="mb-1"><strong>Data de Nascimento:</strong></p>
                <p class="mb-1"><strong>Assinatura:</strong></p>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center mb-4">
                <a href="#"><button class="btn mb-2 mx-2 mb-md-0">Adicionar endereço</button></a>
                <a href="#"><button class="btn mb-2 mx-2 mb-md-0">Alterar dados pessoais</button></a>
            </div>
            <form>
                <div class="form-group">
                    <label for="uploadFotoPerfil">Adicionar Foto de Perfil</label>
                    <input type="file" class="form-control-file" id="uploadFotoPerfil">
                </div>
            </form>
        </div>

    </main>

    <?php include "footer.php" ?>

</body>

</html>