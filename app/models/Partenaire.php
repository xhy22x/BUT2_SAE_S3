<?php

class Partenaire
{
    public static function tous($pdo)
    {
        $stmt = $pdo->query("SELECT * FROM partenaires");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function creer($pdo, $donnees)
    {
        $stmt = $pdo->prepare("
        INSERT INTO partenaires (nom, type, email_contact, telephone_contact)
        VALUES (:nom, :type, :email, :telephone)
    ");

        $stmt->execute([
            ':nom' => $donnees['nom'],
            ':type' => $donnees['type_partenaire'],
            ':email' => $donnees['email'] ?? null,
            ':telephone' => $donnees['telephone'] ?? null
        ]);
    }
}
