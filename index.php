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
  <?php include("layouts/header2.php"); ?>

  <section class="hero-image">
    <div class="hero-text">
      <h1 style="background-color: transparent">Dobrodošli na Via Kritike</h1>
      <p style="background-color: transparent">Osvježite svoj um kroz inspirativne članke o književnosti, filmu i
        umjetnosti.</p>
    </div>
  </section>

  <main>
    <h1 style="display: flex; justify-content: center;">Dobrodošli na Via Kritike Blog</h1>
    <br />
    <figure>
      <img src="img\glavnaSlika.jpg" alt="via-kritike" title="via-kritike" />
      <figcaption>
        Pridružite se našoj zajednici i istražite svijet književnosti i umjetnosti.
      </figcaption>
    </figure>
    <p>
      Via Kritike Blog predstavlja vrhunski izvor inspiracije, pružajući članke koji istražuju dubine
      književnosti, filmova, umjetnosti i mnogo toga.
      Naša strast za kulturnom raznolikošću odražava se u svakom tekstu, nudeći vam jedinstvene perspektive i
      dubinske analize umjetničkih djela.
    </p>
    <p>
      Pridružite nam se i postanite dijelom ekskluzivne zajednice zaljubljenika u književnost. Ovdje nije samo
      riječ o čitanju članaka; ovo je interaktivna platforma gdje možete aktivno sudjelovati. Razmjenjujte svoja
      mišljenja s drugima, čitajte intrigantne recenzije i istražujte nova literarna ostvarenja iz različitih
      kutova gledanja.
    </p>
    <p>
      Postati član Via Kritike znači ući u svijet gdje se cijeni svaka riječ, gdje se raznolikost cijeni kao izvor
      snage. Iskoristite priliku za povezivanje s istomišljenicima i otkrivanje umjetničkih dragulja iz svih
      kutaka svijeta.
    </p>
    <p>
      Uz Via Kritike, otvaramo vrata svijetu kreativnosti i mašte. Postanite dio naše priče i dopustite umjetnosti
      da obogati vaš život.
    </p>
    <p>
      Bez obzira jeste li strastveni čitatelj, filmski entuzijast, umjetnički znalac ili jednostavno istraživač
      novih ideja, naš blog ima nešto za svakoga.
    </p>


    <article>
      <section>
        <button onclick="location.href='registracija.php'" style="display: flex; justify-content: center;">Registracija</button>
      </section>
      <p>Prijavite se ili registrirajte kako biste pristupili ekskluzivnim člancima, recenzijama i umjetničkim
        analizama.</p>
    </article>
  </main>

  <?php include("layouts/footer.php"); ?>

  <script src="script.js"></script>
</body>

</html>