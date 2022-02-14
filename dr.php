<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diário Randômico 1 - Seca de Nanquim</title>
  <meta name="Description" content="Acesse nossa página, leia e adquira o melhor do quadrinho nacional independente!">
  <link rel="shortcut icon" href="img/tab_thumb.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
      <section class="w3-container">

        <article class="social">
          <ul>
            <li><a href="https://facebook.com/secadenanquim" target="_blank" rel="noopener"><img src="img/facebook.png"
                  alt="Página do Facebook"></a></li>
            <li><a href="https://instagram.com/secadenanquim" target="_blank" rel="noopener"><img
                  src="img/instagram.png" alt="Página do Instagram"></a></li>
            <li><a href="https://www.youtube.com/user/danilonarukamy/videos"><img src="img/youtube.png" alt="Canal parceiro do Youtube"></a></li>
          </ul>

        </article>

        <a href="dr.php"><button class="cap">Arco 1</button></a>
        <a href="dr2.php"><button class="cap">Arco 2</button></a>
        <div class="w3-center">
          <button class="w3-button" onclick="plusDivs(-1)">&#10094; Anterior</button>
          <button class="w3-button" onclick="plusDivs(1)">Próximo &#10095;</button>

          <div class="w3-content" style="max-width:800px">
            <img class="mySlides" src="img/dr/a1/1.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/2.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/3.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/4.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/5.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/6.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/7.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/8.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/9.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/10.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/11.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/12.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/13.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/14.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/15.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/16.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/17.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/18.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/19.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/20.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/21.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/22.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/23.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/24.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/25.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/26.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/27.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/28.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/29.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/30.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/31.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/32.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/33.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/34.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/35.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/36.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/37.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/38.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/39.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/40.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/41.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/42.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/43.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/44.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/45.jpg" style="width:100%">
            <img class="mySlides" src="img/dr/a1/46.jpg" style="width:100%">
          </div>

          <button class="w3-button demo" onclick="currentDiv(1)">1</button>
          <button class="w3-button demo" onclick="currentDiv(2)">2</button>
          <button class="w3-button demo" onclick="currentDiv(3)">3</button>
          <button class="w3-button demo" onclick="currentDiv(4)">4</button>
          <button class="w3-button demo" onclick="currentDiv(5)">5</button>
          <button class="w3-button demo" onclick="currentDiv(6)">6</button>
          <button class="w3-button demo" onclick="currentDiv(7)">7</button>
          <button class="w3-button demo" onclick="currentDiv(8)">8</button>
          <button class="w3-button demo" onclick="currentDiv(9)">9</button>
          <button class="w3-button demo" onclick="currentDiv(10)">10</button>
          <button class="w3-button demo" onclick="currentDiv(11)">11</button>
          <button class="w3-button demo" onclick="currentDiv(12)">12</button>
          <button class="w3-button demo" onclick="currentDiv(13)">13</button>
          <button class="w3-button demo" onclick="currentDiv(14)">14</button>
          <button class="w3-button demo" onclick="currentDiv(15)">15</button>
          <button class="w3-button demo" onclick="currentDiv(16)">16</button>
          <button class="w3-button demo" onclick="currentDiv(17)">17</button>
          <button class="w3-button demo" onclick="currentDiv(18)">18</button>
          <button class="w3-button demo" onclick="currentDiv(19)">19</button>
          <button class="w3-button demo" onclick="currentDiv(20)">20</button>
          <button class="w3-button demo" onclick="currentDiv(21)">21</button>
          <button class="w3-button demo" onclick="currentDiv(22)">22</button>
          <button class="w3-button demo" onclick="currentDiv(23)">23</button>
          <button class="w3-button demo" onclick="currentDiv(24)">24</button>
          <button class="w3-button demo" onclick="currentDiv(25)">25</button>
          <button class="w3-button demo" onclick="currentDiv(26)">26</button>
          <button class="w3-button demo" onclick="currentDiv(27)">27</button>
          <button class="w3-button demo" onclick="currentDiv(28)">28</button>
          <button class="w3-button demo" onclick="currentDiv(29)">29</button>
          <button class="w3-button demo" onclick="currentDiv(30)">30</button>
          <button class="w3-button demo" onclick="currentDiv(31)">31</button>
          <button class="w3-button demo" onclick="currentDiv(32)">32</button>
          <button class="w3-button demo" onclick="currentDiv(33)">33</button>
          <button class="w3-button demo" onclick="currentDiv(34)">34</button>
          <button class="w3-button demo" onclick="currentDiv(35)">35</button>
          <button class="w3-button demo" onclick="currentDiv(36)">36</button>
          <button class="w3-button demo" onclick="currentDiv(37)">37</button>
          <button class="w3-button demo" onclick="currentDiv(38)">38</button>
          <button class="w3-button demo" onclick="currentDiv(39)">39</button>
          <button class="w3-button demo" onclick="currentDiv(40)">40</button>
          <button class="w3-button demo" onclick="currentDiv(41)">41</button>
          <button class="w3-button demo" onclick="currentDiv(42)">42</button>
          <button class="w3-button demo" onclick="currentDiv(43)">43</button>
          <button class="w3-button demo" onclick="currentDiv(44)">44</button>
          <button class="w3-button demo" onclick="currentDiv(45)">45</button>
          <button class="w3-button demo" onclick="currentDiv(46)">46</button>
        </div>
      </section>

      <a href="https://seca-de-nanquim.lojaintegrada.com.br/" target="_blank" rel="noopener">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="style.js"></script>
</body>

</html>