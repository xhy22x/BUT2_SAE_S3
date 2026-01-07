<?php
requireResponsable(3);
function createPost(PDO $pdo, array $data){
    $stmt = $pdo->prepare(' 
        INSERT INTO articles 
        (title, content, publish_date, image_url, source, likes_count, comments_count)
        VALUES (:title, :content, :publish_date, :image_url, :source, :likes_count, :comments_count)
    ');
    $stmt->execute([
        ':title' => $data['title'],
        ':content' => $data['content'],
        ':publish_date' => $data['publish_date'],
        ':image_url' => $data['image_url'],
        ':source' => $data['source'],
        ':likes_count' => $data['likes_count'],
        ':comments_count' => $data['comments_count']
    ]);
}

function getAllPosts(PDO $pdo) : array {
    $stmt = $pdo->query('SELECT * FROM articles ORDER BY publish_date DESC');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPostById(PDO $pdo, $id){
    $stmt = $pdo->prepare('SELECT * FROM articles WHERE id = :id');
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function updatePost(PDO $pdo, $id, array $data){
    $stmt = $pdo->prepare('
        UPDATE articles SET
            title = :title,
            content = :content,
            publish_date = :publish_date,
            image_url = :image_url,
            source = :source,
            likes_count = :likes_count,
            comments_count = :comments_count
        WHERE id = :id
    ');
    $data['id'] = $id;
    $stmt->execute([
        ':title' => $data['title'],
        ':content' => $data['content'],
        ':publish_date' => $data['publish_date'],
        ':image_url' => $data['image_url'],
        ':source' => $data['source'],
        ':likes_count' => $data['likes_count'],
        ':comments_count' => $data['comments_count'],
        ':id' => $id
    ]);
}

function deletePost(PDO $pdo, $id){
    $stmt = $pdo->prepare('DELETE FROM articles WHERE id = :id');
    $stmt->execute([':id' => $id]);
}


