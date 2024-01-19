<?php

namespace testUnitaire;

use PHPUnit\Framework\TestCase;

class CalculerDureeTotaleTest extends TestCase
{
    public function testCalculerDureeTotaleAvecTachesNonVides()
    {
        // Créer un tableau de tâches avec des durées estimées positives
        $taches = [
            ['duree' => 5],
            ['duree' => 3],
            ['duree' => 8],
        ];

        // Appeler la fonction calculerDureeTotale de la classe Toolbox
        $dureeTotale = Toolbox::calculerDureeTotale($taches);

        // Vérifier que la durée totale est correcte (5 + 3 + 8 = 16)
        $this->assertEquals(16, $dureeTotale);
    }

    public function testCalculerDureeTotaleAvecTachesVides()
    {
        // Créer un tableau de tâches vide
        $taches = [];

        // Appeler la fonction calculerDureeTotale de la classe Toolbox
        $dureeTotale = Toolbox::calculerDureeTotale($taches);

        // Vérifier que la durée totale est de 0 car il n'y a pas de tâches
        $this->assertEquals(0, $dureeTotale);
    }

    public function testCalculerDureeTotaleAvecTachesNegatives()
    {
        // Créer un tableau de tâches avec des durées estimées négatives
        $taches = [
            ['duree' => 5],
            ['duree' => -3],
            ['duree' => 8],
        ];

        // Appeler la fonction calculerDureeTotale de la classe Toolbox
        $dureeTotale = Toolbox::calculerDureeTotale($taches);

        // Vérifier que la durée totale est correcte en ignorant les durées négatives (5 + 8 = 13)
        $this->assertEquals(13, $dureeTotale);
    }
}
