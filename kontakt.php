<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSS -->
  <link rel="stylesheet" href="style.css" />
  <!-- End CSS -->
  <!-- meta elements -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="author" content="Antun Kokanović" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="views\V.png" />
  <title>Via Kritike</title>
</head>

<body>
  <?php
  include("layouts\header.php");
  ?>

  <br />
  <br />
  <br />
  <br />
  <h1 style="
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 20px;
      ">
    Kontakt stranica
  </h1>
  <p style="display: flex; justify-content: center; align-items: center">
    Molimo Vas da nam se obratite putem forme ispod ili pomoću linka za Google
    Maps.
  </p>
  <div style="display: flex; justify-content: center; align-items: center">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.830523574093!2d16.07135217608143!3d45.71443667107911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47667e543ebb2c65%3A0xe159703d90972cf3!2sVeleu%C4%8Dili%C5%A1te%20Velika%20Gorica!5e0!3m2!1shr!2shr!4v1673021995665!5m2!1shr!2shr"
      width="600" height="450" style="border: 0" allowfullscreen=""
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <br />
  <br />
  <form>
    <label for="ime">Ime:</label><br />
    <input type="text" id="ime" name="ime" /><br />
    <label for="prezime">Prezime:</label><br />
    <input type="text" id="prezime" name="prezime" /><br />
    <label for="email">Email adresa:</label><br />
    <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required
      title="Unesite ispravnu email adresu u obliku example@domain.com" /><br />
    <br /><br />
    <label for="opis">Opis:</label><br />
    <textarea id="opis" name="opis" rows="5" cols="40"></textarea>
    <br /><br />
    <div style="display: flex; justify-content: center; align-items: center">
      <input type="submit" value="Pošalji" />
    </div>
  </form>

  <br />
  <br />
  <br />
  <?php
  include("layouts/footer.php");
  ?>

  <script src="script.js"></script>
</body>

</html>