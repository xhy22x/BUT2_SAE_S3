<?php
function getPosts(PDO $pdo, $limit){
$stmt = $pdo->prepare('SELECT * FROM articles ORDER BY publish_date DESC LIMIT :limit');
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->execute();
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}