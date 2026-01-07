<?php
require('../../controllers/security.php');
requireResponsable(3);
ob_start();

/** @var PDO $pdo */
require('../../../config/database.php');
require('../../models/postsFunctions.php');

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
header("Location: articles.php");
exit();
}

$fields = [
    'title' => ['label'=>"Titre de l'article",'type'=>'text','placeholder'=>'Entrez le titre','value'=>$post['title']],
    'publish_date' => ['label'=>'Date de publication','type'=>'date','placeholder'=>'Entrez la date','value'=>$post['publish_date']],
    'content' => ['label'=>"Contenu de l'article",'type'=>'textarea','placeholder'=>'Rédigez le contenu...','value'=>$post['content']],
    'image_url' => ['label'=>"Image URL",'type'=>'url','placeholder'=>'https://example.com/image.jpg','value'=>$post['image_url']],
    'source' => ['label'=>"Source de l'article",'type'=>'text','placeholder'=>'Ex: Le Monde','value'=>$post['source']],
    'likes_count' => ['label'=>"Nombres de commentaires",'type'=>'number','placeholder'=>'0','value'=>$post['likes_count']],
    'comments_count' => ['label'=>"Nombres de likes",'type'=>'number','placeholder'=>'0','value'=>$post['comments_count']],
];
$buttonText = "Modifier l'article";
?>

<div class="container my-4">
    <a href="<?= $_SERVER['HTTP_REFERER'] ?? 'articles.php' ?>">← Revenir à la page précédente</a>
</div>
<?php include '../components/form.php' ?>


<?php
$content = ob_get_clean();
include '../partials/dashboard-template.php';
