<?php

include_once './model/dao/funcionarioDAO.php';
include_once './model/conn/Database.php';
$database = new Database();
$funcionarioDao = new funcionarioDAO($database->getConnection());

$id = $_GET['id'];

$funcionario = $funcionarioDao->readById($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/formulario.css">
    <link rel="stylesheet" href="../documentos-css/style.css">

<body>

<?php include('public/navbar.php'); ?>


    <body>
        <main>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center mb-4">Editar funcionário</h3>
                                <form action="editFuncionario" method="post">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" value="<?php echo $funcionario->getNome();?>">
                                        <input type="text" class="form-control" hidden="true" name="id" id="id" value="<?php echo $funcionario->getId();?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $funcionario->getEmail();?>"
                                            placeholder="Digite o e-mail">
                                    </div>                               
                                    <div class="mb-3">
                                        <label class="form-label">Permissão</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="funcao" id="funcionario"
                                                value="3" <?php if ($funcionario->getCargo() == 3) echo 'checked'; ?>>
                                            <label class="form-check-label" for="funcionario">
                                                Funcionário
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="funcao" id="gerente"
                                                value="2" <?php if ($funcionario->getCargo() == 2) echo 'checked'; ?>>
                                            <label class="form-check-label" for="gerente">
                                                Gerente
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="funcao" id="administrador"
                                                value="1" <?php if ($funcionario->getCargo() == 1) echo 'checked'; ?>>
                                            <label class="form-check-label" for="administrador">
                                                Administrador
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto-perfil" class="form-label">Foto de perfil</label>
                                        <input type="file" class="form-control" id="foto-perfil">
                                    </div>
                                    <button type="submit" class="btn botao-cadastrar w-100">Salvar alterações</button>
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