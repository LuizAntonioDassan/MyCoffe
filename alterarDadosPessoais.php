<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar dados pessoais</title>
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
                            <h3 class="card-title text-center mb-4">Alterar dados pessoais</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
                                </div>

                                <div class="mb-3">
                                    <label for="senha" class="form-label">Senha antiga</label>
                                    <input type="password" class="form-control" id="senha" placeholder="Digite a senha antiga">
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="form-label">Nova senha</label>
                                    <input type="password" class="form-control" id="senha" placeholder="Digite a nova senha">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gênero</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genero" id="masculino" value="masculino">
                                        <label class="form-check-label" for="masculino">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genero" id="feminino" value="feminino">
                                        <label class="form-check-label" for="feminino">
                                            Feminino
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="data-nascimento" class="form-label">Data de nascimento</label>
                                    <input type="date" class="form-control" id="data-nascimento">
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