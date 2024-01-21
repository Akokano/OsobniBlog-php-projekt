<!DOCTYPE html>
<html lang="en">

<head>
    <title>Via Kritike</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Ovo je projektni zadatak" />
    <meta name="keywords" content="" />
    <meta name="author" content="Antun Kokanović" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="views\V.png" />
    <!-- CSS for header2.php -->
    <link rel="stylesheet" href="style.css" />
    <!-- End CSS for header2.php -->
    <style>
        /* Dodani stilovi za unos lozinke i datuma rođenja */
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 12px;
            border: 3px solid rgb(197, 16, 16);
            border-radius: 4px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            resize: vertical;
            margin-bottom: 14px;
            margin-top: 2px;
        }
    </style>
</head>

<body>
    <?php include("layouts/header2.php"); ?>
    <div class="registration-container">
        <h1 style="display: flex; justify-content: center; color: white;">Registrirajte se kako biste mogli čitati naše
            tekstove!</h1>
        <form method="post" action="process_registration.php">
            <label for="ime">Ime:</label><br />
            <input type="text" id="ime" name="ime" required /><br />
            <label for="prezime">Prezime:</label><br />
            <input type="text" id="prezime" name="prezime" required /><br />
            <label for="datum_rodenja">Datum rođenja:</label><br />
            <input type="date" id="datum_rodenja" name="datum_rodenja" required /><br />
            <label for="ime">Država:</label><br />
            <input type="text" id="drzava" name="drzava" required /><br />
            <label for="email">Email adresa:</label><br />
            <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required
                title="Unesite ispravnu email adresu u obliku example@domain.com" /><br />
            <label for="lozinka">Lozinka:</label><br />
            <input type="password" id="lozinka" name="lozinka" required /><br />
            <div style="display: flex; justify-content: center; align-items: center">
                <input type="submit" value="Pošalji" />
            </div>
        </form>
    </div>
    <?php include("layouts/footer.php"); ?>
</body>

</html>