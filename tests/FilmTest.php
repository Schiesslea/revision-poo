<?php
require_once '../src/Film.php';

// Instancier la classe Film

$film1 = new Film("Cars", "Pixar", DateTime::createFromFormat("d/m/Y", "12/03/2022"));

echo $film1->getTitre();
echo PHP_EOL;
echo $film1->getAnciennete();
$film1->ajouterActeur(new Acteur("Clement", "Dasilva"));
$film1->ajouterActeur(new Acteur("Maxime", "Sermmet"));
echo PHP_EOL;
print_r($film1->getActeurs());
// Afficher le nom des acteurs
foreach ($film1->getActeurs() as $acteur) {
    echo $acteur->getNom();
    echo PHP_EOL;
}