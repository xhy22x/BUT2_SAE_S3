<?php

class PartenariatsController
{
    public function afficher()
    {
        // Ici on récupérerait normalement les données depuis les modèles
        $listePartenaires = [];
        $listeSubventions = [];

        require __DIR__ . '/../views/pages/partenariats.php';
    }

    public function enregistrerPartenaire()
    {
        // Ici on validerait et enregistrerait les données
    }

    public function enregistrerSubvention()
    {
        // Traitement futur
    }
}
