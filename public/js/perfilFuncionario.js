$(document).ready(function() {
    $('#listaFuncionario').on('click', function(e) {
        e.preventDefault();
        var url = 'listaFuncionario';
        window.location.href = url;
    });
    $('#listaCliente').on('click', function(e) {
        e.preventDefault();
        var url = 'listaClientes';
        window.location.href = url;
    });
    $('#listaProdutos').on('click', function(e) {
        e.preventDefault();
        var url = 'listaProdutos';
        window.location.href = url;
    });
    $('#listaCategorias').on('click', function(e) {
        e.preventDefault();
        var url = 'listaCategoria';
        window.location.href = url;
    });
    $('#cadastraFuncionario').on('click', function(e) {
        e.preventDefault();
        var url = 'cadastraFuncionario';
        window.location.href = url;
    });
    $('#cadastraCliente').on('click', function(e) {
        e.preventDefault();
        var url = 'cadastraCliente';
        window.location.href = url;
    });
    $('#cadastraProduto').on('click', function(e) {
        e.preventDefault();
        var url = 'cadastroProduto';
        window.location.href = url;
    });
    $('#cadastraCategoria').on('click', function(e) {
        e.preventDefault();
        var url = 'cadastraCategoria';
        window.location.href = url;
    });
});