<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- End CSS -->
    <!-- meta elements -->
    <title>Via Kritike</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Ovo je projektni zadatak" />
    <meta name="keywords" content="" />
    <meta name="author" content="Antun Kokanović" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="views\V.png" />
  </head>
  <body>
    <?php include("layouts\header.php")?>

    <header>
      <h1
        style="
          margin-top: 60px;
          font-size: 26px;
          margin-left: 30px;
          color: rgb(171, 9, 9);
        "
      >
        Razvoj grčke filozofske misli
      </h1>
      <h2
        style="
          margin-top: 30px;
          font-size: 18px;
          margin-left: 30px;
          color: white;
        "
      >
        "Tekst o razvoju i povijesti grčke filozofije."
      </h2>
      <p
        style="
          margin-top: 10px;
          font-size: 18px;
          margin-left: 40px;
          color: white;
        "
      >
        Datum objave: 1.1.2023.
      </p>

      <nav>
        <a href="blog.php" ;><button>Vrati se natrag</button></a>
      </nav>
    </header>
    <aside>
      <h3 style="font-size: 14px; color: white">Galerija slika</h3>
      <div style="display: flex">
        <figure>
          <img
            src="views\ludiGrci.jpg"
            alt="Opis slike 1"
            id="slika-1"
            class="modal-otvori"
          />
          <figcaption>Grčki filozofi</figcaption>
        </figure>
        <figure>
          <img
            src="views\SlikeZaTekst\grci.jpg"
            alt="Opis slike 2"
            id="slika-2"
            class="modal-otvori"
          />
          <figcaption>Statue grčkih filozofa</figcaption>
        </figure>
        <figure>
          <img
            src="views\SlikeZaTekst\arhitektura.jpg"
            alt="Opis slike 3"
            id="slika-3"
            class="modal-otvori"
          />
          <figcaption>Prikaz grčeke arhitekture.</figcaption>
        </figure>
      </div>
    </aside>
    <hr style="border-top: 3px solid rgb(197, 16, 16)" />
    <article>
      <section>
        <h3>Prvi grčki filozofi:</h3>
        <p>
          Prvi grčki filozofi su poznati kao "pradjedovi filozofije" ili
          "presokratovci". Oni su živeli u 6. vijeku pne. i bavili su se
          pitanjima o prirodi stvari i svemiru. Među njima su bili Tales iz
          Mileta, Anaksimander iz Mileta i Anaksimen iz Klazomena.
        </p>
      </section>
      <section>
        <h3>Sokrat:</h3>
        <p>
          Najpoznatiji grčki filozof je Sokrat, koji je živio u 5. vijeku pne.
          On nije ostavio nikakve pisane tragove, pa se o njegovim učenjima
          saznaje preko djela svojih učenika, najpoznatije Platona i Xenofonta.
          Sokratov pristup filozofiji je bio kritički i skeptički, te je
          koristio metodu "elenka" da bi došao do istine.
        </p>
      </section>
      <section>
        <h3>Platon:</h3>
        <p>
          Platon, Sokratov učenik, je bio jedan od najutjecajnijih grčkih
          filozofa. On je bio uvjeren da postoji apsolutna istina koja se može
          spoznati putem razuma, a ne samo putem osjetila. Platon je također
          vjerovao u postojanje duša koje su veće od tijela i koje prežive smrt
          tijela. Njegova najpoznatija djela su "Država" i "Fedon".
        </p>
      </section>
      <section>
        <h3>Aristotel:</h3>
        <p>
          Drugi važan grčki filozof je bio Aristotel, koji je živio u 4. vijeku
          pne. On se bavio mnogim različitim područjima, uključujući logiku,
          etiku, politiku, biologiju i fiziku. Aristotel je vjerovao u
          postojanje "srednjeg puta" u moralnom ponašanju i da je cilj ljudskog
          života ostvariti sreću putem intelektualnog razvoja i dobrog držanja.
        </p>
      </section>
      <section>
        <h3>Zaključak:</h3>
        <p>
          Grčka filozofska misao je imala veliki utjecaj na razvoj zapadne
          filozofije i kulture u cijelom svijetu. Mnogi poznati filozofi su se
          bavili grčkim učenjima i nadograđivali ih, uključujući Cicerona, Renéa
          Descartesa, Immanuela Kanta i mnoge druge. Grčka filozofija se i danas
          široko studira i cijeni zbog njenog utjecaja na razvoj ljudske misli i
          kulture.
        </p>
      </section>
    </article>

    <footer>
      <hr style="border-top: 3px solid rgb(197, 16, 16)" />
      <div style="display: flex; justify-content: center">
        <a
          href="https://www.linkedin.com/in/antun-kokanovi%C4%87-081806250/"
          target="_blank"
          ><img
            src="views\linkedin-logo-3.png"
            alt="Linkedin"
            title="Linkedin"
            style="width: 24px; margin-top: 0.4em"
        /></a>
        <a href="https://twitter.com/_AntunTun_" target="_blank"
          ><img
            src="views\twitter-logo-.png"
            alt="Twitter"
            title="Twitter"
            style="width: 24px; margin-top: 0.4em"
        /></a>
        <a href="https://www.instagram.com/antun__k/" target="_blank"
          ><img
            src="views\Instagram_logo.png"
            alt="Istagram+"
            title="Istagram"
            style="width: 24px; margin-top: 0.4em"
        /></a>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
