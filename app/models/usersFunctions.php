<?php
requireAdmin();
function getAllUsers(PDO $pdo) : array {
    $stmt = $pdo->query("SELECT 
        u.id, 
        u.name, 
        u.email, 
        u.password, 
        u.role, 
        p.nom as pole_name,
        u.created_at 
    FROM users u
    LEFT JOIN poles p ON u.pole_id = p.id
    ORDER BY u.id ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserById(PDO $pdo, $id){
    $stmt = $pdo->prepare('SELECT * FROM users WHERE id = :id');
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function createUser(PDO $pdo, array $data){
    $stmt = $pdo->prepare("
        INSERT INTO users (name, email, password, role, pole_id, created_at)
        VALUES (:name, :email, :password, :role, :pole_id, CURRENT_TIMESTAMP)
    ");

    $stmt->execute([
        ':name' => $data['name'],
        ':email' => $data['email'],
        ':password' => $data['password'],
        ':role' => $data['role'],
        ':pole_id' => $data['pole_id'] ?? null,
    ]);
}

function updateUser(PDO $pdo, $id, array $data) {
    $stmt = $pdo->prepare('
        UPDATE users SET
            name = :name,
            email = :email,
            role = :role,
            pole_id = :pole_id
        WHERE id = :id
    ');

    $stmt->execute([
        ':name'    => $data['name'],
        ':email'   => $data['email'],
        ':role'    => $data['role'],
        ':pole_id' => $data['pole_id'] ?? null, // null si admin
        ':id'      => $id
    ]);
}


function deleteUser($id) {
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute([':id' => $id]);
}