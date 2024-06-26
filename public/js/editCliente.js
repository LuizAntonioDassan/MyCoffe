$(document).ready(function() {
    $('#editCliente').on('submit', function(event) {
        event.preventDefault();
        let isValid = true;

        if ($('#email').val().trim() === "") {
            $('#emailError').text("O email é obrigatório.").show();
            isValid = false;
        } else if (!validateEmail($('#email').val().trim())) {
            $('#emailError').text("O email não é válido.").show();
            isValid = false;
        } else {
            $('#emailError').hide();
            isValid = true;
        }

        if ($('#CPF').val().trim() === "") {
            $('#cpfError').text("O CPF é obrigatório.").show();
            isValid = false;
        } else if (!validateCPF($('#CPF').val().trim())) {
            $('#cpfError').text("O CPF não é válido.").show();
            isValid = false;
        } else {
            $('#cpfError').hide();
            isValid = true;
        }

        if ($('#RG').val().trim() === "") {            
            $('#rgError').text("O RG é obrigatório.").show();
            isValid = false;
        } else {
            $('#rgError').hide();
            isValid = true;
        }

        if ($('#data-nascimento').val().trim() === "") {
            $('#dataError').text("A Data de Nascimento é obrigatória.").show();
            isValid = false;
        } else {
            $('#dataError').hide();
            isValid = true;
        }

       if ($('#senha').val() < 6 && $('#senha').val() > 0) {
            $('#passwordError').text("A senha deve ter pelo menos 6 caracteres.").show();
            isValid = false;
        }else {
            $('#senhaError').hide();
            isValid = true;
        }

        console.log(isValid);
        if (isValid) {
            console.log('Debug');
            this.submit(); // Envia o formulário se todas as validações passarem
        }
    });

    function validateEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validateCPF(cpf) {
        return cpf.length === 11;
    }
});
