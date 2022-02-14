<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="Acesse nossa página, leia e adquira o melhor do quadrinho nacional independente!">
  <title>Sobre Nós - Seca de Nanquim</title>
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
      <article class="sobre banner">
        <p>
          O Seca de Nanquim nasceu durante as aulas do Fanzine nas Zonas de Sampa, projeto premiado pelo troféu HQMix
          que levava workshops
          gratuitos de quadrinhos para as bibliotecas municipais da capital paulista ministrados por quadrinistas
          famosos como Thiago Spyked e Daniel Steves. </p>

        <img src="img/fanzines.jpg" alt="Logo do programa Fanzines nas Zonas de Sampa" id="fanzines">

        <p id="sobre2">
          Especificamente em 2014 e na Biblioteca Paulo Setubal, em plena crise hídrica do sistema Cantareira no estado,
          esse grupo de jovens de todas as regiões periféricas de SP (e de MG também) decidiu se organizar para levar o
          que aprendeu a outro patamar.
        </p>
        <div id="workshop">
          <img src="img/secawork.jpg" alt="Foto do Workshop">
          <h5>Workshop ministrado pelo grupo em 2016</h5>
        </div>
        <p>
          Desde então, já tivemos muitas mudanças de membros, quadrinhos lançados e, principalmente, muitos eventos em
          que expusemos nossas artes. Algumas das principais Artist's Alleys que participamos:
        </p>
        <div id="feiras">
          <ul>
            <li>
              <img src="img/fgdq2019_logo_site.png" alt="logo Festival Guia dos Quadrinhos">
              <h5>Principal feira de colecionadores de SP</h5>
            </li>
            <li>
              <img src="img/fiq_2018.png" alt="logo Feira Internacional de Quadrinhos de Belo Horizonte">
              <h5>Maior feira de quadrinhos da América Latina, em BH</h5>
            </li>
            <li>
              <img src="img/butanta.png" alt="logo Butantã Gibi Con">
              <h5>Grande convenção de quadrinistas de SP</h5>
            </li>
            <li>
              <img src="img/hqfest.png" alt="logo Indaiatuba HQ Fest">
              <h5>Principal evento de HQ de Indaiatuba-SP</h5>
            </li>
          </ul>
        </div>

        <div id="membros">
          <h2>Membros Atuais</h2>
          <ul>
            <li>
              <a href="https://www.instagram.com/ahri.n/" target="_blank" rel="noopener">
                <img src="img/arin.jpg" alt="Foto da Artista">
                <h5>Arin</h5>
              </a>
            </li>


            <li>
              <a href="https://www.instagram.com/barbaraartista/" target="_blank" rel="noopener"><img
                  src="img/barbara.jpg" alt="Foto da Artista">
                <h5>Bárbara Bueno</h5>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/personbruna/" target="_blank" rel="noopener">
                <img src="img/bruna.jpg" alt="Foto da Artista">
                <h5>Bruna Person</h5>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/deniakio/" target="_blank" rel="noopener">
                <img src="img/deni.jpg" alt="Foto do Artista">
                <h5>Deni Akio</h5>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/felicianogui/" target="_blank" rel="noopener">
                <img src="img/gui.jpg" alt="Foto do Artista">
                <h5>Gui Feliciano</h5>
              </a>
            </li>
          </ul>
        </div>


        <div id="membros">
          <h2>Ex-Membros e Parceiros</h2>
          <ul>
            <li>
              <a href="https://cos.tv/channel/15800217309980672" target="_blank" rel="noopener">
                <img src="img/danilo.jpg" alt="Foto do Artista">
                <h5>Danilo Hasor</h5>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/leonardo.chibi.7" target="_blank" rel="noopener">
                <img src="img/leochibi.jpg" alt="Foto do Artista">
                <h5>Leonardo Chibi</h5>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/weird.pirate" target="_blank" rel="noopener">
                <img src="img/leorib.jpg" alt="Foto do Artista">
                <h5>Leonardo Ribeiro</h5>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/yuyu_fujimoto/" target="_blank" rel="noopener">
                <img src="img/yuri.jpg" alt="Foto do Artista">
                <h5>Yuri Fujimoto</h5>
              </a>
            </li>

          </ul>
        </div>

        <h2>Seca de Nanquim na Mídia</h2>
        22/06/2018 - Matéria publicada no jornal Destak.
        <img id="fanzines" src="img/materia_jornal.png" alt="Print da matéria">
        </p>

        <p>24/05/2018 - Entrevista dos integrantes para a Rádio Exclusiva FM:</p>
        <iframe width="100%" height="400px" title="Entrevista do Seca de Nanquim à Radio Exclusiva FM no Youtube"
          src="https://www.youtube.com/embed/EIAfIF4-b9k" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
        <li><a href="https://seca-de-nanquim.lojaintegrada.com.br" target="_blank" rel="noopener"
            aria-label="Link da loja">Loja</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </section>

    <p id="disclaimer">Seca de Nanquim, 2021. Todos os direitos reservados.</p>

  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="style.js"></script>

</body>

</html>