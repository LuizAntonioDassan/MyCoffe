
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatórios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="shortcut icon" href="public/icones/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="public/documentos-css/style.css">
  <link rel="stylesheet" href="public/documentos-css/conta.css">
</head>

<body>
    <?php include "public/navbar.php"?>

    <main class="container my-5" style="max-width: 800px; margin: auto;">

    <div class="card mb-4 p-3">
      <h1 class="mb-4 text-center">Relatórios</h1>

      
      <div class="d-flex flex-column flex-md-row justify-content-center align-items-center mb-1">
        <a href="relatorioVendas"><button class="btn mb-2 mx-2 mb-md-0">Relatório de vendas</button></a>
        <a href="relatorios"><button class="btn mb-2 mx-2 mb-md-0">Relatório de produtos</button></a>
      </div>
    </div>

  </main>

    <?php include "public/footer.php"?>
    
</body>
</html>
