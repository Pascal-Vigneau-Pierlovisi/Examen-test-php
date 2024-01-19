<?php
// TacheController.php

namespace testUnitaire;

class TacheController
{
    private $gestionTaches;

    public function __construct(GestionTaches $gestionTaches)
    {
        $this->gestionTaches = $gestionTaches;
    }

    public function afficherListeTaches()
    {
        $taches = $this->gestionTaches->getTaches(); // Supposons que vous ayez une méthode getTaches() pour obtenir la liste des tâches.
        // Utilisez un moteur de templates ou génèrez du HTML pour afficher la liste des tâches ici.
        // Par exemple, vous pouvez boucler sur $taches et les afficher dans une table HTML.
    }

    public function afficherTacheParNom($nomTache)
    {
        $tache = $this->gestionTaches->getTacheParNom($nomTache); // Supposons que vous ayez une méthode getTacheParNom() pour obtenir une tâche par nom.
        // Affichez les détails de la tâche individuelle ici.
    }
}
