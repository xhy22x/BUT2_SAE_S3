<?php

namespace App\Controllers\Admin;

use App\Config\Database;

use PDO;

class PostManager {
    private $db;

    public function __construct(Database $database){
        $this->db = $database->pdo;
    }

    public function createPost(array $data){
        $stmt = $this->db->prepare(' 
            INSERT INTO posts 
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

    public function getAllPosts(){
        $stmt = $this->db->query('SELECT * FROM posts ORDER BY publish_date DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPostById($id){
        $stmt = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function updatePost($id, array $data){
        $stmt = $this->db->prepare('
            UPDATE posts SET
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

    public function deletePost($id){
        $stmt = $this->db->prepare('DELETE FROM posts WHERE id = :id');
        $stmt->execute([':id' => $id]);
    }
}
