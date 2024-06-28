$(document).ready(function() {
    $('#btnEditar').on('click', function(e) {
        e.preventDefault();
        var url = 'editarCliente';
        window.location.href = url;
    });
    $('#btnEndereco').on('click', function(e) {
        e.preventDefault();

        $.ajax({
            url: 'verifySessionCpf',
            type: 'GET',
            success: function(response) {
                console.log(response.cpfExists);
                if (response.cpfExists) {
                    var url = 'adicionarEndereco';
                    window.location.href = url;
                } else {
                    $('#alertMensagem').removeClass('d-none').text('CPF não encontrado. Por favor, cadastre o CPF antes de adicionar o endereço.');
                    setTimeout(function() {
                        var url = 'editarCliente';
                        window.location.href = url;
                    }, 3000);
                }
            },
            error: function() {
                alert('erro desconhecido');
            }
        });
    });
});