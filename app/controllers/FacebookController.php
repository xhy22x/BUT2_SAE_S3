<?php

namespace App\Controllers;

use App\Config\Database;
use PDO;

class FacebookController {
    private $db;

    // constructeur pour passer la connexion
    public function __construct(Database $database) {
        $this->db = $database->pdo;
    }

    public function getPosts($limit = 3) {
        $stmt = $this->db->prepare('SELECT * FROM posts ORDER BY publish_date DESC LIMIT :limit');
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
