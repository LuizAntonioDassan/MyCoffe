$(document).ready(function() {
    $('.btn-comprar').on('click', function(e) {
        e.preventDefault();
        
        // Captura os dados do produto
        var codigo = $(this).data('codigo');
        var preco = $(this).data('preco');
        var quantidade = $('#quantidade_' + codigo).val();
        console.log(quantidade);
        // Cria a URL com os parâmetros necessários
        var url = 'adicionar_carrinho?produto_codigo=' + codigo + '&preco=' + preco + '&quantidade=' + parseInt(quantidade);
        // Redireciona para a URL
        window.location.href = url;
    });
});