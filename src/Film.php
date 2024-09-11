<?php
namespace App;
use \App\Acteur;

class Film {
    // Attributs
    private string $titre;
    private string $realisateur;
    private \DateTime $dateSortie;
    // Association avec Acteur
    private array $acteurs = [];

    // Méthodes
    // Constructeur permettant de créer des instrances d'une classe
    // INSTANCIATION
    public function __construct(string $titre, string $realisateur, \DateTime $dateSortie)
    {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;
    }

    // Accesseurs (getters)
    public function getTitre() : string {
        return $this->titre;
    }

    public function getRealisateur() : string {
        return $this->realisateur;
    }

    public function getDateSortie() : \DateTime {
        return $this->dateSortie;
    }

    public function getAnciennete() : int {
        $dateJour = new \DateTime();
        $intervalle = $dateJour->diff($this->dateSortie);
        return $intervalle->y;
    }


    public function ajouterActeur(Acteur $acteur): void
    {
        foreach ($this->acteurs as $act) {
            if ($act==$acteur) {
                throw new \Exception("L'acteur a déjà été ajouté");
            }
        }
        $this->acteurs[] = $acteur;
    }

    /**
     * @return Acteur[]
     */
    public function getActeurs() : array {
        return $this->acteurs;
    }
}