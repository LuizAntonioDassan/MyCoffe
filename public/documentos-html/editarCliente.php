<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/documentos-css/formulario.css">
    <link rel="stylesheet" href="public/documentos-css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/public/js/editCliente.js"></script>
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
                                <h3 class="card-title text-center mb-4">Editar cliente</h3>
                                <form action="editCliente" id="editCliente" method="post">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome" value="<?php echo $_SESSION['nome'];?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" value="<?php echo $_SESSION['email'];?>"
                                            placeholder="Digite o e-mail">
                                    </div>
                                    <div class="mb-3">
                                        <label for="CPF" class="form-label">CPF</label>
                                        <input type="text" class="form-control" id="CPF" name="CPF" value="<?php if(isset($_SESSION['cpf'])){echo $_SESSION['cpf'];}?>"
                                            placeholder="Digite o CPF">
                                            <span id="cpfError" class="error-message"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="RG" class="form-label">RG</label>
                                        <input type="text" class="form-control" id="RG" name="RG"
                                            value="<?php if(isset($_SESSION['rg'])){echo $_SESSION['rg'];}?>"
                                            placeholder="Digite o RG">
                                            <span id="rgError" class="error-message"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="data-nascimento" class="form-label">Data de nascimento</label>
                                        <input type="date" class="form-control" id="data-nascimento" name="dataNasc"
                                        value="<?php if(isset($_SESSION['dataNasc'])){echo $_SESSION['dataNasc'];}?>"
                                        >
                                        <span id="dataError" class="error-message"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="senha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senha"
                                            placeholder="Digite a senha">
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