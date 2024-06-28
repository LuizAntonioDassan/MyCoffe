$(document).ready(function() {
    $('#relatoriosVenda').DataTable({
        "ajax": {
            "url": "getRelatoriosVendas",
            "dataSrc": "",
            "complete": function(xhr, status) {
                console.log(xhr.responseText); // Adicione esta linha para depuração
            }
        },
        "columns": [
            { "data": "email" },
            { "data": "identificador" },
            { "data": "data" },
            { "data": "quantidade" },
            { "data": "total_compra" }
        ],
        "dom": 'Bfrtip',
        "buttons": [
            {
                extend: 'csvHtml5',
                title: 'Relatório de Produtos',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Relatório de Produtos',
                exportOptions: {
                    columns: ':visible'
                },
                customize: function (doc) {
                    doc.content[1].table.widths = 
                        Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                }
            },
            'print'
        ]
    });
});
