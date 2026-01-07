<?php

class Subvention
{
    public static function toutes($pdo)
    {
        $stmt = $pdo->query("
            SELECT s.*, p.nom AS partenaire_nom
            FROM subventions s
            JOIN partenaires p ON p.id = s.partenaire_id
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function creer($pdo, $donnees)
    {
        $stmt = $pdo->prepare("
            INSERT INTO subventions (partenaire_id, montant, annee, statut, commentaire)
            VALUES (:partenaire, :montant, :annee, :statut, :commentaire)
        ");

        $stmt->execute([
            ':partenaire' => $donnees['partenaire_id'],
            ':montant' => $donnees['montant'],
            ':annee' => $donnees['annee'],
            ':statut' => $donnees['statut'],
            ':commentaire' => $donnees['commentaire']
        ]);
    }
}
