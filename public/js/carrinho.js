$(document).ready(function() {
    $('#confirmar').on('click', function(e) {
        e.preventDefault();
        var url = 'confirmarPedido';
        window.location.href = url;
    });
});