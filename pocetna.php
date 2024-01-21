<?php

session_start();

// Provjeri je li korisnik prijavljen
if (!isset($_SESSION['email'])) {
  // Ako nije prijavljen, preusmjeri ga na stranicu za prijavu
  header("Location: login.php");
  exit;
}

?>

<!DOCTYPE html>
<html>

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
  <?php
  include("layouts\banner.php");
  ?>
  <main>
    <h1 style="display: flex; justify-content: center;">Stoicizam, što je Stoicizam i osnovne značajke Stoicizma.</h1>
    <br />
    <figure>
      <img src="img\glavnaSlika.jpg" alt="stoicism" title="stoicism  " />
      <figcaption>
        Marko Aurelije, lat. Imperator Caesar Marcus Aurelius Antoninus
        Augustus, rođen kao Marcus Annius Catilius Severus, vladao od godine
        161. do smrti, rimski car i filozof.
      </figcaption>
    </figure>
    <p>
      Stoicizam je antička filozofska škola koja djeluje od 4. st. pr. Kr. do
      2. st. po. Kr., a dijeli se na staru, srednju i novu stoičku školu.
    </p>
    <p>
      Osnivač ovoga pravca je Zenon Kitijski (ne brkati sa Zenonom iz Eleje),
      a ostali predstavnici su: Hrizip, Seneka Mlađi, Epiktet (koji je bio
      rob) i car Marko Aurelije.
    </p>
    <p>
      Stoici dijele filozofiju na: logiku, fiziku i etiku. Tvrdili su da
      svijetom vlada logos (svjetski um, sudbina) i zbog toga je sve nužno
      određeno. Centralni problem kojim se bave je etika.
    </p>
    <p>
      Osnovni moto stoika je: "Život u skladu s prirodom". Mudar čovjek živi u
      skladu s prirodom i vlastitim razumom, jer tako postiže mir duše.
      Najznačajnije vrline su: razumnost, pravednost i umjerenost.
    </p>
    <p>
      Starogrčki stoici vjerovali su u više bogova, ali u isto vrijeme su,
      slično istodobnim starim Židovima, kategorično odbacili da je Bog nalik
      čovjeku bilo u obliku bilo u naravi. Boga su zamišljali kao uzor
      savršenstva te su vjerovali da postoji "um" koji vlada, a nazivali su ga
      "Logos", za njih je bio stvaralačka vatra i držali su da ta sila
      proizvodi razna bića, prožima i oblikuje svaku, čak i ljudsku narav.
    </p>
    <p>
      Premda se stoička filozofija nije, zbog principijelne ravnodušnosti
      prema svemu zbiljskom, odlučila ni za jedan oblik države, ipak je upravo
      ona prva razvila ideju svjetskoga građanstva. Stoa napušta kao
      preživjelu razliku između Helena i barbara koju je još zastupao
      Aristotel. U ideju pravednosti i opće ljubavi za čovjeka stoici
      uključuju i roba, iako za svoje socijalne zahtjeve, u skladu s etičkom
      tezom o ravnodušnosti, nikad nisu stupili u aktivnu borbu.
      Anticipirajući svojim kontemplacijama o društvu velike pokrete
      obespravljenih masa, stoa je ipak ostala praktički ograničena svojim
      pasivnim pomirenjem, introspekcijama, nezainteresiranošću za zbiljska
      povijesna kretanja i društvenom neangažiranošću. – Stoička škola znatno
      je utjecala na ranokršćanske mislioce, a mnoge njezine teze ostavile su
      traga u velikim sustavima novovjekovne racionalističke filozofije,
      osobito u Spinoze.
    </p>
    <p>
      Izvor:
      <a style="color: rgb(171, 9, 9);" href="https://hr.wikipedia.org/wiki/Stoicizam" target="_blank">Wikipedia</a>
    </p>

  </main>
  <?php
  include("layouts/footer.php");
  ?>
  <script src="script.js"></script>
</body>

</html>