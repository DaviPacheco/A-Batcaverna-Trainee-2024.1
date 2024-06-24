<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LandingPageBatCaverna</title>
    <link rel="stylesheet" href="/public/css/LandingPage.css" />
<!-- links da nav -->
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> 
        <script defer src="../../../public/js/index.js"></script>
<!-- links do footer -->
        <link rel="stylesheet" href="../../../public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php
    require_once "navbar.html";
    ?>
    <div id="BlocoTotalLandingPage" class="BlocoTotalLP">
      
      
      <section id="abertura">
        <img
          src="/public/assets/BatcavernaArkham 1.png"
          alt="Imagem da batcaverna com bordas arredondadas"
        />
        <nav>
          <a href="#BotaoVerMais" id="BotaoSobreNos" class="BotaoInicial"
            >SOBRE NÓS</a
          >
          <a
            href="#TextoUltimasPublicacoes"
            id="BotaoIrPublicacoes"
            class="BotaoInicial"
            >PUBLICAÇÕES</a
          >
        </nav>
        <div id="titulo">
          <h1>
            BEM-VINDO À BATCAVERNA, BLOG FOCADO EM TUDO QUE ENVOLVE A DC COMICS!
          </h1>
        </div>
        <p id="ParagrafoModelo1">
          <span class="frase1">
            BLOG IDEAL PARA OS<br />
            INTERESSADOS PELA DC.<br
          /></span>
          <span class="frase2">
            DESDE OS MENOS CONHECEDORES<br />
            ATÉ OS OS FÃS MAIS AFICIONADOS!
          </span>
        </p>
        <p id="ParagrafoModelo2">
          <span class="frase1">
            BLOG IDEAL PARA OS INTERESSADOS PELA DC.
            <br />
          </span>
          <span class="frase2">
            DESDE OS MENOS CONHECEDORES ATÉ OS OS FÃS MAIS AFICIONADOS!
          </span>
        </p>
      </section>
      <ul id="parteCentral">
        <li class="PorcoesCentrais">
          <img
            id="BatmanLateral"
            src="/public/assets/ImagemBatmanLateral.jpg"
            alt="Imagem do batman etre prédios e destruição"
          />
        </li>
        <li class="PorcoesCentrais">
          <div class="PorteCentralModelo ModeloA">
            <div class="RetanguloVermelhoCentral">
              <h2>AQUI VOCÊ ENCONTRA:</h2>
            </div>
            <ul id="Lista2">
              <li>
                <ul class="ListaInterna LI1">
                  <li>
                    <img
                      id="LogoDc"
                      src="/public/assets/DC_Comics_logo 1.png"
                      alt="Imagem de logo da Dc Comics em azul"
                    />
                    <div>
                      <h3>HISTÓRIA DA DC</h3>
                    </div>
                  </li>
                  <li>
                    <img
                      id="Interrogacao"
                      src="/public/assets/ImagemInterrogação.png"
                      alt="Imagem arredondada com interrgação preta em fundo vermelho"
                    />
                    <div>
                      <h3>CURIOSIDADES</h3>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="ListaInterna LI2">
                  <li>
                    <img
                      id="DailyPlanet"
                      src="/public/assets/DailyPlanet2.png"
                      alt="Imagem da logo do fictício Daily Planet"
                    />
                    <div>
                      <h3>NOTÍCIAS</h3>
                    </div>
                  </li>
                  <li>
                    <img
                      id="BatmanFatosDiversos"
                      src="/public/assets/BatmanFatosDiversos.png"
                      alt="Imagem do batman em fundo transparente"
                    />
                    <div id="BalaoFatosDiversos">
                      <h3>FATOS DIVERSOS</h3>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="PorteCentralModelo ModeloB">
            <div class="RetanguloVermelhoCentral">
              <h2>PROPÓSITO:</h2>
            </div>
            <ul id="BlocoDoProposito">
              <li>
                <svg
                  id="seta"
                  width="36"
                  height="24"
                  viewBox="0 0 36 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M35.0607 13.0607C35.6464 12.4749 35.6464 11.5251 35.0607 10.9393L25.5147 1.3934C24.9289 0.807611 23.9792 0.807611 23.3934 1.3934C22.8076 1.97918 22.8076 2.92893 23.3934 3.51472L31.8787 12L23.3934 20.4853C22.8076 21.0711 22.8076 22.0208 23.3934 22.6066C23.9792 23.1924 24.9289 23.1924 25.5147 22.6066L35.0607 13.0607ZM1.02204e-08 13.5L34 13.5L34 10.5L-1.02204e-08 10.5L1.02204e-08 13.5Z"
                    fill="url(#paint0_linear_219_378)"
                  />
                  <defs>
                    <linearGradient
                      id="paint0_linear_219_378"
                      x1="3.40682e-09"
                      y1="12.5"
                      x2="34"
                      y2="12.5"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-opacity="0.72" />
                      <stop offset="1" stop-color="#CB2523" />
                    </linearGradient>
                  </defs>
                </svg>
              </li>
              <li>
                <p>
                  Nesse blog, temos o objetivo de informar sobre a história da
                  Detetive Comics, publicar notícias sobre sua produção de
                  conteúdo e seus bastidores, bem como trazer as mais variadas
                  curiosidades e fatos sobre suas obras e personagens. Fazemos
                  isso por meio frequentes publicações, como as mostradas
                  abaixo.
                </p>
              </li>
            </ul>
          </div>
        </li>
      </ul>
      <section>
        <ul id="TextoUltimasPublicacoes">
          <li>
            <svg
              id="seta2"
              width="102"
              height="38"
              viewBox="0 0 102 38"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M100.768 20.7678C101.744 19.7915 101.744 18.2085 100.768 17.2322L84.8579 1.32233C83.8816 0.34602 82.2986 0.34602 81.3223 1.32233C80.346 2.29864 80.346 3.88155 81.3223 4.85786L95.4645 19L81.3223 33.1421C80.346 34.1184 80.346 35.7014 81.3223 36.6777C82.2986 37.654 83.8816 37.654 84.8579 36.6777L100.768 20.7678ZM6.63779e-09 21.5L99 21.5L99 16.5L-6.63779e-09 16.5L6.63779e-09 21.5Z"
                fill="url(#paint0_linear_219_376)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_219_376"
                  x1="1.32756e-09"
                  y1="19.5"
                  x2="99"
                  y2="19.5"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#B5B5B5" />
                  <stop offset="1" stop-color="#CB2523" />
                </linearGradient>
              </defs>
            </svg>
          </li>
          <li>
            <h2>ÚLTIMAS PUBLICAÇÕES:</h2>
          </li>
        </ul>
        <section id="ParteDosPosts">
          <ul id="CaixaDePosts">
            <?php 
            $kont=1;
            foreach($posts as $post): 
            if($kont==1){
            ?>
            <li class="BlocoAPublicacoes">
              <div class="PostLandingPage Maior">
                <img
                  class="ImagemPost1"
                  src="/public/assets/BatmanPorvisórioPost.jpg"
                  alt="Imagem do Batman do futuro com lua ao fundo"
                />
                <h3 class="Titulo1"><?= substr( $post->title,0,25 ) ?></h3>
                <ul class="TextoDescritivo TDPost1">
                  <li class="LinhaLateral LLPost1"></li>
                  <li class="ParteEscrita PEPost1">
                    <?= substr( $post->content,0,110 ) . '...'?>
                  </li>
                </ul>
                <div class="NomeDoAutor NA1">Autor: <?= $post->author ?></div>
                <a href="" class="BotaoLerMais BM1"><p>Ler Mais</p></a>
              </div>
            </li>
            <?php }
            if($kont==2 || $kont==4){
            ?>
            <li class="ModeloDePost2">
             
              <ul class="ListaDosPostsMenores">
                <li class="PostLandingPage MenorCima" >
                  <img
                    class="ImagemPost2"
                    src="/public/assets/BatmanPorvisórioPost.jpg"
                    alt="Imagem do Batman do futuro com lua ao fundo e céu vermelho"
                  />
                  <h3 class="Titulo2"><?= substr( $post->title,0,25 ) ?></h3>
                  <ul class="TextoDescritivo TDPost2">
                    <li class="LinhaLateral LLPost2"></li>
                    <li class="ParteEscrita PEPost2">
                      <p>
                      <?= substr( $post->content,0,110 ) . '...'?>
                      </p>
                    </li>
                  </ul>
                  <div class="NomeDoAutor NA2">Autor: <?= $post->author ?></div>
                  <a href="" class="BotaoLerMais BM2"><p>Ler Mais</p></a>
                </li>
                <?php } 
                if($kont==3 || $kont==5) {  
                ?> 
                <li class="PostLandingPage MenorBaixo">
                  <img
                    class="ImagemPost3"
                    src="/public/assets/BatmanPorvisórioPost.jpg"
                    alt="Imagem do Batman do futuro com lua ao fundo e céu vermelho"
                  />
                  <h3 class="Titulo3"><?= substr( $post->title,0,25 ) ?></h3>
                  <ul class="TextoDescritivo TDPost3">
                    <li class="LinhaLateral LLPost3"></li>
                    <li class="ParteEscrita PEPost3">
                      <p>
                      <?= substr( $post->content,0,110 ) . '...'?>
                      </p>
                    </li>
                  </ul>
                  <div class="NomeDoAutor NA3">Autor: <?= $post->author ?></div>
                  <a href="" class="BotaoLerMais BM3"><p>Ler Mais</p></a>
                </li>
              </ul>
              
            </li>
            <?php } ;
            $kont++;
            endforeach;
                if($kont==3 || $kont==5) { 
            ?>
            
            </ul>
            </li>
            <?php } ?>
          </ul>
          <svg
            id="seta3"
            width="85"
            height="115"
            viewBox="0 0 85 115"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M83.2142 91.7229C84.6234 90.4092 84.6938 88.1943 83.3714 86.7757L61.8212 63.6587C60.4988 62.2402 58.2843 62.1552 56.8751 63.4689C55.4659 64.7826 55.3955 66.9976 56.7179 68.4161L75.8736 88.9645L55.4605 107.994C54.0513 109.308 53.9809 111.523 55.3033 112.941C56.6257 114.36 58.8402 114.445 60.2494 113.131L83.2142 91.7229ZM66.8337 92.1201L80.7086 92.6526L80.9309 85.6562L67.056 85.1236L66.8337 92.1201Z"
              fill="#CC2524"
            />
            <path
              d="M77 88.9926C-0.958083 89.7573 -1.30612 31.3162 8.26463 2"
              stroke="#CC2524"
              stroke-width="7"
            />
          </svg>
          <a href="/post_list" id="BotaoVerMais"><span>Ver Mais Publicações</span></a>
          <img
            id="Logo2"
            src="/public/assets/Logo Batcaverna Vermelho.svg"
            alt="Logo BatCaverna em vermelho"
          />
          
        </section>
      </section>
    </div>
    <?php
    require_once "footer.html";
    ?>
  </body>
</html>
