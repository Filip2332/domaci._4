<?php


// Domaci 1

$ime = "Administrator";
$lozinka = "mojaSifraJeSigurna";

if ($ime = "administrator" || $ime = "AdMiniStrator" || $ime = "adminiSTRATOR" && $lozinka = "mojaSofraJeSigurna") {
echo "Dobrodosao administratore!";
}


// Domaci 2


$trenutnoSati = "20:38";

if ($trenutnoSati >= 5 && $trenutnoSati <= 12){
    echo "Jutro je!";
}
if ($trenutnoSati >= 12 && $trenutnoSati <= 20){
    echo "Popodne je!";
} 
if ($trenutnoSati >= 20 && $trenutnoSati <= 5){
    echo "Noc je!";
}