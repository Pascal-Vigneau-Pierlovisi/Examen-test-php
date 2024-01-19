<?php

namespace testUnitaire;

use InvalidArgumentException;

class GestionTaches
{
    private $taches = [];

    public function getTaches()
    {
        return $this->taches;
    }

    public function getTacheParNom($nom)
    {
        foreach ($this->taches as $tache) {
            if ($tache['nom'] === $nom) {
                return $tache;
            }
        }
        return null; // Retourne null si la tâche n'est pas trouvée
    }

    public function ajouterTache($titre, $description)
    {
        $this->taches[$titre] = [
            'description' => $description,
            'completee' => false,
        ];
    }

    public function completerTache($titre)
    {
        if (isset($this->taches[$titre])) {
            $this->taches[$titre]['completee'] = true;
        } else {
            throw new InvalidArgumentException("La tâche '$titre' n'existe pas.");
        }
    }

    public function verifierTache($titre)
    {
        if (isset($this->taches[$titre])) {
            return $this->taches[$titre]['completee'];
        } else {
            throw new InvalidArgumentException("La tâche '$titre' n'existe pas.");
        }
    }

    public function getNombreTaches()
    {
        return count($this->taches);
    }
}
