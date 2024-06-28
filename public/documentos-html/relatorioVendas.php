<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
    <!-- Carregar CSS do DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <!-- Carregar jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Carregar JS do DataTables e suas extensões -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
</head>
<body>
    <?php //require_once('public/navbar.php');?>
    <div class="container">
        <h1>Relatórios</h1>
        <table id="relatoriosVenda" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Identificador da venda</th>
                    <th>Data</th>
                    <th>Quantidade de produtos</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dados dinâmicos serão carregados aqui -->
            </tbody>
        </table>
    </div>
    <!-- Carregar o arquivo JavaScript para inicializar o DataTables -->
    <script src="public/js/relatoriosVendas.js"></script>
</body>
</html>
