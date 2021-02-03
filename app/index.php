<?php

include_once("components/head.php")

?>

<main class="main">
  <section id="top" class="section head">
    <div class="wrap">
      <div class="grid">
        <div class="grid_left left">
          <div class="head-a1 grid_left-content animated" data-animate="fadeInLeft" data-delay="500" data-trigger="head">
            <div class="img">
              <img src="img/icons/DropOut-logo.svg" alt="DropOut Logo">
            </div>
          </div>
        </div>
        <div class="grid_right right">
          <div class="head-a2 grid_right-content animated" data-animate="fadeInRight" data-trigger="head" data-delay="14">
            <h2 class="text">Suntem <strong>Lideri</strong> în Web & App Development în Rep. Moldova</h2>
            <div class="btns-container">
              <a href="#portofolio" class="head-a4 animated" data-animate="fadeIn" data-delay="1100" data-trigger="head"><button class="btn btn-white">Vezi Portofolio</button></a>
              <a href="#contact" class="head-a5 animated dealy" data-animate="fadeIn" data-delay="1200" data-trigger="head"><button class="btn btn-transparent white">Cere Ofertă de Preț</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="head-a3 head_arrow-down animated d a-inf" data-animate="bounce" data-delay="1000" data-trigger="head">
      <div class="img">
        <img src="img/icons/arrow-down.svg" alt="Arrow Down">
      </div>
    </div>
  </section>

  <section class="your-project">
    <div class="wrap">
      <div class="your-project__inner">
        <h3 class="your-project-a4 title animated" data-trigger="your-project-a4" data-trigger-hook="1" data-delay="800" data-animate="fadeInDown">Hai să discutăm proiectul tău!</h3>
        <form action="" class="form form-your-project">
          <div class="multiple-input">
            <div class="your-project-a1 single-input animated" data-animate="fadeIn" data-trigger="your-project-a5" data-trigger-hook="1" data-delay="14">
              <label for="name">Numele tău</label>
              <input type="text" placeholder="Alex..." name="name">
            </div>
            <div class="your-project-a2 single-input animated" data-trigger="your-project-a5" data-animate="fadeIn" data-delay="500" data-trigger-hook="1">
              <label for="tel">Numărul tău</label>
              <input type="tel" placeholder="068******" name="tel">
            </div>
            <button type="submit" class="your-project-a3 animated d btn btn-transparent white" data-animate="fadeIn" data-trigger-hook="1" data-trigger="your-project-a5" data-delay="1000">Trimite</button>
          </div>
        </form>
        <p class="your-project-a5 animated text" data-trigger="your-project-a5" data-trigger-hook="0.6" data-delay="1000" data-animate="fadeInUp">*Revenim cu un apel timp de 2 minute</p>
      </div>
    </div>
  </section>

  <section class="testimonials section animateBackground">
    <div class="wrap">
      <div class="testimonials_slideshow">
        <div class="testimonials_box" data-anim-class="fadeInUp" data-logo-color="#002A66" data-text-color="#fff">
          <div class="testimonials_box-img" data-anim-delay="100">
            <img src="img/icons/copmanies/ocean-fish.png" alt="Ocean Fish Logo">
          </div>
          <p class="testimonials_box-message" data-anim-delay="200">O echipă foarte profesionistă, creativă și vizionară. Am fost incantați să lucrăm cu ei, sunt adevărați parteneri, nu angajați.</p>
          <p class="testimonials_box-name" data-anim-delay="300">Alesea Brînzilă1</p>
          <p class="testimonials_box-pos" data-anim-delay="400">Vice-Director, Ocean Fish </p>
        </div>

        <div class="testimonials_box" data-anim-class="fadeInUp" data-logo-color="#FFBD00" data-text-color="#fff">
          <div class="testimonials_box-img" data-anim-delay="100">
            <img src="img/icons/copmanies/google1.png" alt="Google Logo">
          </div>
          <p class="testimonials_box-message" data-anim-delay="200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident consequatur rem libero nam quasi quae dolores. Inventore, eum!.</p>
          <p class="testimonials_box-name" data-anim-delay="300">Lorem, ipsum dolor.</p>
          <p class="testimonials_box-pos" data-anim-delay="400">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="testimonials_box" data-anim-class="fadeInUp" data-logo-color="#002A66" data-text-color="#fff">
          <div class="testimonials_box-img" data-anim-delay="100">
            <img src="img/icons/copmanies/ocean-fish.png" alt="Ocean Fish Logo">
          </div>
          <p class="testimonials_box-message" data-anim-delay="200">O echipă foarte profesionistă, creativă și vizionară. Am fost incantați să lucrăm cu ei, sunt adevărați parteneri, nu angajați.</p>
          <p class="testimonials_box-name" data-anim-delay="300">Alesea Brînzilă1</p>
          <p class="testimonials_box-pos" data-anim-delay="400">Vice-Director, Ocean Fish </p>
        </div>

        <div class="testimonials_box" data-anim-class="fadeInUp" data-logo-color="#FFBD00" data-text-color="#fff">
          <div class="testimonials_box-img" data-anim-delay="100">
            <img src="img/icons/copmanies/google1.png" alt="Google Logo">
          </div>
          <p class="testimonials_box-message" data-anim-delay="200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident consequatur rem libero nam quasi quae dolores. Inventore, eum!.</p>
          <p class="testimonials_box-name" data-anim-delay="300">Lorem, ipsum dolor.</p>
          <p class="testimonials_box-pos" data-anim-delay="400">Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section ourcliet">
    <div class="wrap">
      <div class="ourclient-descrp section-descrp animated" data-animate="fadeIn" data-trigger="ourcliet" data-delay="300">
        <h3>Clienții Noștri:</h3>
        <p>Companii lider în Rep. Moldova și Romania au avut încredere în noi să le oferim soluții și să le ajutăm să își crească afacerea</p>
      </div>
      <div class="ourclient__inner animated" data-trigger="ourclient__inner" data-delay="200" data-animate="fadeInUp" data-trigger-hook="0.7">
        <div class="img">
          <img src="img/sections/inner/companies.png" alt="Our Clients">
        </div>
      </div>
    </div>
  </section>

  <section class="method">
    <div class="wrap">
      <div class="method-descrp section-descrp animated" data-animate="fadeInRight" data-trigger="method">
        <h3>Metoda noastră de lucru:</h3>
      </div>
      <div class="strategy-container">
        <div class="strategy animated dealy" data-animate="fadeInUp" data-delay="100" data-trigger="strategy-container">
          <div class="strategy-img">
            <img src="img/icons/method1.svg" alt="Strategy stage #1">
          </div>
          <div class="strategy-body">
            <h4 class="strategy-name">1. Strategie</h4>
            <p class="strategy-descrp">
              Lucrăm cu dvs. pentru a înțelege problema pe care încercați să o rezolvați și soluția produsului digital la această problemă. Aceasta implică o mulțime de cercetări și teste iterative ale utilizatorilor.
            </p>
          </div>
        </div>

        <div class="strategy animated ddelay-1" data-animate="fadeInUp" data-delay="4000" data-trigger="strategy-container">
          <div class="strategy-img">
            <img src="img/icons/method2.svg" alt="Strategy stage #2">
          </div>
          <div class="strategy-body">
            <h4 class="strategy-name">2. Design și Testare</h4>
            <p class="strategy-descrp">
              Extinzând informațiile acumulate, veți colabora strâns cu echipa noastră de dezvoltare de aplicații pentru a crea un design elegant care să încorporeze cele mai bune practici și tendințe UI / UX. Și testarea utilizatorilor, testarea utilizatorilor și testarea utilizatorilor. Am menționat testarea utilizatorilor?
            </p>
          </div>
        </div>

        <div class="strategy animated" data-animate="fadeInUp" data-delay="100" data-trigger="strategy-container" data-trigger-hook="0.7">
          <div class="strategy-img">
            <img src="img/icons/method3.svg" alt="Strategy stage #3">
          </div>
          <div class="strategy-body">
            <h4 class="strategy-name">3. Development</h4>
            <p class="strategy-descrp">
              Cu metodologia noastră agilă bazată pe scrum, veți primi acumulări iterative la fiecare două săptămâni, ceea ce vă oferă mult timp pentru a le testa și a face ajustări.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cr-landing section whatwecan animated" data-animate="fadeInLeftBg" data-trigger="cr-landing">
    <div class="wrap">
      <div class="grid">
        <div class="cr-landing-left grid_left left">
          <div class="img">
          </div>
        </div>
        <div class="cr-lenading-right grid_right right animated" data-animate="fadeInRight" data-trigger="cr-landing">
          <div class="text">
            <h3>Crearea Landing Page și Magazin Online</h3>
            <p>Dezlănțuie potențialul afacerii tale, cu o soluție digitală perfectă.</p>
          </div>
          <div class="btns-container">
            <a href="#contacts" class="btn btn-transparent white">Cere Oferta</a>
            <a href="#protofolio" class="btn btn-white">Portofolio</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cr-native-app section whatwecan">
    <div class="wrap">
      <div class="grid">
        <div class="cr-native-app-left grid_left left animated" data-animate="fadeInLeft" data-trigger="cr-native-app">
          <div class="text">
            <h3>Crearea Aplicațiilor Native</h3>
            <p>Implinește-ți visul cu o aplicație inovativa.</p>
          </div>
          <div class="btns-container">
            <a href="#contacts" class="btn btn-transparent dark">Cere Oferta</a>
            <a href="#protofolio" class="btn btn-dark">Portofolio</a>
          </div>
        </div>
        <div class="cr-native-app-right grid_right right animated" data-animate="fadeInRight" data-trigger="cr-native-app">
          <div class="img">
            <img src="img/sections/inner/native-app.png" alt="Create Native App">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cr-business section whatwecan">
    <div class="wrap">
      <div class="grid">
        <div class="cr-business-left grid_left left animated" data-animate="fadeInLeft" data-trigger="cr-business">
          <div class="img">
            <img src="img/sections/inner/business.png" alt="Create Business Website">
          </div>
        </div>
        <div class="cr-business-right grid_right right animated" data-animate="fadeInRight" data-trigger="cr-business">
          <div class="text">
            <h3>Crearea Website-uri Business și Aplicații Web</h3>
            <p>E timpul ca afacerea ta să devie măreață. </p>
          </div>
          <div class="btns-container">
            <a href="#contacts" class="btn btn-transparent white">Cere Oferta</a>
            <a href="#protofolio" class="btn btn-white">Portofolio</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cr-branding section whatwecan animated" data-animate="fadeInRightBg" data-trigger="cr-branding">
    <div class="wrap">
      <div class="grid">
        <div class="cr-branding-left grid_left left animated" data-animate="fadeInLeft" data-trigger="cr-branding">
          <div class="text">
            <h3>Crearea Aplicațiilor Native</h3>
            <p>Implinește-ți visul cu o aplicație inovativa.</p>
          </div>
          <div class="btns-container">
            <a href="#contacts" class="btn btn-transparent dark">Cere Oferta</a>
            <a href="#protofolio" class="btn btn-dark">Portofolio</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-numbers">
    <div class="wrap">
      <div class="numbers-container">
        <div class="numbers">
          <h1 class="numbers-value" data-descrp="site-uri">175</h1>
          <p class="number-descrp">Pe parcursul a 7 ani echipa noastra a reusit sa creeze 175 de website-uri complexe.</p>
        </div>
        <div class="numbers">
          <h1 class="numbers-value" data-descrp="ani">7</h1>
          <p class="number-descrp">Developerii Noștri au deja peste 7 ani de experiență în acest domeniu.</p>
        </div>
        <div class="numbers">
          <h1 class="numbers-value" data-descrp="experți">12</h1>
          <p class="number-descrp">Echipa noastra este compusa din 12 profesionisti si consultanti din toate domeniile.</p>
        </div>
        <div class="numbers">
          <h1 class="numbers-value" data-descrp="țări">6</h1>
          <p class="number-descrp">Clienti din Moldova, Romania, Statele Unite, Belgia, Marea Britanie si Italia.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="about-portofolio">
    <div class="wrap">
      <div class="grid">
        <div class="about-portofolio-left grid_left left animated" data-animate="fadeInLeft" data-trigger="about-portofolio">
          <h2>Un <mark>Protofolio</mark> <br> care vorbește pentru el.</h2>
          <p>
            Analizează cum DropOut a oferit soluții superioare pentru companii la nivel. Poate vom implini visul companiei tale in viitor?
          </p>
          <a href="/portofolio" class="inner"><button class="btn btn-dark">Vezi Protofolio</button></a>
        </div>
        <div class="grid_right right">
          <div class="container-icons">
            <a href="#web">
              <div class="about-porotoflio-rigth-a1 icon animated" data-animate="fadeIn" data-trigger="about-portofolio" data-delay="300">
                <div class="icon-img">
                  <img src="img/icons/macbook.png" alt="Macbook">
                </div>
                <p class="icon-text">Web</p>
              </div>
            </a>
            <a href="#branding">
              <div class="about-porotoflio-rigth-a2 icon animated" data-animate="fadeIn" data-trigger="about-portofolio" data-delay="600">
                <div class="icon-img">
                  <img src="img/icons/reader.png" alt="Reader">
                </div>
                <p class="icon-text">Branding</p>
              </div>
            </a>
            <a href="#native">
              <div class=" about-porotoflio-rigth-a3 icon animated" data-animate="fadeIn" data-trigger="about-portofolio" data-delay="900">
                <div class="icon-img">
                  <img src="img/icons/Smartphone.png" alt="Smartphone">
                </div>
                <p class="icon-text">App</p>
              </div>
            </a>
          </div>
        </div>
        <a href="/portofolio" class="single"><button class="btn btn-dark">Vezi Protofolio</button></a>
      </div>
    </div>
  </section>


  <section class="portofolio">
    <div class="wrap">
      <div class="portofolio-container">
        <div class="portofolio-box" id="web">
          <h3 class="portofolio-title">Magazine Online și Landing Pages</h3>
          <div class="portofolio-item porotofolio-slideshow-shop">
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/Group 337.png" alt="">
              </div>
            </div>
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/Group 341.png" alt="">
              </div>
            </div>
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/Group 337.png" alt="">
              </div>
            </div>
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/Group 341.png" alt="">
              </div>
            </div>
          </div>
          <a href="/portofolio" class="portofolio-btn btn btn-dark">Vezi Toate</a>
        </div>

        <div class="portofolio-box" id="branding">
          <h3 class="portofolio-title">Branding & Design</h3>
          <div class="portofolio-item porotofolio-slideshow-shop">
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/helena.png" alt="">
              </div>
            </div>
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/lamb.png" alt="">
              </div>
            </div>
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/helena.png" alt="">
              </div>
            </div>
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/lamb.png" alt="">
              </div>
            </div>
          </div>
          <a href="/portofolio" class="portofolio-btn btn btn-dark">Vezi Toate</a>
        </div>

        <div class="portofolio-box" id="native">
          <h3 class="portofolio-title">Site-uri business și web progressive apps</h3>
          <div class="portofolio-item porotofolio-slideshow-shop">
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/Group 337.png" alt="">
              </div>
            </div>
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/Group 341.png" alt="">
              </div>
            </div>
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/Group 337.png" alt="">
              </div>
            </div>
            <div class="portofolio-item_box">
              <div class="img">
                <img src="img/portofolio/Group 341.png" alt="">
              </div>
            </div>
          </div>
          <a href="/portofolio" class="portofolio-btn btn btn-dark">Vezi Toate</a>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="our-price">
    <div class="wrap">
      <div class="section-descrp not">
        <h3>Prețurile Noastre</h3>
        <p>Ajuta-ne sa iti ajutam afacerea.</p>
      </div>
      <div class="our-price-container">
        <div class="our-price-a1 animated our-price-box" data-animate="fadeInUp" data-trigger="our-price-container">
          <h3 class="our-price-box_title">Creare Magazin Online</h3>
          <p class="our-price-box_price">de la <strong>750€</strong></p>
          <ul class="our-price-box_list">
            <li>Posibilitatea de a edita singur site-ul</li>
            <li>Domain (.md / .com / .net / .ro)</li>
            <li>Formular de atragere a Lead-urilor</li>
            <li>Versiunea mobila a site-ului.</li>
            <li>Promovam profesionist pe Google.</li>
            <li>Conectam Facebook Pixel si Messenger.</li>
            <li>Optimizam Cuvintele Cheie (SEO)</li>
          </ul>
          <a href="#contact" class="btn btn-dark">Cere Oferta</a>
          <div class="our-price-box_img">
            <img src="img/sections/Your-StoreMockup.png" alt="Offerts Online Shop">
          </div>
        </div>

        <div class="our-price-a1 animated ddelay-1 our-price-box active" data-animate="fadeInUp" data-trigger="our-price-container">
          <h3 class="our-price-box_title">Creare Landing Page</h3>
          <p class="our-price-box_price">de la <strong>390€</strong></p>
          <ul class="our-price-box_list">
            <li>Posibilitatea de a edita singur site-ul</li>
            <li>Domain (.md / .com / .net / .ro)</li>
            <li>Formular de atragere a Lead-urilor</li>
            <li>Versiunea mobila a site-ului.</li>
            <li>Promovam profesionist pe Google.</li>
            <li>Conectam Facebook Pixel si Messenger.</li>
            <li>Optimizam Cuvintele Cheie (SEO)</li>
          </ul>
          <a href="#contact" class="btn btn-white">Cere Oferta</a>
          <div class="our-price-box_img">
            <img src="img/sections/Imac-Beautiful.png" alt="Offerts Landing Page">
          </div>
        </div>

        <div class="our-price-a1 animated our-price-box" data-animate="fadeInUp" data-trigger="our-price-container">
          <h3 class="our-price-box_title">Creare Aplicații</h3>
          <h4 class="our-price-box_subtitle">web sau native</h4>
          <p class="our-price-box_price">de la <strong>1000€</strong></p>
          <ul class="our-price-box_list">
            <li>Posibilitatea de a edita singur site-ul</li>
            <li>Domain (.md / .com / .net / .ro)</li>
            <li>Formular de atragere a Lead-urilor</li>
            <li>Versiunea mobila a site-ului.</li>
            <li>Promovam profesionist pe Google.</li>
            <li>Conectam Facebook Pixel si Messenger.</li>
            <li>Optimizam Cuvintele Cheie (SEO)</li>
          </ul>
          <a href="#contact" class="btn btn-dark">Cere Oferta</a>
          <div class="our-price-box_img">
            <img src="img/sections/Application-Buy-Mockup.png" alt="Offerts Web & Native App">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="venividivici">
    <div class="scrolling">
      <div class="box preview box-animation">
        <div class="wrap">
          <div class="grid">
            <div class="grid_left left">
              <div class="img">
                <img src="img/sections/inner/Caesarrr.png" alt="">
              </div>
              <h1 class="text">veni <br> vidi <br> vici</h1>
            </div>
            <div class="grid_right right">
              <div class="img">
                <img src="img/sections/inner/Julius_Caesar_CoustouDropO_Louvre.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box veni box-animation">
        <div class="wrap">
          <h1 class="box-title">Veni</h1>
          <div class="wrap__inner">
            <div class="grid">
              <div class="grid_left left">
                <div class="box-card">
                  <h3 class="card-title">Primul pas</h3>
                  <p class="card-message">Tu ne contactezi, noi îti oferim o consultare gratuita si te sfatuim ce te-ar putea ajuta cel mai mult in opinia noastra profesionala.e-ar putea ajuta cel mai mult in opinia noastra profesionala. </p>
                </div>
                <div class="btns-container">
                  <a href="#contacts" class="btn btn-transparent dark">Cere Oferta</a>
                  <a href="#contacts" class="btn btn-dark">Contactează-ne</a>
                </div>
              </div>
              <div class="grid_right right">
                <div class="img">
                  <img src="img/sections/inner/veni.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box vidi box-animation">
        <div class="wrap">
          <h1 class="box-title">Vidi</h1>
          <div class="wrap__inner">
            <div class="grid">
              <div class="grid_left left">
                <div class="img">
                  <img src="img/sections/inner/vidi.png" alt="">
                </div>
              </div>
              <div class="grid_right right">
                <div class="box-card">
                  <h3 class="card-title">Al doilea pas</h3>
                  <p class="card-message">Noi cream prototipul proiectului tau, in urma intalnirilor finalizam detaliile in design si usabilitate. Incepem sa implementam proiectul tau. </p>
                </div>
                <div class="btns-container">
                  <a href="#contacts" class="btn btn-transparent dark">Cere Oferta</a>
                  <a href="#contacts" class="btn btn-dark">Contactează-ne</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box vici box-animation" id="startConfetti">
        <div class="wrap">
          <h1 class="box-title">Vici</h1>
          <div class="wrap__inner">
            <div class="grid">
              <div class="grid_left left">
                <div class="box-card">
                  <h3 class="card-title">Pasul final</h3>
                  <p class="card-message">Noi finalizam proiectul tau si ne asiguram ca fiecare detaliu sa fie perfect. Și totul este zaebisi</p>
                </div>
                <div class="btns-container">
                  <a href="#contacts" class="btn btn-transparent white">Cere Oferta</a>
                  <a href="#contacts" class="btn btn-white">Contactează-ne</a>
                </div>
              </div>
              <div class="grid_right right">
                <div class="img">
                  <img src="img/sections/inner/vici.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>


<div class="check animated" data-animate="fadeIn" data-trigger="check" data-trigger-hook="0.7"></div>

<?php

include_once("components/footer.php")

?>

<script>
  $(".numbers-value").counterUp({
    delay: 10,
    time: 1000,
  })
  $(".porotofolio-slideshow-shop").slick({
    prevArrow: '<button type="button" class="slick-prev"><img src="img/icons/arrow.svg" alt="Arrow"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="img/icons/arrow.svg" alt="Arrow""></button>',
    autoplay: false,
    autoplaySpeed: 3000,
    slidesToShow: 3,
    centerMode: true,
    responsive: [{
      breakpoint: 920,
      settings: {
        slidesToShow: 1,
        centerMode: false,
      }
    }, ]
  });
</script>