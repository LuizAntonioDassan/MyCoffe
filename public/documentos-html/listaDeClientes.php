<?php 
if($_SESSION['idcargo'] != 1 || $_SESSION['idcargo'] != 2){
  header('location: /perfilFuncionario');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../documentos-css/style.css">
    <link rel="stylesheet" href="../documentos-css/lista.css">

<body>

<?php include('public/navbar.php'); ?>

    <main class="container">
        <!-- Seção de ordenação e busca -->
        <section class="container py-2 px-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="dropdown py-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ordenar por
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Nome</a></li>
                            <li><a class="dropdown-item" href="#">Menor valor</a></li>
                            <li><a class="dropdown-item" href="#">Maior valor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="row">
            <?php 
        require_once('./model/dao/clienteDao.php');
        require_once('./model/conn/Database.php');
        $database = new Database();
        $clienteDB = new ClienteDAO($database->getConnection()); 
        $listClientes = $clienteDB->readAll();

        if($listClientes){
          foreach($listClientes as $cliente){

        ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $cliente->getNome();?></h5>
                        <p class="card-text">
                            <strong>E-mail:</strong> <?php echo $cliente->getEmail();?><br>
                            <strong>CPF:</strong> <?php echo $cliente->getCPF();?><br>
                            <strong>Assinatura:</strong> Sim
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#"><button class="btn btn-primary">Editar</button></a>
                            <button class="btn btn-danger">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
        } ?>



        </section>



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