<?php
require('../controllers/admin/security.php');
require '../../vendor/autoload.php'; // Autoload Composer

use App\Config\Database;
use App\Controllers\Admin\PostManager;

$db = new Database();
$controller = new PostManager($db);

//Suppression
if(isset($_POST['delete'])){
    $controller->deletePost((int)$_POST['post_id']);
    header('Location: admin-panel.php');
    exit();
}

if(isset($_POST['update'])){
    $data = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'publish_date' => $_POST['publish_date'],
            'image_url' => $_POST['image_url'],
            'source' => $_POST['source'],
            'likes_count' => $_POST['likes_count'],
            'comments_count' => $_POST['comments_count']
    ];
    $id = (int)$_POST['post_id'];
    $controller->updatePost($id, $data);
    header("Location: edit-post.php?id=$id");
    exit();
}

//Affichage
$posts = $controller->getAllPosts();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head-admin.php' ?>
<body>
    <?php include 'partials/navbar-admin.php' ?>
    <br><br>

    <!-- -->
    <section class="container">
        <?php if(!empty($posts)): ?>
            <?php foreach($posts as $post): ?>
                <div class="card mb-3">
                    <?php if(!empty($post['image_url'])): ?>
                        <img src="<?= $post['image_url'] ?>" class="card-img-top" alt="Image de l'article">
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center pb-3">
                            <h5 class="card-title"><?= $post['title'] ?></h5>

                            <form method="POST">
                                <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                                <a href="edit-post.php?id=<?= $post['id'] ?>" class="btn btn-secondary btn-sm">Modifier</a>
                                <button type="submit" name="delete" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </div>
                        <p class="card-text"><?= nl2br($post['content']) ?></p>
                        <?php if(!empty($post['source'])): ?>
                            <p class="card-text"><small class="text-muted">Source: <?= htmlspecialchars($post['source']) ?></small></p>
                        <?php endif; ?>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <small>Publié le <?= $post['publish_date'] ?></small>
                        <small>
                            👍 <?= (int)$post['likes_count'] ?> | 💬 <?= (int)$post['comments_count'] ?>
                        </small>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun article trouvé.</p>
        <?php endif; ?>
    </section>


    <section>
        <?php if(!empty($posts)): ?>
        <?php endif; ?>

    </section>
</body>
</html>