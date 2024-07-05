<?php
include_once './controller/hasPermisson.php'; 

$userId = $_SESSION['idUsuario'];
$requiredPermission = 'RegistraProduto';

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
    <title>Registrar produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/documentos-css/formulario.css">
    <link rel="stylesheet" href="public/documentos-css/style.css">

<body>

    <?php require_once ('public/navbar.php'); ?>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Registro de Produto</h3>
                            <form method="post" action="createProduct" id="registraProduto"
                                enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nome-produto" class="form-label">Nome do produto</label>
                                    <input type="text" class="form-control" id="nome-produto"
                                        placeholder="Digite o nome do produto" name="nome-produto" required>
                                </div>
                                <div class="mb-3">
                                    <label for="codigo-barras" class="form-label">Código de barras</label>
                                    <input type="text" class="form-control" id="codigo-barras"
                                        placeholder="Digite o código de barras" name="codigo-barras" required>
                                </div>
                                <div class="mb-3">
                                    <label for="quantidade" class="form-label">Quantidade</label>
                                    <input type="number" class="form-control" id="quantidade"
                                        placeholder="Digite a quantidade" name="quantidade" required>
                                </div>
                                <div class="mb-3">
                                    <label for="preco" class="form-label">Preço (R$)</label>
                                    <input type="number" class="form-control" id="preco" placeholder="Digite o preço"
                                        step="0.01" name="preco" required>
                                </div>
                                <div class="mb-3">
                                    <label for="categoria" class="form-label">Categoria</label>
                                    <select class="form-control" id="categoria" name="categoria" required>
                                        <option value="">Selecione uma categoria</option>
                                        <?php
                                        include_once 'model/dao/categoriaDAO.php';
                                        include_once 'model/conn/Database.php';
                                        $database = new Database();
                                        $db = $database->getConnection();
                                        $categoriaDAO = new CategoriaDAO($db);
                                        $categorias = $categoriaDAO->readAll();
                                        foreach ($categorias as $categoria) {
                                            echo "<option value='{$categoria->getNome()}'>{$categoria->getNome()}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="descricao" class="form-label">Descrição</label>
                                    <textarea class="form-control" id="descricao" rows="3"
                                        placeholder="Digite a descrição do produto" name="descricao" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="imagem-produto" class="form-label">Imagem</label>
                                    <input type="file" class="form-control" id="imagem-produto" name="imagem-produto">
                                </div>
                                <button type="submit" class="btn botao-cadastrar w-100">Registrar</button>
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