<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar endereço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/documentos-css/style.css">
    <link rel="stylesheet" href="public/documentos-css/formulario.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/endereco.js"></script> 
</head>

<body>
    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Endereço</h3>
                            <form action="salvaEndereco" method="post">
                                <div class="mb-3">
                                    <label for="cep" class="form-label">CEP</label>
                                    <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP" value="<?php if(isset($_SESSION['cep'])){echo $_SESSION['cep'];}?>">
                                </div>
                                <div class="mb-3">
                                    <label for="rua" class="form-label">Rua</label>
                                    <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite o nome da rua" value="<?php if(isset($_SESSION['rua'])){echo $_SESSION['rua'];}?>">
                                </div>
                                <div class="mb-3">
                                    <label for="numero" class="form-label">Número</label>
                                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o número" value="<?php if(isset($_SESSION['numero'])){echo $_SESSION['numero'];}?>">
                                </div>
                                <div class="mb-3">
                                    <label for="bairro" class="form-label">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro" value="<?php if(isset($_SESSION['bairro'])){echo $_SESSION['bairro'];}?>">
                                </div>
                                <div class="mb-3">
                                    <label for="cidade" class="form-label">Cidade</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade" value="<?php if(isset($_SESSION['cidade'])){echo $_SESSION['cidade'];}?>">
                                </div>
                                <div class="mb-3">
                                    <label for="estado" class="form-label">Estado</label>
                                    <input type="text" class="form-control" id="estado" placeholder="Digite o estado">
                                </div>
                                <button type="submit" class="btn botao-cadastrar w-100">Salvar Endereço</button>
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

    <script src="../documentos-js/adicionarEndereco.js"></script>
</body>

</html>