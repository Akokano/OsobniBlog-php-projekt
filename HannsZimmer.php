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
  <?php
  include("layouts\header.php");
  ?>
  <header>
    <h1 style="
          margin-top: 60px;
          font-size: 26px;
          margin-left: 30px;
          color: rgb(171, 9, 9);
        ">
      Hans Zimmer
    </h1>
    <h2 style="
          margin-top: 30px;
          font-size: 18px;
          margin-left: 30px;
          color: white;
        ">
      "Jedan od trenutno najboljih filmskih kompozitora Hansa Zimmer"
    </h2>
    <p style="
          margin-top: 10px;
          font-size: 18px;
          margin-left: 40px;
          color: white;
        ">
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
        <img src="views\HansZimmer.jpg" alt="Opis slike 1" id="slika-1" class="modal-otvori" />
        <figcaption>Koncertna dvorana</figcaption>
      </figure>
      <figure>
        <img src="views\SlikeZaTekst\opera.jpg" alt="Opis slike 2" id="slika-2" class="modal-otvori" />
        <figcaption>Opera</figcaption>
      </figure>
      <figure>
        <img src="views\SlikeZaTekst\space.jpg" alt="Opis slike 3" id="slika-3" class="modal-otvori" />
        <figcaption>Scena iz filma Interstellar</figcaption>
      </figure>
    </div>
  </aside>
  <hr style="border-top: 3px solid rgb(197, 16, 16)" />
  <article>
    <section>
      <h3>Kratak životopis:</h3>
      <p>
        Hans Zimmer rođen je u Frankfurtu u Njemačkoj 12. rujna 1957. godine.
        Bio je poznati filmski i televizijski skladatelj, a njegove se skladbe
        mogu čuti u preko 150 filmova. Zimmer je karijeru započeo kao
        glazbenik u klubovima, a kasnije je radio kao producent za nekoliko
        britanskih bendova.
      </p>
    </section>
    <section>
      <h3>Počeci karijere:</h3>
      <p>
        Zimmer je započeo svoju karijeru u filmskoj industriji kao pomoćni
        producent za film "Buggles" 1979. godine. Potom je radio na nekoliko
        manjih projekata, a prvi veliki film na kojem je radio bio je "Rain
        Man" iz 1988. godine. Njegov rad na tom filmu privukao je pažnju
        mnogih filmskih studija, što je dovelo do niza uspješnih saradnji sa
        holivudskim rediteljima.
      </p>
    </section>
    <section>
      <h3>Uspjesi:</h3>
      <p>
        Zimmer je stekao veliku slavu zahvaljujući radu na mnogim poznatim
        filmovima, kao što su "Gladiator", "Pirati s Kariba", "Inception",
        "Lion King" i "Interstellar". Njegove kompozicije su bile nominirane
        za mnoge nagrade, a osvojio je čak i nagradu Academy Award za najbolju
        originalnu glazbu za film "Gladiator".
      </p>
    </section>
    <section>
      <h3>Stil i utjecaji:</h3>
      <p>
        Zimmer je poznat po svojim energičnim i emotivnim glazbenim
        kompozicijama koje su se odlikovale korištenjem modernih tehnologija i
        eksperimentiranjem sa zvukom. Njegov stil je bio inspiriran mnogim
        glazbenim žanrovima, uključujući rock, klasiku i world music. Zimmer
        je također bio poznat po suradnjama sa drugim poznatim kompozitorima,
        kao što su Lorne Balfe i John Powell.
      </p>
    </section>
    <section>
      <h3>Kasnija karijera:</h3>
      <p>
        Zimmer je nastavio raditi na brojnim velikim filmovima tijekom kasnije
        karijere, uključujući "Dunkirk", "Blade Runner 2049" i "Wonder Woman
        1984". On je također radio na muzici za nekoliko TV serija,
        uključujući "The Crown" i "Westworld". Zimmer je ostavio veliki trag u
        filmskoj i TV industriji i smatra se jednim od najboljim skaldalteljem
        današnjice.
      </p>
    </section>
  </article>

  <footer>
    <hr style="border-top: 3px solid rgb(197, 16, 16)" />
    <div style="display: flex; justify-content: center">
      <a href="https://www.linkedin.com/in/antun-kokanovi%C4%87-081806250/" target="_blank"><img src="views\linkedin-logo-3.png" alt="Linkedin" title="Linkedin" style="width: 24px; margin-top: 0.4em" /></a>
      <a href="https://twitter.com/_AntunTun_" target="_blank"><img src="views\twitter-logo-.png" alt="Twitter" title="Twitter" style="width: 24px; margin-top: 0.4em" /></a>
      <a href="https://www.instagram.com/antun__k/" target="_blank"><img src="views\Instagram_logo.png" alt="Istagram+" title="Istagram" style="width: 24px; margin-top: 0.4em" /></a>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</html>