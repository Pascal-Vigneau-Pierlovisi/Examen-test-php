<?php

namespace testUnitaire;
class Toolbox{
    public static function calculerDureeTotale(array $taches): int
    {
        $dureeTotale = 0;

        foreach ($taches as $tache) {
            if (isset($tache['duree']) && is_numeric($tache['duree'])) {
                $duree = intval($tache['duree']);
                if ($duree > 0) {
                    $dureeTotale += $duree;
                }
            }
        }

        return $dureeTotale;
    }
}
