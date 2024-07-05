<?php include('public/navbar.php'); 

include_once './model/dao/produtoDAO.php';
include_once './model/conn/Database.php';
$database = new Database();
$produtoDao = new produtoDAO($database->getConnection());

$codigoBarras = $_GET['id'];

$produto = $produtoDao->readByCodigoBarras($codigoBarras);

$_SESSION['codigointerno'] = $produto->getCodigointerno();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/documentos-css/formulario.css">
    <link rel="stylesheet" href="public/documentos-css/style.css">
</head>

<body>


    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Editar Produto</h3>
                            <form action="editProduto" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nome-produto" class="form-label">Nome do Produto</label>
                                    <input type="text" class="form-control" id="nome-produto" name="nome"
                                        placeholder="Digite o nome do produto" value="<?php echo $produto->getNome();?>">
                                </div>
                                <div class="mb-3">
                                    <label for="codigo-barras" class="form-label">Codigo de barras</label>
                                    <input type="text" class="form-control" id="codigo-barras" name="codigobarras"
                                        placeholder="Digite o código de barras" value="<?php echo $produto->getCodigobarras();?>">
                                </div>
                                <div class="mb-3">
                                    <label for="quantidade" class="form-label">Quantidade </label>
                                    <input type="number" class="form-control" id="quantidade" name="quantidade"
                                        placeholder="Digite a quantidade" value="<?php echo $produto->getQuantidade();?>"> 
                                </div>
                                <div class="mb-3">
                                    <label for="preco" class="form-label">Preco</label>
                                    <input type="number" class="form-control" id="preco" placeholder="Digite o preço" name="preco"
                                        step="0.01" value="<?php echo $produto->getPreco();?>">
                                </div>
                                <div class="mb-3">
                                    <label for="categoria" class="form-label">Categoria</label>
                                    <select class="form-control" id="categoria" name="categoria">
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
                                    <label for="descricao" class="form-label">Descricao</label>
                                    <textarea class="form-control" id="descricao" rows="3" name="descricao"
                                        placeholder="Digite a descrição do produto"><?php echo $produto->getDescricao();?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="imagem" class="form-label">Imagem</label> 
                                    <input type="file" class="form-control" id="imagem  " name="imagem">
                                </div>
                                <div class="mb-3">
                                        <label class="form-label">Atividade</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="inativo" name="inativo"
                                                value="true">
                                            <label class="form-check-label" for="inativo">
                                                Inativo
                                            </label>
                                        </div>
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