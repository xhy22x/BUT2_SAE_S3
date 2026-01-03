<?php
require('../controllers/admin/security.php');
require '../../vendor/autoload.php';

use App\Config\Database;
use App\Controllers\Admin\PostManager;

$db = new Database();
$controller = new PostManager($db);
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$post = $controller->getPostById($id);

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
    $controller->updatePost($id, $data);
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
    <form class="form-post container" method="POST">
        <!-- Titre de l'article -->
        <div class="mb-3">
            <label class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" name="title" value="<?= $post['title'] ?>" required>
        </div>

        <!-- Date de publication -->
        <div class="mb-3">
            <label class="form-label">Date de publication</label>
            <input type="date" class="form-control" name="publish_date" value="<?= $post['publish_date'] ?>" required>
        </div>

        <!-- Contenu de l'article -->
        <div class="mb-3">
            <label class="form-label">Contenu de l'article</label>
            <textarea class="form-control" rows="8" name="content" required><?=htmlspecialchars($post['content'])?></textarea>
        </div>

        <!-- URL de l'image -->
        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="url" class="form-control" name="image_url" value="<?= $post['image_url'] ?>">
        </div>

        <!-- Source -->
        <div class="mb-3">
            <label class="form-label">Source de l'article</label>
            <input type="text" class="form-control" name="source" value="<?= $post['source'] ?>">
        </div>

        <!-- Likes et commentaires -->
        <div class="mb-3">
            <label class="form-label">Nombre de likes</label>
            <input type="number" class="form-control" name="likes_count" value="<?= (int)$post['likes_count'] ?>" min="0">
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre de commentaires</label>
            <input type="number" class="form-control" name="comments_count" value="<?= (int)$post['comments_count'] ?>" min="0">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Modifier l'article</button>
        <a href="admin-panel.php" class="btn btn-secondary">Annuler</a>
    </form>
</body>
</html>
