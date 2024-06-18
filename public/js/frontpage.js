$(document).ready(function() {
    var emailExists = false;

    function checkEmailExists(email) {
        return $.ajax({
            url: 'emailExist.php',
            type: 'post',
            data: { email: email },
            success: function(response) {
                if (response == 'exists') {
                    $('#emailError').text("O e-mail já está cadastrado.").show();
                    $('#email').addClass('is-invalid');
                    emailExists = true;
                } else {
                    $('#emailError').hide();
                    $('#email').removeClass('is-invalid');
                    emailExists = false;
                }
            }
        });
    }

    $('#email').on('blur', function() {
        var email = $(this).val();
        if (email) {
            checkEmailExists(email);
        }
    });

    $('#registrationForm').on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        let isValid = true;
        let name = $('#name').val();
        let email = $('#email').val();
        let password = $('#password').val();

        // Limpar mensagens de erro anteriores
        $('.error-message').hide().text('');

        if (name === "") {
            $('#nameError').text("O nome é obrigatório.").show();
            isValid = false;
        }

        if (email === "") {
            $('#emailError').text("O e-mail é obrigatório.").show();
            isValid = false;
        } else {
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                $('#emailError').text("O e-mail inserido não é válido.").show();
                isValid = false;
            }
        }

        if (password === "") {
            $('#passwordError').text("A senha é obrigatória.").show();
            isValid = false;
        } else if (password.length < 6) {
            $('#passwordError').text("A senha deve ter pelo menos 6 caracteres.").show();
            isValid = false;
        }

        if (!isValid) {
            return; 
        }

        if (email) {
            checkEmailExists(email).done(function() {
                if (emailExists) {
                    return; 
                } else {
                    $('#registrationForm')[0].submit(); 
                }
            });
        } else {
            $('#registrationForm')[0].submit();
        }
    });
});
