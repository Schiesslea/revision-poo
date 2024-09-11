<?php

namespace App;

class Validateur
{
    // Méthode qui vérifie si un nombre est strictement positif

    public function verifieNombre(int $nombre): bool
    {
        // On teste toujours les cas d'erreurs en premier
        if ($nombre <= 0) {
            return false;
        }
        return true;
    }


    public function verifieNombre2(int $nombre): bool
    {
        // On teste toujours les cas d'erreurs en premier
        if ($nombre <= 0) {
            // Lancer une Exception
            throw new \Exception("Le nombre est invalide");
        }
        return true;
    }

    public function verifieMotDePasse(string $mdp): bool
    {
        if (strlen($mdp)<8) {
            throw new \Exception("Le mot de passe doit contenir au moins 8 caractères");
        }
        $contientChiffre = false;
        $contientMinuscule = false;
        $contientMajuscule = false;

        for ($i=0; $i<strlen($mdp); $i++) {
            $char=$mdp[$i];
            if ($char>='0' && $char<='9') {
                $contientChiffre=true;
            }
            if ($char>="a" && $char<="z") {
                $contientMinuscule=true;
            }
            if ($char>="A" && $char<="Z") {
                $contientMajuscule=true;
            }
        }
        if (!$contientChiffre) {
            throw new \Exception("Le mot de passe ne contient pas de chiffres");
        } elseif (!$contientMinuscule) {
        throw new \Exception("Le mot de passe ne contient pas de chiffres");
        } elseif (!$contientMajuscule) {
        throw new \Exception("Le mot de passe ne contient pas de chiffres");
    }
    return true;
    }
}
