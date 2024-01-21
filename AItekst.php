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
      Umjetna inteligencija i čovjek
    </h1>
    <h2 style="
          margin-top: 30px;
          font-size: 18px;
          margin-left: 30px;
          color: white;
        ">
      "Što je umjetna inteligencija i kako ona utječe na čovjekov život"
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
    <h3 style="font-size: 14px; color: white;">Galerija slika</h3>
    <div style="display: flex">
      <figure>
        <img src="AI slika.jpg" alt="Opis slike 1" id="slika-1" class="modal-otvori" />
        <figcaption>Povezanost čovjek i interneta</figcaption>
      </figure>
      <figure>
        <img src="views\worldcon.jpg" alt="Opis slike 2" id="slika-2" class="modal-otvori" />
        <figcaption>Umreženost planete</figcaption>
      </figure>
      <figure>
        <img src="views\street.jpg" alt="Opis slike 3" id="slika-3" class="modal-otvori" />
        <figcaption>
          socijalne mreže su postale nove virtualne ulice.
        </figcaption>
      </figure>
    </div>
  </aside>
  <hr style="border-top: 3px solid rgb(197, 16, 16)" />
  <article>
    <section>
      <h3>Uvod:</h3>
      <p>
        Umjetna inteligencija (AI) ima potencijal promijeniti način na koji
        živimo i radimo, ali također postavlja važna pitanja o ulozi ljudi u
        budućnosti. Hoće li AI određene poslove učiniti zastarjelima ili će
        povećati naše sposobnosti i omogućiti nam da postignemo još više?
      </p>
    </section>
    <section>
      <h3>Povijest AI:</h3>
      <p>
        Koncept umjetne inteligencije može se pratiti unazad do 1950-ih, kada
        su istraživači prvi počeli istraživati mogućnost izgradnje strojeva
        koji bi mogli razmišljati i učiti poput ljudi. Tijekom godina, umjetna
        inteligencija je značajno napredovala i primijenjena je u raznim
        područjima, uključujući zdravstvo, financije i transport.
      </p>
    </section>
    <section>
      <h3>Prednosti umjetne inteligencije:</h3>
      <p>
        Jedna od glavnih prednosti umjetne inteligencije je njezina sposobnost
        brze i točne obrade i analize velikih količina podataka. To može
        pomoći organizacijama da donose bolje informirane odluke i poboljšaju
        svoje poslovanje. AI također može pomoći u automatizaciji zadataka,
        oslobađajući ljude da se usredotoče na kreativniji i složeniji rad.
      </p>
    </section>
    <section>
      <h3>Potencijalni nedostaci umjetne inteligencije:</h3>
      <p>
        Međutim, postoji i zabrinutost zbog mogućih negativnih učinaka umjetne
        inteligencije. Na primjer, široko prihvaćanje umjetne inteligencije
        moglo bi dovesti do premještanja poslova, jer strojevi preuzimaju
        zadatke koje su prije obavljali ljudi. Također postoji zabrinutost oko
        etičkih implikacija umjetne inteligencije, kao što je potencijal za
        pristranost u algoritmima i rizici autonomnih sustava koji donose
        odluke koje imaju neželjene posljedice.
      </p>
    </section>
    <section>
      <h3>Zaključak:</h3>
      <p>
        Sve u svemu, umjetna inteligencija ima potencijal da bude moćan alat
        za poboljšanje naših života, ali važno je da joj pristupimo s oprezom
        i razmotrimo moguće utjecaje na društvo. Na ljudima je da osiguraju da
        se AI razvija i koristi na odgovoran i etičan način.
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