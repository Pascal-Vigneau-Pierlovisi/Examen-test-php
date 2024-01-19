<?php
// TacheControllerTest.php

namespace testUnitaire;

use PHPUnit\Framework\TestCase;

class TacheControllerTest extends TestCase
{
    public function testAfficherListeTaches()
    {
        // Créez un objet GestionTaches fictif avec des tâches pour les tests.
        $gestionTaches = new GestionTaches();
        $gestionTaches->ajouterTache("Tâche 1", "Description de la tâche 1");
        $gestionTaches->ajouterTache("Tâche 2", "Description de la tâche 2");

        // Créez une instance de TacheController avec l'objet GestionTaches fictif.
        $tacheController = new TacheController($gestionTaches);

        // Exécutez la méthode afficherListeTaches et vérifiez le résultat (peut être fait en vérifiant la sortie HTML générée).
        // Assurez-vous que la liste des tâches est correcte.
    }

    public function testAfficherTacheParNom()
    {
        // Créez un objet GestionTaches fictif avec des tâches pour les tests.
        $gestionTaches = new GestionTaches();
        $gestionTaches->ajouterTache("Tâche 1", "Description de la tâche 1");

        // Créez une instance de TacheController avec l'objet GestionTaches fictif.
        $tacheController = new TacheController($gestionTaches);

        // Exécutez la méthode afficherTacheParNom avec un nom de tâche spécifique et vérifiez le résultat.
        // Assurez-vous que les détails de la tâche individuelle sont corrects.
    }
}
