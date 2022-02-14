<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="Acesse nossa página, leia e adquira o melhor do quadrinho nacional independente!">
  <title>Quadrinhos - Seca de Nanquim</title>
  <link rel="shortcut icon" href="img/tab_thumb.png">
  <link rel="stylesheet" href="style.css">
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
        <li><a href="https://seca-de-nanquim.lojaintegrada.com.br" target="_blank" rel="noopener"
            aria-label="Link da loja">Loja</a></li>
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
          <li><a href="https://seca-de-nanquim.lojaintegrada.com.br" target="_blank" rel="noopener"
              aria-label="Link da loja">Loja</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <section id="meio">

      <article class="hqs banner">
        <a href="bc.php">
          <section id="bc" class="obra">
            <div>
              <h6>Bloqueio Criativo</h6>
              <h7>Yuri Fujimoto</h7>
            </div>
            <img src="img/thumb_bc.jpg" alt="ícone Bloqueio Criativo">
            <p class="snps">
              Iniciante ou profissional, todo artista como Daniel passa por um momento que não consegue
              criar mais nada. Mas qual a solução? Seja qual for, nunca confie em atalhos, pois pode ser encrenca!
            </p>

          </section>
        </a>

        <a href="cep.php">
          <section id="obra2" class="obra">
            <div>
              <h6>A Coelha e o Picolé</h6>
              <h7>Gui Feliciano</h7>
            </div>
            <img src="img/thumb_cep.jpg" alt="ícone A Coelha e o Picolé">
            <p class="snps">
              Babuelha levava uma vida feliz até o fim do ensino médio. Porém por não decidir qual carreira seguir,
              acaba indo parar numa escola conhecida como "inferno na terra".
            </p>
          </section>
        </a>

        <a href="cmcp.php">
          <section id="obra3" class="obra">
            <div>
              <h6>Coração Mole, Coração de Pedra</h6>
              <h7>Bárbara Bueno</h7>
            </div>
            <img src="img/thumb_cmcp.jpg" alt="ícone Coração Mole, Coração de Pedra">
            <p class="snps">
              Num país onde o sexo foi banalizado, uma mulher criada por uma figura feminina forte busca não só amor
              verdadeiro, mas também a auto-aceitação de sua natureza física e emocional.
            </p>
          </section>
        </a>

          <section id="obra4" class="obra">
            <div>
              <h6>O Diário Randômico</h6>
              <h7>Gui Feliciano</h7>
            </div>
            <img src="img/thumb_dr.jpg" alt="ícone O Diário Randômico">
            <p class="snps">
              Aventuras e desventuras envolvendo os guardiões do Diário da realidade.
              <br>
              <button class="cap"><a href="dr.php">Arco 1</a>
              </button>
              <button class="cap"><a href="dr2.php">Arco 2</a>
              </button>
            </p>

          </section>

        <a href="fef.php">
          <section id="fef" class="obra">
            <div>
              <h6>Flores & Fúria</h6>
              <h7>Deni Akio</h7>
            </div>
            <img src="img/thumb_fef.jpg" alt="ícone Flores & Fúria">
            <p class="snps">
              Em um arquipélago tomado pelo caos social, Sophia tenta criar um ciclo de
              gentileza oferecendo flores a seus habitantes, até que toca o coração de Steve, que passa a acompanhá-la.
            </p>

          </section>
        </a>

        <a href="rab.php">
          <section id="obra6" class="obra">
            <div>
              <h6>Rock, A Busca</h6>
              <h7>Danilo Hasor</h7>
            </div>
            <img src="img/thumb_rab.jpg" alt="ícone Bloqueio Criativo">
            <p class="snps">
              O jovem Jimi Roque teve um sonho onde se viu frente a frente com lendas do
              Rock que lhe passaram uma mensagem um tanto inusitada. E agora - acreditar ou não nesse sonho?
            </p>
          </section>
        </a>

      </article>

      <a href="https://seca-de-nanquim.lojaintegrada.com.br/" target="_blank" rel="noopener" aria-label="Link da Loja">
        <article class="loja_hq">
          <img src="img/loja.png" alt="Acesse nossa loja!">
          <h4>Curtiu? Compre na loja e receba em casa com a história completa!</h4>
        </article>
      </a>
    </section>

  </main>

  <footer>
    <section>
      <img src="img/logo_seca.png" alt="Logo Seca de Nanquim">

      <ul class="menufoot">
        <li><a href="index.php">Início</a></li>
        <li><a href="hqs.php">Quadrinhos</a></li>
        <li><a href="oseca.php">O Seca</a></li>
        <li><a href="https://seca-de-nanquim.lojaintegrada.com.br" target="_blank" rel="noopener"
            aria-label="Link da loja">Loja</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </section>

    <p id="disclaimer">Seca de Nanquim, 2021. Todos os direitos reservados.</p>

  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="style.js"></script>

</body>

</html>