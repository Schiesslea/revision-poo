<?php

use PHPUnit\Framework\TestCase;

class PersonneTest extends TestCase {
    private \App\Personne $personne;


    protected function setUp() : void
    {
        // Cette méthode est appelé lors de l'exécution de chaque test
        parent::setUp();
        $this->personne = new \App\Personne("Schiesslé");
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function liker_AjoutLike_True() {
        // Arrange
        $equipe = new \App\Entites\Equipe("FCMA");
        $resultat = 1;
        // Act
        $this->personne->liker($equipe);
        // Assert
        $this->assertEquals($equipe->getNombreLikes(), $resultat);
    }
}
