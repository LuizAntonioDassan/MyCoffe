<?php
include_once './controller/hasPermisson.php';

$userId = $_SESSION['idUsuario'];
$requiredPermission = 'RegistraFuncionario';

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
    <title>Registrar Funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/documentos-css/formulario.css">
    <link rel="stylesheet" href="public/documentos-css/style.css">
</head>

<body>

    <?php include ('public/navbar.php'); ?>


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
                                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome"
                                            name="nome">
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
                                        <label for="cargo_id" class="form-label">Permissão</label>
                                        <select class="form-select" id="cargo_id" name="cargo_id">
                                            <?php
                                            // Inclua o arquivo DAO dos cargos
                                            include_once 'model/dao/CargoDAO.php';
                                            include_once 'model/conn/Database.php';
                                            $database = new Database();
                                            $db = $database->getConnection();

                                            // Crie uma instância do DAO
                                            $cargoDAO = new CargoDAO($db);

                                            // Busque todos os cargos
                                            $cargos = $cargoDAO->readAll();

                                            // Gere as opções do select
                                            foreach ($cargos as $cargo) {
                                                echo "<option value='{$cargo->getId()}'>{$cargo->getNome()}</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3" name="datanascimento">
                                        <label for="data-nascimento" class="form-label">Data de nascimento</label>
                                        <input type="date" class="form-control" id="data-nascimento">
                                    </div>
                                    <div class="mb-3" name="foto">
                                        <label for="foto-perfil" class="form-label">Foto de perfil</label>
                                        <input type="file" class="form-control" id="foto-perfil">
                                    </div>
                                    <button type="submit" class="btn botao-cadastrar w-100">Registrar
                                        funcionário</button>
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