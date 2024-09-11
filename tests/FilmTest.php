<?php

use PHPUnit\Framework\TestCase;

class FilmTest extends TestCase {
    private \App\Film $film;


    protected function setUp() : void
    {
        // Cette méthode est appelé lors de l'exécution de chaque test
        parent::setUp();
        $this->film = new \App\Film("Cars", "Jean", new DateTime("2022-03-08"));
    }

    #[PHPUnit\Framework\Attributes\Test]
    public function ajouterActeur_ActeurExistant_Exception() {
        // Vérification de l'exception
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("L'acteur a déjà été ajouté");
        // Arrange
        $acteur = new \App\Acteur("Jean", "Dupond");
        $this->film->ajouterActeur($acteur);
        // Act
        $this->film->ajouterActeur($acteur);
        // Assert
    }

    #[PHPUnit\Framework\Attributes\Test]
    public function getAnciennete_DateEgale_True() {
        // Arrange
        $dateDiff = 2;
        // Act
        $resultat = $this->film->getAnciennete();
        // Assert
        $this->assertEquals($dateDiff, $resultat);
    }
}

