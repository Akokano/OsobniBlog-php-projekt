<?php
// Provjeri je li forma poslala podatke
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obradi podatke iz registracijske forme
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $datum_rodenja = $_POST['datum_rodenja'];
    $drzava = $_POST['drzava'];
    $email = $_POST['email'];
    $lozinka = $_POST['lozinka'];

    // Dodaj provjeru minimalne duljine lozinke
    if (strlen($lozinka) < 5) {
        echo "Lozinka mora imati minimalno 5 znakova.";
        // Ovdje možeš dodati dodatne akcije u slučaju neuspjele provjere, npr. preusmjeriti korisnika natrag na registracijsku stranicu.
        exit;
    }

    // Učitaj postojeću XML datoteku ako već postoji, ili stvori novu
    if (file_exists('users.xml')) {
        $xml = simplexml_load_file('users.xml');

        // Provjeri postoji li već korisnik s istim emailom
        if ($xml->xpath("//user[email='{$email}']")) {
            echo "Korisnik s ovim emailom već postoji.";
            // Ovdje možeš dodati dodatne akcije, npr. prikazivanje skočnog prozora.
            exit;
        }
    } else {
        $xml = new SimpleXMLElement('<users></users>');
    }

    // Dodaj novog korisnika kao novi red u XML datoteci
    $user = $xml->addChild('user');
    $user->addChild('ime', $ime);
    $user->addChild('prezime', $prezime);
    $user->addChild('datum_rodenja', $datum_rodenja);
    $user->addChild('drzava', $drzava);
    $user->addChild('email', $email);
    $user->addChild('lozinka', $lozinka);

    // Spremi promjene u XML datoteku
    $xml->asXML('users.xml');

    // Nastavi s ostatkom procesa registracije
    // Preusmjeri korisnika na index.php nakon uspješne registracije
    header("Location: index.php");
    exit;
} else {
    // Ako forma nije poslala podatke, preusmjeri korisnika ili prikaži poruku o grešci
    echo "Greška prilikom slanja podataka.";
}
?>
