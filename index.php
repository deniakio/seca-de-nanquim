<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="Acesse nossa página, leia e adquira o melhor do quadrinho nacional independente!">
  <meta name="theme-color" content="#000">
  <title>Início - Seca de Nanquim</title>
  <link rel="shortcut icon" href="img/tab_thumb.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" href="img/icon-152x152.png">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <nav>
      <button id="menumob" aria-label="Menu do Site" onclick="openNav()"><svg xmlns="http://www.w3.org/2000/svg"
          width="24" height="24" viewBox="0 0 24 24">
          <path d="M0 0h24v24H0z" fill="none" />
          <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" /></svg>
      </button>
      <a href="index.php">
        <img src="img/logotipo_seca.png" alt="Logotipo do Seca de Nanquim" id="logo">

        <h1 id="titulo">Seca de Nanquim</h1>

      </a>
      <ul>
        <li>
          <button class="dropdown"><a href="hqs.php" class="dropbtn">Quadrinhos</a>
            <div class="dropdown-content">
              <a href="bc.php">Bloqueio Criativo</a>
              <a href="cep.php">A Coelha e o Picolé</a>
              <a href="cmcp.php">Coração Mole, Couro de Pedra</a>
              <a href="dr.php">O Diário Randômico</a>
              <a href="fef.php">Flores & Fúria</a>
              <a href="rab.php">Rock, A Busca</a>
          </button>
          </div>
        </li>
        <li><a href="oseca.php">O Seca</a></li>
        <li><a href="https://seca-de-nanquim.lojaintegrada.com.br" target="_blank" rel="noopener">Loja</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>

      <div id="sidebar" class="navmob">
        <ul>
          <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          </li>
          <li><a href="hqs.php">Quadrinhos</a>

            <button id="hqmob" aria-label="Menu do site" onclick="openDrop()">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="10px"
                viewBox="0 0 444.819 444.819" style="enable-background:new 0 0 444.819 444.819;" xml:space="preserve">
                <g>
                  <path d="M434.252,114.203l-21.409-21.416c-7.419-7.04-16.084-10.561-25.975-10.561c-10.095,0-18.657,3.521-25.7,10.561
             L222.41,231.549L83.653,92.791c-7.042-7.04-15.606-10.561-25.697-10.561c-9.896,0-18.559,3.521-25.979,10.561l-21.128,21.416
             C3.615,121.436,0,130.099,0,140.188c0,10.277,3.619,18.842,10.848,25.693l185.864,185.865c6.855,7.23,15.416,10.848,25.697,10.848
             c10.088,0,18.75-3.617,25.977-10.848l185.865-185.865c7.043-7.044,10.567-15.608,10.567-25.693
             C444.819,130.287,441.295,121.629,434.252,114.203z" />
                </g>
              </svg>
            </button>
            <div id="menuhqmob">
              <ul>
                <li><a href="bc.php">Bloqueio Criativo</a></li>
                <li><a href="cep.php">A Coelha e o Picolé</a></li>
                <li><a href="cmcp.php">Coração Mole, Couro de Pedra</a></li>
                <li><a href="dr.php">O Diário Randômico</a></li>
                <li><a href="fef.php">Flores & Fúria</a></li>
                <li><a href="rab.php">Rock, A Busca</a></li>
              </ul>
            </div>
          </li>
          <li><a href="oseca.php">O Seca</a></li>
          <li><a href="https://seca-de-nanquim.lojaintegrada.com.br" target="_blank" rel="noopener">Loja</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <section id="meio">
      <article class="banner">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="https://seca-de-nanquim.lojaintegrada.com.br" target="_blank" rel="noopener">
                  <img src="img/banner1.png" class="d-block w-100" alt="Loja de Quadrinhos">
                  <div class="carousel-caption">
                    <h5>Loja no Ar!</h5>
                    <p>Compre aqui nossos impressos e receba em casa!</p>
                  </div>
                </a>
              </div>
              <div class="carousel-item">
                <a href="https://butantagibicon.com.br/" target="_blank" rel="noopener">
                  <img src="img/banner2.png" class="d-block w-100" alt="Butantã Gibi Con 2020">
                  <div class="carousel-caption">
                    <h5>Estamos no Gibi Con 2020!</h5>
                    <p>Clique e acesse o evento online!</p>
                  </div>
                </a>
              </div>
              <div class="carousel-item">
                <a href="hqs.php">
                  <img src="img/banner3.png" class="d-block w-100" alt="Galeria de Quadrinhos">
                  <div class="carousel-caption">
                    <h5>Acesse nossa Galeria</h5>
                    <p>Clique aqui e leia gratuitamente as nossas HQs!</p>
                  </div>
                </a>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </article>

    </section>

    <section id="fundo">

      <article class="quadrinhos">

        <span><a href="hqs.php">
            Leia as prévias de nossas HQs!

        </span>
        <img src="img/brisa.png" alt="ícone da galeria">
        <h3>Clique aqui e acesse nossa galeria de quadrinhos - é de graça!</h3>
        </a>

      </article>
      <a href="https://seca-de-nanquim.lojaintegrada.com.br" target="_blank" rel="noopener" aria-label="Link para loja">
        <article class="loja">
          <h2>Leu e quer nos apoiar?</h2>
          <img src="img/loja.png" id="iconloja" alt="Acesse nossa loja!">
          <h3>Compre artes e HQs na nossa loja (é 100% segura)"</h3>
        </article>
      </a>

      <article class="evento">
        <div>
          <h3>Ou você pode nos encontrar no próximo evento:</h3>
          <img src="img/butanta_gibicon_2020_hqmix.png" alt="Feira Internacional de Quadrinhos 2020">
        </div>
        <div>
          <h3>Siga a gente nas nossas redes para saber de outros eventos também!</h3>
          <ul>
            <li><a href="https://facebook.com/secadenanquim" target="_blank" rel="noopener"><img src="img/facebook.png"
                  alt="Página do Facebook" class="socialitem"></a></li>
            <li><a href="https://instagram.com/secadenanquim" target="_blank" rel="noopener"><img
                  src="img/instagram.png" alt="Página do Instagram" class="socialitem"></a></li>
            <li><a href="https://www.youtube.com/user/danilonarukamy/videos"><img src="img/youtube.png"
                  alt="Canal parceiro do Youtube" class="socialitem"></a></li>
          </ul>
        </div>
      </article>

    </section>
  </main>

  <footer>
    <section>
      <img src="img/logo_seca.png" alt="Logo Seca de Nanquim">

      <ul class="menufoot">
        <li><a href="index.php">Início</a></li>
        <li><a href="hqs.php">Quadrinhos</a></li>
        <li><a href="oseca.php">O Seca</a></li>
        <li><a href="https://seca-de-nanquim.lojaintegrada.com.br" target="_blank" rel="noopener">Loja</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </section>

    <p id="disclaimer">Seca de Nanquim, 2021. Todos os direitos reservados.</p>

  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="style.js"></script>
  <script>
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('sw.js', { scope: '/' })
        .then(function (registration) {
          console.log('Service Worker is supported')
        });
      navigator.serviceWorker.ready.then(function (registration) {
        console.log('Service Worker Ready');
      })
    }
  </script>

</body>

</html>