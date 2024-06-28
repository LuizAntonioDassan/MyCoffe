<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="/public/icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/documentos-css/style.css">
    <link rel="stylesheet" href="/public/documentos-css/conta.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/conta.js"></script>

<body>

    <?php require_once('public/navbar.php');?>

    <main class="container my-5" style="max-width: 800px; margin: auto;">
        <h1 class="mb-4">Informações da Conta</h1>
      
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="../imagens/foto-de-perfil/foto-perfil-1.jpg" alt="Foto de Perfil" class="img-thumbnail mb-3" style="width: 350px; height: 350px; object-fit: cover;">
                <h3 class="mb-3"><?php echo $_SESSION['nome'];?></h3>
                <p class="mb-1"><strong>E-mail:</strong><?php echo $_SESSION['email'];?></p>
                <p class="mb-1"><strong>Assinatura:</strong> Premium</p>
            </div>
        </div>
        <div class="alert alert-warning d-none" id="alertMensagem" role="alert"></div>
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center mb-4">
            <button class="btn mb-2 mx-2 mb-md-0" id="btnEndereco">Editar Endereço</button>
            <button class="btn mb-2 mx-2 mb-md-0" id="btnEditar">Editar Dados</button>
        </div>
        
        <form>
            <div class="form-group">
                <label for="uploadFotoPerfil">Adicionar Foto de Perfil</label>
                <input type="file" class="form-control-file" id="uploadFotoPerfil">
            </div>
        </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" rossorigin="anonymous">
    </script>
</body>

</html>