<?php

namespace testUnitaire;

use PHPUnit\Framework\TestCase;

class ProjetIntegrationTest extends TestCase
{
    public function testAjouterTacheAuProjet()
    {
        // Créez une instance de GestionTaches
        $gestionTaches = new GestionTaches();

        // Créez une instance de Projet avec l'instance de GestionTaches
        $projet = new Projet("Mon Projet", $gestionTaches);

        // Ajouter une tâche au projet
        $projet->ajouterTache("Tâche 1", "Description de la tâche 1");

        // Vérifier que la tâche a été ajoutée au projet
        $this->assertEquals(1, $projet->getNombreTaches());

        // Vérifier que la tâche a également été ajoutée à la classe GestionTaches
        $this->assertTrue($gestionTaches->verifierTache("Tâche 1"));
    }


    public function testCompleterTacheDansProjet()
    {
        $gestionTaches = new GestionTaches();
        $projet = new Projet("Mon Projet", $gestionTaches);
        $projet->ajouterTache("Tâche 1", "Description de la tâche 1");

        // Compléter une tâche dans le projet
        $projet->completerTacheDansProjet("Tâche 1");

        // Vérifier que la tâche est complétée dans le projet
        $this->assertTrue($projet->verifierTacheDansProjet("Tâche 1"));

        // Vérifier que la tâche est également complétée dans la classe GestionTaches
        $this->assertTrue($gestionTaches->verifierTache("Tâche 1"));
    }
}
