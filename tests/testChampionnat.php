<?php

require_once "./vendor/autoload.php";

use App\Championnat;
use App\Entites\Equipe;
use App\Personne;

$psg = new Equipe("PSG");
$om = new Equipe("OM");
$ligue1 = new Championnat("Ligue 1");
$dupond = new Personne("Dupond");
$durand = new Personne("Durand");

$ligue1->ajouterEquipe($psg);
$ligue1->ajouterEquipe($om);
echo "Il y a " . $ligue1->getNombreEquipes() . " en ligue1";
echo PHP_EOL;
$dupond->liker($psg);
$durand->liker($om);
echo $psg->getNom() . " a " . $psg->getNombreLikes();

dump($ligue1);