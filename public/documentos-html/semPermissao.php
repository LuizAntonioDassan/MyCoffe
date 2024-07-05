<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sem Permissão</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/documentos-css/formulario.css">
    <link rel="stylesheet" href="public/documentos-css/style.css">
    <style>
        body, html {
            height: 100%;
        }
        .bg-404 {
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .error-container {
            text-align: center;
        }
        .error-title {
            font-size: 10rem;
            font-weight: 700;
            color: brown;
        }
        .error-message {
            font-size: 1.5rem;
            color: burlywood;
        }
        .home-btn {
            margin-top: 20px;
        }
    </style>
</head>
<?php require_once('public/navbar.php');?>
<body>
    <div class="bg-404">
        <div class="error-container">
            <div class="error-title">Sem Permissão</div>
            <div class="error-message">Você nao Possui Permissao para acessar essa pagina</div>
            <a href="/perfilFuncionario" class="btn btn-primary home-btn">Voltar ao Início</a>
        </div>
    </div>
    <?php require_once('public/footer.php');?>
</body>
</html>
