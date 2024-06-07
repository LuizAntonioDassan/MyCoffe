<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../documentos-css/conta.css">
    <link rel="stylesheet" href="../documentos-css/style.css">

<body>
<?php include('public/navbar.php'); ?>
    <main>
        <div class="container">
            <div class="main-content">
                <!-- Conteúdo principal da sua página aqui -->
                <div class="text-center mb-4">
                    <img src="imagens/foto_perfil.jpg" alt="Imagem" class="img-fluid max-img-size">
                </div>
    
                <div class="text-center mb-4">
                    <span>Nome: João da Silva</span><br>
                    <span>Email: exemplo@email.com</span><br>
                    <span>Data de Nascimento: 01/01/1990</span><br>
                    <!-- Adicione mais informações conforme necessário -->
                </div>
    
                <div class="text-center mb-4">
                    <button type="button" class="btn mb-2">Adicionar Endereço</button><br>
                    <button type="button" class="btn">Alterar nome</button><br>
                    <button type="button" class="btn mt-2">Alterar senha</button><br>
                    <button type="button" class="btn mt-2">Alterar foto</button>
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