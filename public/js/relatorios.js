$(document).ready(function() {
    $('#relatorios').DataTable({
        "ajax": {
            "url": "getRelatorios.php",
            "dataSrc": "",
            "complete": function(xhr, status) {
                console.log(xhr.responseText); // Adicione esta linha para depuração
            }
        },
        "columns": [
            { "data": "nome" },
            { "data": "categoria" },
            { "data": "preco" },
            { "data": "quantidade" }
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
