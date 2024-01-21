<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSS -->
  <link rel="stylesheet" href="style.css" />
  <!-- End CSS -->
  <!-- meta elements -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="views\V.png" />
  <title>Via Kritike</title>
</head>

<body>
  <?php
  include("layouts\header.php");
  ?>
  <?php
  include("layouts\banner.php");
  ?>

  <h1 style="
        display: flex;
        justify-content: center;
        font-family: Times New Roman;
        color: white;
        margin-top: 15px;
        margin-bottom: 15px;
      ">
    Naši tekstovi
  </h1>
  <main>
    <div class="kartice">
      <div class="kartica">
        <img src="AI slika.jpg" alt="Slika za prvu karticu" class="slikica" />
        <h2>Umjetna inteligencija i čovjek</h2>
        <p>Ovih dana svjedočimo o raznim prognozama kako bi napredak...</p>
        <a href="AItekst.php">Pročitaj više</a>
      </div>
      <div class="kartica">
        <img src="views\ludiGrci.jpg" alt="Slika za trecu karticu" />
        <h2>Razvoj grčke filozofske misli</h2>
        <p>Grčka filozofija obuhvaća filozofska mišljenja i sustave...</p>
        <a href="Grci.php">Pročitaj više</a>
      </div>
      <div class="kartica">
        <img src="views\HansZimmer.jpg" alt="Slika za cetvrtu karticu" />
        <h2>Hans Zimmer</h2>
        <p>Jedan od trenutno najboljih filmskih kompozitora Hansa Zimm...</p>
        <a href="HannsZimmer.php">Pročitaj više</a>
      </div>
      <div class="kartica">
        <img src="views\Mitologija.jpg" alt="Slika za petu karticu" />
        <h2>Drevne mitologije</h2>
        <p>
          Povijest nas uči o drevnim legendama i mitovima koji su utjecali na
          razvoj današnjih...
        </p>
        <a href="https://en.wikipedia.org/wiki/Myth#Mythology" target="_blank">Pročitaj više</a>
      </div>
    </div>
  </main>

  <div class="pagination">
    <!-- Stranica 1 -->
    <a href="#">1</a>
    <!-- Stranica 2 -->
    <a href="#">2</a>
    <!-- Stranica 3 -->
    <a href="#">3</a>
    <!-- Ostale stranice -->
    <a href="#">...</a>
  </div>
  <?php
  include("layouts/footer.php");
  ?>
  <script src="script.js"></script>
</body>

</html>