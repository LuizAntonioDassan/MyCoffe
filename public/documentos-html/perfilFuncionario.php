<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/style.css">
    <link rel="stylesheet" href="../documentos-css/conta.css">

<body>

<?php include('public/navbar.php'); ?>



    <main class="container mt-5">
        <div class="card">
          <div class="card-header">
            <h2>Perfil de Funcionário</h2>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <h5>Nome:</h5>
              <p>John Doe</p>
            </div>
            <div class="mb-3">
              <h5>E-mail:</h5>
              <p>johndoe@example.com</p>
            </div>
            <div class="mb-3">
              <h5>Permissão:</h5>
              <p>Funcionário</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2">
              <div class="col">
                <button type="button" class="btn btn-primary btn-lg w-100">Lista de funcionários</button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-primary btn-lg w-100">Lista de clientes</button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-primary btn-lg w-100">Lista de produtos</button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-primary btn-lg w-100">Lista de categorias</button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-secondary btn-lg w-100">Registrar funcionário</button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-secondary btn-lg w-100">Registrar cliente</button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-secondary btn-lg w-100">Registrar produto</button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-secondary btn-lg w-100">Registrar categoria</button>
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
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" rossorigin="anonymous">
        </script>
</body>

</html>