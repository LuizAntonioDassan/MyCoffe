$(document).ready(function() {
    $('#btnEditar').on('click', function(e) {
        e.preventDefault();
        var url = 'editarCliente';
        window.location.href = url;
    });
    $('#btnEndereco').on('click', function(e) {
        e.preventDefault();
        var url = 'adicionarEndereco';
        window.location.href = url;
    });
});