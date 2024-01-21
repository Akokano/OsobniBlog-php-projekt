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
    <?php include("layouts/header.php") ?>

    <main style="margin-top: 3rem">
      <h1
        style="
          margin-top: 7rem;
          display: flex;
          justify-content: center;
          font-size: 22px;
        "
      >
        O nama
      </h1>
      <h2
        style="
          display: flex;
          justify-content: center;
          color: white;
          font-size: 20px;
        "
      >
        Mi smo blog o kulturi, znanosti, filozofiji i drugi zanimljivim temama.
      </h2>
      <hr style="border-top: 1px solid white; margin-bottom: 1.9rem" />
      <video
        width="50%"
        autoplay 
        muted
        controls
        poster="img/video-cover-sir-tim-berners-lee.jpg"
        style="margin-left: 1rem; margin-right: 1.5rem"
      >
        <source src="views\Typing - 35936.mp4" type="video/mp4"/>
        Your browser does not support HTML5 video.
      </video>
      <br />
      <p>
        Via Kritike je blog portal koji se bavi filozofijom, poviješću, znanosti
        i kulturom predstavlja izvrsno mjesto za one koji su zainteresirani za
        različite teme i žele proširiti svoje znanje. Ovaj blog nudi raznolike
        članke koji su pisani stručnim autorima te su izvrsni za one koji traže
        dublju analizu tema.
      </p>
      <p>
        Naš blog nudi širok spektar članaka koji se bave različitim temama.
        Možete pronaći članke o filozofiji, koji će vam pomoći da razumijete
        kompleksna pitanja koja se ticu ljudskog postojanja i smisla života.
        Također, možete pronaći članke o povijesti, koji vas mogu upoznati s
        različitim događajima i periodima u povijesti. Znanstveni članci pružaju
        detaljne informacije o različitim znanstvenim temama i novim otkrićima.
        Kulturni članci pak pružaju uvid u različite kulture širom svijeta i
        njihove običaje i tradicije.
      </p>
      <br />
      <p>
        Blog portal sadrži članke koji su napisali stručni autori s različitih
        područja. To znači da ćete pronaći članke koji su napisali filozofi,
        povjesničari, znanstvenici i stručnjaci za kulturu. Ovi autori su
        izvrsni u svojim područjima i nude dublju analizu tema koje pišu.
      </p>
      <p>
        Naš blog je dostupan online, što znači da ga možete pronaći i čitati
        bilo gdje imate pristup internetu. Možete pretraživati po različitim
        kategorijama i pronaći članke koji vas zanimaju. Također, možete se
        pretplatiti na obavijesti o novim člancima kako biste bili u toku s
        najnovijim sadržajem.
      </p>
      <p>
        Ukoliko ste zainteresirani za filozofiju, povijest, znanost i kulturu,
        blog portal koji se bavi tim temama je izvrsno mjesto za vas. Nudi širok
        spektar članaka koji su napisani stručnim autorima te pružaju dublju
        analizu različitih tema. Dostupan je online i možete ga pronaći bilo
        gdje imate pristup internetu, te se pretplatiti na obavijesti o novim
        člancima. Iskoristite priliku da proširite svoje znanje i upoznate se s
        različitim temama na ovom blogu portalu.
      </p>
      <p>
        Video je preuzet na stranici:
        <a
          href="https://pixabay.com/videos/typing-work-laptop-computer-35936/"
          target="_blank"
          >Izvor video materijala</a
        >
      </p>
    </main>
    <?php include("layouts/footer.php") ?>
    <script src="script.js"></script>
  </body>
</html>
