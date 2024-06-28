<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/formulario.css">
    <link rel="stylesheet" href="../documentos-css/style.css">
</head>

<body>

<?php include('public/navbar.php'); ?>


    <body>
        <main>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center mb-4">Registar funcionário</h3>
                                <form method="post" action="createFuncionario">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Digite o e-mail" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="senha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senha"
                                            placeholder="Digite a senha" name="senha">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Gênero</label>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Permissão</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="permissao" id="masculino"
                                                value="2">
                                            <label class="form-check-label" for="masculino">
                                                Funcionário
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="permissao" id="feminino"
                                                value="1">
                                            <label class="form-check-label" for="feminino">
                                                Administrador
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3" name="datanascimento">
                                        <label for="data-nascimento" class="form-label">Data de nascimento</label>
                                        <input type="date" class="form-control" id="data-nascimento">
                                    </div>
                                    <div class="mb-3" name="foto">
                                        <label for="foto-perfil" class="form-label">Foto de perfil</label>
                                        <input type="file" class="form-control" id="foto-perfil">
                                    </div>
                                    <button type="submit" class="btn botao-cadastrar w-100">Registrar funcionário</button>
                                </form>
                            </div>
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