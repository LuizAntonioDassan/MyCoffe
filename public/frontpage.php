<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="public/documentos-css/style.css">
  <link rel="stylesheet" href="public/documentos-css/index.css">

<body>

  <?php include('public/navbar.php'); ?>

  <main>
    <!-- FORMULÁRIO -->
    <section class="container my-4">
      <div class="row d-flex align-items-center">
        <div class="col-md-6">
          <h2>Bem-vindo ao nosso site!</h2>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet at, reprehenderit repellat voluptatum sunt
            distinctio. Ipsa ullam fugit quisquam ex adipisci tenetur eveniet vitae consequatur velit, delectus quis
            eaque earum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla mollitia ea iusto fugiat
            voluptatibus, cumque id necessitatibus quis consequuntur magnam? Vitae quisquam ducimus reprehenderit, ullam
            quod adipisci. Deserunt, maiores?
          </p>
        </div>
        <div class="col-md-6">
          <h2>Cadastre-se</h2>
          <form>
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" class="form-control" id="name" placeholder="Digite seu nome">
            </div>
            <div class="form-group mt-3">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group mt-3">
              <label for="password">Senha</label>
              <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn botao-cadastar-home">Cadastrar</button>
          </form>
        </div>
      </div>
    </section>

    <hr>

    <!-- SOBRE NÓS -->
    <section class="container my-4">
      <div class="row d-flex align-items-center">
        <div class="col-md-6">
          <img src="public/imagens/pagina-principal/imagem-fundo-1.jpg" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h2 class="mt-3">Sobre nós</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eveniet totam qui esse, dolorum quisquam
            repellendus sit doloribus magni nam aut cum. Distinctio quibusdam nisi porro consequuntur suscipit culpa
            deleniti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam perspiciatis corporis quia fugiat.
            Numquam unde reiciendis dolore molestiae error inventore ratione mollitia dicta quasi dignissimos, labore
            aut, cum atque quia?
          </p>
        </div>
      </div>
    </section>

    <hr>

    <!-- CATEGORIAS -->
    <section class="container my-4">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center mb-4">Nossos Produtos</h2>
        </div>
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card h-100">
              <img src="public/imagens/categorias/salgados.jpg" class="card-img-top" alt="Imagem do card 1">
              <div class="card-body">
                <h3 class="card-title">Salgados</h3>
              </div>
            </div>
          </a>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card h-100">
              <img src="public/imagens/categorias/doces.jpg" class="card-img-top" alt="Imagem do card 2">
              <div class="card-body">
                <h3 class="card-title">Doces</h3>
              </div>
            </div>
          </a>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card h-100">
              <img src="public/imagens/categorias/bebidas.jpg" class="card-img-top" alt="Imagem do card 3">
              <div class="card-body">
                <h3 class="card-title">Bebidas</h3>
              </div>
            </div>
          </a>
        </div>
        <!-- Card 4 -->
        <div class="col-md-4 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card h-100">
              <img src="public/imagens/categorias/artesanais.jpg" class="card-img-top" alt="Imagem do card 4">
              <div class="card-body">
                <h3 class="card-title">Produtos artesanais</h3>
              </div>
            </div>
          </a>
        </div>
        <!-- Card 5 -->
        <div class="col-md-4 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card h-100">
              <img src="public/imagens/categorias/cafes.jpg" class="card-img-top" alt="Imagem do card 5">
              <div class="card-body">
                <h3 class="card-title">Cafés</h3>
              </div>
            </div>
          </a>
        </div>
        <!-- Card 6 -->
        <div class="col-md-4 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card h-100">
              <img src="public/imagens/categorias/diversos.jpg" class="card-img-top" alt="Imagem do card 6">
              <div class="card-body">
                <h3 class="card-title">Produtos diversos</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <hr>

    <!-- PLANOS -->
    <section class="container my-4">
      <h2 class="text-center mb-4">Conheça nossos planos</h2>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

        <div class="col mb-4">
          <div class="card rounded-3 shadow-sm">
            <div class="card-header py-3 header-tradicional">
              <h4 class="my-0 fw-normal">Tradicional</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$0<small class="text-muted fw-light">/mês</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Acesso a todos os itens do catálogo</li>
                <li>Frete grátis a partir de R$100,00</li>
                <li>Concorra a sorteios todos os meses</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-tradicional">Cadastrar</button>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card rounded-3 shadow-sm">
            <div class="card-header py-3 header-premium">
              <h4 class="my-0 fw-normal">Premium</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$15<small class="text-muted fw-light">/mês</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10% de desconto em toda a loja</li>
                <li>Frete grátis a partir de R$50,00</li>
                <li>Brinde na primeira compra</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-premium">Assinar</button>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card rounded-3 shadow-sm">
            <div class="card-header py-3 header-gourmet">
              <h4 class="my-0 fw-normal">Gourmet</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$29<small class="text-muted fw-light">/mês</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>15% de desconto em toda a loja</li>
                <li>Frete grátis em todas as suas compras</li>
                <li>Receba pacotes mensalmente em casa</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-gourmet">Assinar</button>
            </div>
          </div>
        </div>

      </div>
    </section>

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