<?php

class Acteur {
    private string $prenom;
    private string $nom;

    /**
     * @param string $prenom
     * @param string $nom
     */
    public function __construct(string $prenom, string $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }



}

