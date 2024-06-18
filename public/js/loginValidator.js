$(document).ready(function() {
    $('#loginForm').on('submit', function(event) {
        event.preventDefault();
        let email = $('#email').val();
        let senha = $('#senha').val();
        let entrar = $('#entrar').val();
        let isValid = true;

        $('.error-message').text('');

        if (email === "") {
            $('#emailError').text("O e-mail é obrigatório.").show();
            isValid = false;
            } else {
                $('#emailError').text("O e-mail é obrigatório.").hide();
                let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    $('#emailError').text("O e-mail inserido não é válido.");
                    isValid = false;
            }
        }

        if (senha === "") {
            $('#passwordError').text("A senha é obrigatória.").show();
            isValid = false;
            }
            
        if (isValid) {
            $('#passwordError').text("A senha é obrigatória.").hide();
            $('#spinner').prop('hidden', false);
            $('#entrar').hide();
            $.ajax({
                url: 'loginUser.php',
                type: 'post',
                data: { email: email, senha: senha },
                dataType: 'json',
                success: function(response) {
                    console.log(response.success);
                    if (response.success) {
                        window.location.href = '/produtos';
                    } else {
                        if (response.error) {
                            $('#passwordError').text(response.error).show();
                            }
                            }
                            },
                        complete: function() {
                            $('#loginButton').prop('disabled', false);
                            $('#spinner').prop('hidden', true);
                            $('#entrar').show();
                }
            });
        }
    });
});
