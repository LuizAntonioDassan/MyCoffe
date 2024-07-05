<?php
include_once './controller/hasPermisson.php'; 

$userId = $_SESSION['idUsuario'];
$requiredPermission = 'ListaCargos';

if (!hasPermission($userId, $requiredPermission)) {
    header('Location: /semPermissao'); 
    exit();
}
include_once 'model/conn/Database.php';
include_once 'model/dao/CargoDAO.php';
$database = new Database();
$db = $database->getConnection();
$cargoDAO = new CargoDAO($db);

try {
    $cargos = $cargoDAO->readAll();
} catch (Exception $e) {
    echo "Erro ao buscar cargos: " . $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cargos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/documentos-css/formulario.css">
    <link rel="stylesheet" href="public/documentos-css/style.css">
</head>
<?php include ('public/navbar.php'); ?>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Listar Cargos</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cargos as $cargo): ?>
            <tr>
                <td><?php echo $cargo->getNome(); ?></td>
                <td>
                    <a href="vincularPermissao?cargo_id=<?php echo $cargo->getId();?>" class="btn btn-primary">Editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
<?php include ('public/footer.php'); ?>
</html>
