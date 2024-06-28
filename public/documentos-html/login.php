<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/style.css">
    <link rel="stylesheet" href="../documentos-css/formulario.css">
</head>

<body>

    <?php include "navbar.php" ?>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Acesse sua conta</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="lembrar">
                                    <label class="form-check-label" for="lembrar">Lembrar-me</label>
                                </div>
                                <button type="submit" class="btn botao-login-entrar">Entrar</button>
                            </form>
                            <div class="text-center mt-3">
                                <p>Não possui uma conta? <a href="#">Cadastre-se</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "footer.php" ?>

</body>

</html>