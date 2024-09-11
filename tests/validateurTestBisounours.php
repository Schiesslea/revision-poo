<?php
require_once "vendor/autoload.php";

use App\Validateur;
use PHPUnit\Framework\TestCase;
$validateur = new Validateur();
$nombre = 10;
if ($validateur->verifieNombre($nombre)) {
    echo "Le nombre $nombre est valide";
} else {
    echo "Le nombre $nombre est invalide";
}
echo PHP_EOL;
$nombre=-12;
// Avec gestion des exceptions
try {
    // Code surveillé (susceptible de lancer une exception)
    $validateur->verifieNombre2($nombre);
    echo "Le nombre $nombre est valide";
} catch (\Exception $e) {
    // Attraper l'exception lancée
    echo $e->getMessage();
}
echo PHP_EOL;
$mdp="Andy1233";
try {
    $validateur->verifieMotDePasse($mdp);
    echo "Le mot de passe est valide";
} catch (\Exception $e) {
    echo $e->getMessage();
}

