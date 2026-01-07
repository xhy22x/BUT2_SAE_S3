<?php

ob_start();

/** @var PDO $pdo */
require('../../../config/database.php');
require('../../models/postsFunctions.php');

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

$fields = [
    'title' => ['label'=>"Titre de l'article",'type'=>'text','placeholder'=>'Entrez le titre'],
    'publish_date' => ['label'=>'Date de publication','type'=>'date','placeholder'=>'Entrez la date'],
    'content' => ['label'=>"Contenu de l'article",'type'=>'textarea','placeholder'=>'Rédigez le contenu...'],
    'image_url' => ['label'=>"Image URL",'type'=>'url','placeholder'=>'https://example.com/image.jpg'],
    'source' => ['label'=>"Source de l'article",'type'=>'text','placeholder'=>'Ex: Le Monde'],
    'likes_count' => ['label'=>"Nombres de likes",'type'=>'number','placeholder'=>'0'],
    'comments_count' => ['label'=>"Nombres de commentaires",'type'=>'number','placeholder'=>'0'],
];
$buttonText = "Ajouter un article";
?>

<div class="container my-4">
    <a href="<?= $_SERVER['HTTP_REFERER'] ?? 'articles.php' ?>">← Revenir à la page précédente</a>
</div>
<?php include '../components/form.php' ?>


<?php
$content = ob_get_clean();
include '../partials/admin-template.php';

