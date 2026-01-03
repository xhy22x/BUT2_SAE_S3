<?php
require('../controllers/admin/security.php');
require '../../vendor/autoload.php';

use App\Config\Database;
use App\Controllers\Admin\PostManager;

$db = new Database();
$controller = new PostManager($db);
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head-admin.php' ?>
<body>
    <?php include 'partials/navbar-admin.php' ?>
    <br><br>

    <?php
        if(isset($_POST['validate'])){
            $title = htmlspecialchars($_POST['title']);
            $content = htmlspecialchars($_POST['content']);
            $publish_date = $_POST['publish_date'];
            $image_url = htmlspecialchars($_POST['image_url']);
            $source = htmlspecialchars($_POST['source']);
            $likes_count = isset($_POST['likes_count']) ? (int)$_POST['likes_count'] : 0;
            $comments_count = isset($_POST['comments_count']) ? (int)$_POST['comments_count'] : 0;

            $controller->createPost([
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
    <form class="form-post container" method="POST">
        <!-- Titre de l'article -->
        <div class="mb-3">
            <label class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" name="title" placeholder="Entrez le titre" required>
        </div>

        <!-- Date de publication -->
        <div class="mb-3">
            <label class="form-label">Date de publication</label>
            <input type="date" class="form-control" name="publish_date" required>
        </div>

        <!-- Contenu de l'article -->
        <div class="mb-3">
            <label class="form-label">Contenu de l'article</label>
            <textarea class="form-control" rows="8" name="content" placeholder="Rédigez le contenu..." required></textarea>
        </div>

        <!-- URL de l'image -->
        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="url" class="form-control" name="image_url" placeholder="https://example.com/image.jpg">
        </div>

        <!-- Source -->
        <div class="mb-3">
            <label class="form-label">Source de l'article</label>
            <input type="text" class="form-control" name="source" placeholder="Ex: Le Monde">
        </div>

        <!-- Likes et commentaires -->
        <div class="mb-3">
            <label class="form-label">Nombre de likes</label>
            <input type="number" class="form-control" name="likes_count" value="0" min="0">
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre de commentaires</label>
            <input type="number" class="form-control" name="comments_count" value="0" min="0">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Submit</button>
        <a href="admin-panel.php" class="btn btn-secondary">Annuler</a>
    </form>
</body>
</html>
