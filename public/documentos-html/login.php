<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="shortcut icon" href="/public/icones/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/public/documentos-css/style.css">
  <link rel="stylesheet" href="/public/documentos-css/formulario.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/public/js/loginValidator.js"></script>
<body>

<?php include('public/navbar.php'); ?>
  <main>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center mb-4">Acesse sua conta</h3>
              <form action="loginUser.php" id="loginForm" method="post">
                <div class="mb-3">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
                  <span id="emailError" class="error-message"></span>
                  </div>
                  <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
                    <span id="passwordError" class="error-message"></span>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="lembrar">
                  <label class="form-check-label" for="lembrar">Lembrar-me</label>
                </div>
                <button type="submit" class="btn botao-login-entrar">
                  <p id="entrar">Entrar</p>
                  <div class="spinner-border" id="spinner" role="status" hidden="true">
                    <span class="sr-only"></span>
                  </div>
                </button>
              </form>
              <div class="text-center mt-3">
                <p>Não possui uma conta? <a href="/">Cadastre-se</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="text-center background-footer">

    <section class="container p-4 pb-0">
      <a href="#!" class="btn"><i class="bi bi-whatsapp"></i></a>
      <a href="#!" class="btn"><i class="bi bi-instagram"></i></a>
      <a href="#!" class="btn"><i class="bi bi-twitter"></i></a>
    </section>

    <div class="p-3">
      UFMS 2024 <i class="bi bi-c-circle"></i> Construção de Software
    </div>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>