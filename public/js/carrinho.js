$(document).ready(function() {
    $('#confirmar').on('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'verifySessionCpf',
            type: 'GET',
            success: function(response) {
                if (response.cpfExists && response.cepExists) {
                    var url = 'confirmarPedido';
                    window.location.href = url;
                } else {
                    if(!response.cpfExists)
                        {
                            $('#alertMensagem').removeClass('d-none').text('CPF não encontrado. Por favor, cadastre o CPF antes de adicionar o endereço.');
                        setTimeout(function() {
                            var url = 'editarCliente';
                            window.location.href = url;
                        }, 3000);
                        }
                    if(!response.cepExists)
                        {
                            $('#alertMensagem').removeClass('d-none').text('CEP não encontrado. Por favor, cadastre o CEP antes de adicionar o endereço.');
                            setTimeout(function() {
                                var url = 'adicionarEndereco';
                                window.location.href = url;
                            }, 3000);
                        }
                }
            },
            error: function() {
                alert('erro desconhecido');
            }
        });
    });
    $('#continuar').on('click', function(e) {
        e.preventDefault();
        var url = 'produtos';
        window.location.href = url;
    });
    $('#cancelar').on('click', function(e) {
        e.preventDefault();
        var url = 'cancelarCompra';
        window.location.href = url;
    });
    $(document).ready(function() {
        $('#excluir').on('click', function() {
            var codigoProduto = $(this).data('codigo');
    
            $.ajax({
                url: 'excluir_produto.php',
                type: 'POST',
                data: { codigo: codigoProduto },
                success: function(response) {
                    if (response.success) {
                        alert('Produto excluído com sucesso!');
                        location.reload(); // Recarrega a página para atualizar a lista de produtos
                    } else {
                        alert('Erro ao excluir produto: ' + response.error);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Erro ao excluir produto:', error);
                }
            });
        });
    });
    
});