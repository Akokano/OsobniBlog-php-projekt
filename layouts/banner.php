<?php
session_start();

// Provjeri je li korisnik prijavljen
if (!isset($_SESSION['email'])) {
    // Ako nije prijavljen, preusmjeri ga na stranicu za prijavu
    header("Location: login.php");
    exit;
}

// Učitaj ime korisnika iz XML datoteke
if (file_exists('users.xml')) {
    $xml = simplexml_load_file('users.xml');

    // Pronađi korisnika po emailu (pretpostavljamo da je email jedinstven)
    $loggedInUser = $xml->xpath("//user[email='{$_SESSION['email']}']");

    // Postavi ime korisnika
    $imeKorisnika = $loggedInUser ? (string)$loggedInUser[0]->ime : 'Korisnik';

    // Prikazi ime korisnika u banneru
    echo "<div class='hero-image'>
            <div class='hero-text'>
                <br />
                <h1 style='background-color: transparent'>Pozdrav, {$imeKorisnika}!</h1>
                <br />
            </div>
          </div>";
} else {
    echo "Greška prilikom učitavanja korisnika.";
}
?>
s