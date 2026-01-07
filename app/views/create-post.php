<?php
require('../controllers/security.php');
requireAdmin();

/** @var PDO $pdo */
require('../../config/database.php');
require('../models/postsFunctions.php');

if(isset($_POST['validate'])){
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $publish_date = $_POST['publish_date'];
    $image_url = htmlspecialchars($_POST['image_url']);
    $source = htmlspecialchars($_POST['source']);
    $likes_count = isset($_POST['likes_count']) ? (int)$_POST['likes_count'] : 0;
    $comments_count = isset($_POST['comments_count']) ? (int)$_POST['comments_count'] : 0;

    createPost($pdo,[
            'title' => $title,
            'content' => $content,
            'publish_date' => $publish_date,
            'image_url' => $image_url,
            'source' => $source,
            'likes_count' => $likes_count,
            'comments_count' => $comments_count
    ]);
    header('Location: admin-panel.php');
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
