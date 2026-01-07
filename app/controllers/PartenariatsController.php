<?php

require_once __DIR__ . '/../models/Partenaire.php';
require_once __DIR__ . '/../models/Subvention.php';

class PartenariatsController
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function afficher()
    {
        $listePartenaires = Partenaire::tous($this->pdo);
        $listeSubventions = Subvention::toutes($this->pdo);

        require __DIR__ . '/../views/pages/all-form-partenariats.php';
    }

    public function enregistrerPartenaire()
    {
        if (!empty($_POST)) {
            Partenaire::creer($this->pdo, $_POST);
        }

        header('Location: /partenariats.php');
        exit;
    }

    public function enregistrerSubvention()
    {
        if (!empty($_POST)) {
            Subvention::creer($this->pdo, $_POST);
        }

        header('Location: /public/partenariats.php');
        exit;
    }
}
