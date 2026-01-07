<?php
require('../controllers/security.php');
requireAdmin();

/** @var PDO $pdo */
require('../../config/database.php');
require('../models/postsFunctions.php');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$post = getPostById($pdo, $id);

if(isset($_POST['validate'])){
    $data = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'publish_date' => $_POST['publish_date'],
        'image_url' => $_POST['image_url'],
        'source' => $_POST['source'],
        'likes_count' => $_POST['likes_count'],
        'comments_count' => $_POST['comments_count']
    ];
    updatePost($pdo, $id, $data);
    header("Location: admin-panel.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head-admin.php' ?>
<body>
<?php include 'partials/navbar-admin.php' ?>
    <br><br>
    <?php include 'components/post-form.php' ?>
</body>
</html>
