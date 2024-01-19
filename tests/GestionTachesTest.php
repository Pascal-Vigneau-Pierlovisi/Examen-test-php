<?php

namespace testUnitaire;
// Inclure le fichier de la classe GestionTaches

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class GestionTachesTest extends TestCase
{
    public function testAjouterTache()
    {
        $gestionTaches = new GestionTaches();
        
        // Test d'ajout de tâche
        $gestionTaches->ajouterTache("Tâche 1", "Description de la tâche 1");
        $this->assertEquals(1, $gestionTaches->getNombreTaches()); // Vérifier que le nombre de tâches est égal à 1
    }

    public function testCompleterTache()
    {
        $gestionTaches = new GestionTaches();
        $gestionTaches->ajouterTache("Tâche 1", "Description de la tâche 1");

        // Test de complétion de tâche
        $gestionTaches->completerTache("Tâche 1");
        $this->assertTrue($gestionTaches->verifierTache("Tâche 1")); // Vérifier que la tâche est marquée comme complétée
    }

    public function testCompleterTacheInexistante()
    {
        $gestionTaches = new GestionTaches();

        // Test de complétion d'une tâche inexistante
        $this->expectException(\InvalidArgumentException::class);
        $gestionTaches->completerTache("Tâche Inexistante");
    }

    public function testVerifierTacheInexistante()
{
    $gestionTaches = new GestionTaches();
    
    // Supposons que nous n'avons pas ajouté la tâche 'Tâche Inexistante' à la gestion des tâches.
    
    // Utilisez try-catch pour attraper l'exception InvalidArgumentException
    try {
        $gestionTaches->verifierTache('Tâche Inexistante');
        // Si la tâche existe, cette ligne ne devrait pas être atteinte, et le test échouera.
        $this->fail('L\'exception InvalidArgumentException aurait dû être levée.');
    } catch (InvalidArgumentException $e) {
        // Si l'exception est attrapée, le test réussit.
        $this->assertEquals("La tâche 'Tâche Inexistante' n'existe pas.", $e->getMessage());
    }
}

    public function testVerifierTache()
    {
        $gestionTaches = new GestionTaches();
        $gestionTaches->ajouterTache("Tâche 1", "Description de la tâche 1");
        $gestionTaches->completerTache("Tâche 1");

        // Test de vérification d'une tâche complétée
        $this->assertTrue($gestionTaches->verifierTache("Tâche 1")); // La tâche doit être complétée
    }
}
