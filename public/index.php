<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
<body>

    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">MyCoffee</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Carrinho</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Minha conta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Entrar</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- TEXTO À ESQUERDA E FORMULÁRIO DE CADASTRO À DIREITA -->
        <section class="container mt-4">
            <div class="row">
                <!-- Texto à esquerda -->
                <div class="col-md-6 d-flex text-center align-items-center p-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod ante eu ipsum sodales, eu rutrum urna rutrum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab accusamus corrupti unde debitis eligendi! Odit incidunt earum optio maxime distinctio itaque vitae, doloribus maiores ipsam! Delectus officia voluptatibus vitae asperiores.</p>
                </div>
                <!-- Formulário à direita -->
                <div class="col-md-6 d-flex align-items-center row">
                    <h2 class="text-center">Crie sua conta</h2>
                    <form>
                        <!-- Seu formulário aqui -->
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- IMAGEM À ESQUERDA E TEXTO À DIREITA (SOBREA NÓS) -->
        <section class="container mt-4">
            <div class="row">
                <!-- Imagem à esquerda -->
                <div class="col-md-6">
                    <img src="imagens/teste.jpg" class="img-fluid" alt="Imagem">
                </div>
                <!-- Texto à direita -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>Sobre nós</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod ante eu ipsum sodales, eu rutrum urna rutrum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere placeat, rerum obcaecati accusamus eveniet nemo in aut pariatur nobis? Accusantium in laborum quas ratione tempore voluptatem! Assumenda voluptates delectus dolores?</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CATEGORIA DOS PRODUTOS -->
        <section class="py-5">

            <h2 class="fw-bold text-center pb-1">Nossos produtos</h2>
      
            <div class="row mx-0">
      
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 mx-auto btn" data-bs-toggle="modal" data-bs-target="#modal-1" style="width: 18rem;">
                  <img src="imagens/categorias/salgados.jpg" class="card-img-top">
                  <div class="card-body">
                    <h3 class="card-text text-center fw-bold">Categoria 1</h3>
                  </div>
                </div>
              </div>
      
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 mx-auto btn" data-bs-toggle="modal" data-bs-target="#modal-2" style="width: 18rem;">
                  <img src="imagens/categorias/doces.jpg" class="card-img-top">
                  <div class="card-body">
                    <h3 class="card-text fw-bold text-center">Categoria 2</h3>
                  </div>
                </div>
              </div>
      
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 mx-auto btn" data-bs-toggle="modal" data-bs-target="#modal-3" style="width: 18rem;">
                  <img src="imagens/categorias/bebidas.jpg" class="card-img-top">
                  <div class="card-body">
                    <h3 class="card-text text-center fw-bold text-nowrap">Categoria 3</h3>
                  </div>
                </div>
              </div>
      
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 mx-auto btn" data-bs-toggle="modal" data-bs-target="#modal-4" style="width: 18rem;">
                  <img src="imagens/categorias/cafes.jpg" class="card-img-top">
                  <div class="card-body">
                    <h3 class="card-text text-center fw-bold">Categoria 4</h3>
                  </div>
                </div>
              </div>
      
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 mx-auto btn" data-bs-toggle="modal" data-bs-target="#modal-5" style="width: 18rem;">
                  <img src="imagens/categorias/artesanais.jpg" class="card-img-top">
                  <div class="card-body">
                    <h3 class="card-text text-center fw-bold">Categoria 5</h3>
                  </div>
                </div>
              </div>
      
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 mx-auto btn" data-bs-toggle="modal" data-bs-target="#modal-6" style="width: 18rem;">
                  <img src="imagens/categorias/outros.jpg" class="card-img-top">
                  <div class="card-body">
                    <h3 class="card-text text-center fw-bold">Categoria 6</h3>
                  </div>
                </div>
              </div>
            </div>
      
        </section>

        <!-- MODAIS (ABREM QUANDO CLICA NA CATEGORIA) -->
        <div class="modal fade " id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Categoria 1</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="imagens/categorias/salgados.jpg" class="w-100" alt="Xícara de café preto">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolor doloribus ullam, doloremque alias officia quo modi consectetur repellat consequatur qui nam vel soluta saepe assumenda reiciendis nemo id? Esse.</p>
                </div>
                <div class="modal-footer mx-auto">
                  <button type="button" class="btn btn-secondary botao-padrao border-0" data-bs-dismiss="modal">Ver produtos</button>
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade " id="modal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Categoria 2</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="imagens/categorias/doces.jpg" class="w-100" alt="Xícara de café preto">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolor doloribus ullam, doloremque alias officia quo modi consectetur repellat consequatur qui nam vel soluta saepe assumenda reiciendis nemo id? Esse.</p>
                </div>
                <div class="modal-footer mx-auto">
                  <button type="button" class="btn btn-secondary botao-padrao border-0" data-bs-dismiss="modal">Ver produtos</button>
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade " id="modal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Categoria 3</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="imagens/categorias/bebidas.jpg" class="w-100" alt="Xícara de café preto">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolor doloribus ullam, doloremque alias officia quo modi consectetur repellat consequatur qui nam vel soluta saepe assumenda reiciendis nemo id? Esse.</p>
                </div>
                <div class="modal-footer mx-auto">
                  <button type="button" class="btn btn-secondary botao-padrao border-0" data-bs-dismiss="modal">Ver produtos</button>
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade " id="modal-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Categoria 4</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="imagens/categorias/cafes.jpg" class="w-100" alt="Xícara de café preto">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolor doloribus ullam, doloremque alias officia quo modi consectetur repellat consequatur qui nam vel soluta saepe assumenda reiciendis nemo id? Esse.</p>
                </div>
                <div class="modal-footer mx-auto">
                  <button type="button" class="btn btn-secondary botao-padrao border-0" data-bs-dismiss="modal">Ver produtos</button>
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade " id="modal-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Categoria 5</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="imagens/categorias/artesanais.jpg" class="w-100" alt="Xícara de café preto">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolor doloribus ullam, doloremque alias officia quo modi consectetur repellat consequatur qui nam vel soluta saepe assumenda reiciendis nemo id? Esse.</p>
                </div>
                <div class="modal-footer mx-auto">
                  <button type="button" class="btn btn-secondary botao-padrao border-0" data-bs-dismiss="modal">Ver produtos</button>
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade " id="modal-6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Categoria 6</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="imagens/categorias/outros.jpg" class="w-100" alt="Xícara de café preto">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolor doloribus ullam, doloremque alias officia quo modi consectetur repellat consequatur qui nam vel soluta saepe assumenda reiciendis nemo id? Esse.</p>
                </div>
                <div class="modal-footer mx-auto">
                  <button type="button" class="btn btn-secondary botao-padrao border-0" data-bs-dismiss="modal">Ver produtos</button>
                </div>
              </div>
            </div>
        </div>

        <!-- PLANOS -->
        <section class="py-5">
            <h2 class="text-center fw-bold pb-1">Nossos serviços</h2>
      
            <div class="container d-flex justify-content-around flex-wrap">
      
              <div class="card m-4" style="width: 20rem;">
                <img src="imagens/bronze.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title py-2 fw-bold">Plano 1</h5>
                  <p class="card-text"></p>
                  <a href="#" class="btn botao-padrao w-100 fw-bold" data-bs-toggle="offcanvas" data-bs-target="#canvas-1"
                    aria-controls="offcanvasRight">Quero detalhes</a>
                </div>
              </div>
      
              <div class="card m-4" style="width: 20rem;">
                <img src="imagens/prata.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Plano 2</h5>
                  <p class="card-text"></p>
                  <a href="#" class="btn botao-padrao w-100 fw-bold mt-3" data-bs-toggle="offcanvas"
                    data-bs-target="#canvas-2" aria-controls="offcanvasRight">Quero detalhes</a>
                </div>
              </div>
      
              <div class="card m-4" style="width: 20rem;">
                <img src="imagens/ouro.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Plano 3</h5>
                  <p class="card-text"></p>
                  <a href="#" class="btn botao-padrao w-100 fw-bold mt-3" data-bs-toggle="offcanvas"
                    data-bs-target="#canvas-3" aria-controls="offcanvasRight">Quero detalhes</a>
                </div>
              </div>
            </div>
        </section>

        <!-- CANVAS (ABREM QUANDO CLICA NO PLANO) -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="canvas-1" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasRightLabel">Plano 1</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div class="accordion" id="accordionExample">
        
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accordionCafe" aria-expanded="false" aria-controls="collapseOne">
                      Detalhe plano 1
                    </button>
                  </h2>
                  <div id="accordionCafe" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint sit similique quibusdam commodi iure unde, aperiam cum nobis, eum id sed eaque ullam voluptate dolorum laborum veniam, delectus corrupti. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo soluta a quam temporibus culpa nam obcaecati, consectetur, corporis amet eum ipsam sit molestiae! Tempora et neque, rerum quia ut iste?
                    </div>
                  </div>
                </div>
        
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accordionBistro" aria-expanded="false" aria-controls="collapseOne">
                      Detalhe plano 1
                    </button>
                  </h2>
                  <div id="accordionBistro" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum ratione, nihil culpa aut dolorum sed earum incidunt accusamus totam labore odio quia delectus sapiente molestias fugit recusandae. Ab, aliquid temporibus!
                    </div>
                  </div>
                </div>
        
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accordionCoworking" aria-expanded="false" aria-controls="collapseOne">
                      Detalhe plano 1
                    </button>
                  </h2>
                  <div id="accordionCoworking" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias corrupti possimus dicta harum odit vero itaque! Pariatur soluta explicabo suscipit? Eos quam nulla ex? Harum aliquid saepe libero impedit error?
                    </div>
                  </div>
                </div>
        
              </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="canvas-2" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasRightLabel">Plano 2</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div class="accordion" id="accordionExample">
        
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accordionCafe" aria-expanded="false" aria-controls="collapseOne">
                      Detalhe plano 2
                    </button>
                  </h2>
                  <div id="accordionCafe" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto facere tenetur velit odio asperiores! Similique, nesciunt a, facere velit temporibus dignissimos repellat et molestias, sequi harum nobis voluptatem provident sint.
                    </div>
                  </div>
                </div>
        
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accordionBistro" aria-expanded="false" aria-controls="collapseOne">
                      Detalhe plano 2
                    </button>
                  </h2>
                  <div id="accordionBistro" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam omnis asperiores minus porro praesentium repudiandae recusandae, id, esse quas fugit iusto consequuntur vero. Maxime, dolorem veritatis enim iste et doloremque!
                    </div>
                  </div>
                </div>
        
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accordionCoworking" aria-expanded="false" aria-controls="collapseOne">
                      Detalhe plano 2
                    </button>
                  </h2>
                  <div id="accordionCoworking" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda obcaecati, explicabo officiis possimus, facilis eos dolores beatae sint inventore quo, itaque nostrum ipsam reprehenderit! Ab perspiciatis deleniti delectus illo voluptatem.
                    </div>
                  </div>
                </div>
        
              </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="canvas-3" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasRightLabel">Plano 3</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div class="accordion" id="accordionExample">
        
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accordionCafe" aria-expanded="false" aria-controls="collapseOne">
                      Detalhe plano 3
                    </button>
                  </h2>
                  <div id="accordionCafe" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. A sapiente provident suscipit voluptatum ab vitae explicabo, maiores voluptate assumenda officiis, quibusdam eveniet repudiandae fugit quas repellat vel aspernatur, veritatis amet?
                    </div>
                  </div>
                </div>
        
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accordionBistro" aria-expanded="false" aria-controls="collapseOne">
                      Detalhe plano 3
                    </button>
                  </h2>
                  <div id="accordionBistro" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellat unde officia porro beatae sequi animi nostrum, velit consequuntur id neque nisi necessitatibus iure dolore quos cupiditate, voluptatum dicta deserunt.
                      bistrô!
                    </div>
                  </div>
                </div>
        
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accordionCoworking" aria-expanded="false" aria-controls="collapseOne">
                      Detalhe plano 3
                    </button>
                  </h2>
                  <div id="accordionCoworking" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et unde quod nulla incidunt suscipit porro harum voluptatem totam, deleniti optio tenetur? Nostrum laborum repellat eum sunt cumque illo, neque cum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quasi repellat nemo alias expedita placeat aliquam illum deleniti velit, provident ipsum tenetur saepe esse repellendus dolorum consectetur, reprehenderit quam voluptatum.
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>