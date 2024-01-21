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
        <h1 style="display: flex; justify-content: center; color: white;">Prijavite se!</h1>
        <form method="post" action="process_login.php">
            <label for="email">Email adresa:</label><br />
            <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required
                title="Unesite ispravnu email adresu u obliku example@domain.com" /><br />
            <label for="lozinka">Lozinka:</label><br />
            <input type="password" id="lozinka" name="lozinka" required /><br />
            <div style="display: flex; justify-content: center; align-items: center">
                <input type="submit" value="Pošalji" />
            </div>
        </form>
        <!-- Dodaj id="notification" atribut -->
        <div id="notification" style="display: none; color: red; text-align: center; margin-top: 10px;"></div>
    </div>
    <?php include("layouts/footer.php"); ?>
</body>

</html>