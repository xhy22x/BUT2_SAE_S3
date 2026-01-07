<?php

ob_start();

/** @var PDO $pdo */
require('../../../config/database.php');
require('../../models/postsFunctions.php');

//Suppression
if(isset($_POST['delete'])){
    deletePost($pdo, (int)$_POST['post_id']);
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
    updatePost($pdo, $id, $data);
    header("Location: edit-post.php?id=$id");
    exit();
}

//Affichage
$posts = getAllPosts($pdo);
?>

<div class="d-flex justify-content-center my-5">
    <a class="btn btn-outline-success btn-lg ms-2" href="create-articles.php">
        <i class="bi bi-plus-circle"></i> Publier un article
    </a>
</div>
<div class="alert alert-info">
    <strong>Info :</strong> Seuls les 3 articles les plus récents seront visibles par le public.
    <a href="../../../public/index.php#section-H-reseaux" target="_blank">Voir sur le site</a>
</div>
<br>
<?php if(!empty($posts)): ?>
    <div class="row g-3">
        <?php foreach($posts as $post): ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <?php if(!empty($post['image_url'])): ?>
                        <img src="<?= $post['image_url'] ?>" class="card-img-top" alt="Image de l'article">
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center pb-3">
                            <h5 class="card-title"><?= $post['title'] ?></h5>

                            <form method="POST" class="ms-auto d-flex gap-2">
                                <input type="hidden" name="post_id" value="<?= $post['id'] ?>">

                                <a href="edit-articles.php?id=<?= $post['id'] ?>" class="btn btn-secondary btn-sm my-1">Modifier</a>
                                <button type="submit" name="delete" class="btn btn-danger btn-sm my-1">Supprimer</button>

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
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>Aucun article trouvé.</p>
<?php endif; ?>

<?php
$content = ob_get_clean();
include '../partials/admin-template.php';
