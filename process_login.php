<?php
session_start();

// Provjeri je li forma poslala podatke
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obradi podatke iz login forme
    $email = $_POST['email'];
    $lozinka = $_POST['lozinka'];

    // Učitaj postojeću XML datoteku ako već postoji
    if (file_exists('users.xml')) {
        $xml = simplexml_load_file('users.xml');

        // Provjeri postoji li korisnik s istim emailom i lozinkom
        $user = $xml->xpath("//user[email='{$email}' and lozinka='{$lozinka}']");
        
        if ($user) {
            // Ako korisnik postoji, postavi sesijske podatke i preusmjeri na pocetna.php
            $_SESSION['email'] = $email;
            header("Location: pocetna.php");
            exit;
        } else {
            // Ako korisnik ne postoji ili su podaci netočni, prikaži obavijest
            echo "Pogrešna email adresa ili lozinka.";
        }
    } else {
        echo "Pogreška prilikom učitavanja korisnika.";
    }
} else {
    // Ako forma nije poslala podatke, preusmjeri korisnika ili prikaži poruku o grešci
    echo "Greška prilikom slanja podataka.";
    exit; // Dodaj ovu liniju kako bi spriječio izvršavanje ostatka koda u slučaju greške
}
?>
