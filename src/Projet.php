<?php

namespace testUnitaire;

use InvalidArgumentException;
class Projet
{
    private $nom;
    private $taches = [];
    private $gestionTaches;

    public function __construct($nom, GestionTaches $gestionTaches)
    {
        $this->nom = $nom;
        $this->gestionTaches = $gestionTaches;
    }

    public function ajouterTache($titre, $description)
    {
        // Ajouter une tâche au projet
        $this->taches[$titre] = [
            'description' => $description,
            'completee' => false,
        ];

        // Ajouter également la tâche à la classe GestionTaches
        $this->gestionTaches->ajouterTache($titre, $description);
    }

    public function completerTacheDansProjet($titre)
    {
        // Marquer une tâche comme complétée dans le projet
        if (isset($this->taches[$titre])) {
            $this->taches[$titre]['completee'] = true;
        } else {
            throw new InvalidArgumentException("La tâche '$titre' n'existe pas dans le projet.");
        }

        // Marquer également la tâche comme complétée dans la classe GestionTaches
        $this->gestionTaches->completerTache($titre);
    }

    public function verifierTacheDansProjet($titre)
    {
        // Vérifier si une tâche est complétée dans le projet
        if (isset($this->taches[$titre])) {
            return $this->taches[$titre]['completee'];
        } else {
            throw new InvalidArgumentException("La tâche '$titre' n'existe pas dans le projet.");
        }
    }

    public function getNombreTaches()
    {
        return count($this->taches);
    }
}
