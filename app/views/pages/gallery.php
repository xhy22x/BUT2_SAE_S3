<?php

ob_start();

/** @var PDO $pdo */
require('../../../config/database.php');
require('../../models/fileFunctions.php');

if(isset($_POST['submit'])){
    $file = $_FILES['uploaded_file'];

    validateFile($file);
    $path = moveFile($file, dirname(__DIR__, 3) . "/public/assets/pdf/");

    $stmt = $pdo->prepare("INSERT INTO fichiers (filename, path, type) VALUES (:filename, :path, :type)");
    $stmt->execute([
            ':filename' => $file['name'],
            ':path' => $path,
            ':type' => strtolower(pathinfo($file['name'], PATHINFO_EXTENSION))
    ]);
}

if(isset($_POST['publish'])){
    publish($pdo, (int)$_POST['file_id']);
    header('location: gallery.php');
    exit();
}

if(isset($_POST['delete'])){
    $fileId = (int)$_POST['file_id'];
    deleteFile($pdo, $fileId, dirname(__DIR__, 3) . '/public/');
    header('Location: gallery.php');
    exit();
}

$publishedFile = $pdo->query("SELECT * FROM fichiers WHERE is_published = 1 LIMIT 1")->fetch(PDO::FETCH_ASSOC);
$files = getAllFiles($pdo);
?>

<div class="container mb-3 py-5">
    <form method="POST" enctype="multipart/form-data">
        <label class="form-label fw-bold">Ajouter un fichier :</label>
        <div class="input-group">
            <input type="file" class="form-control" name="uploaded_file" required>
            <button class="btn btn-outline-secondary" type="submit" name="submit">Confirmer</button>
        </div>
    </form>

    <br><br>
    <h2>Le Rapport Annuel</h2>
    <hr>
    <?php if($publishedFile): ?>
        <p>Le rapport mis à jour est disponible :
            <a href="/public/<?= htmlspecialchars($publishedFile['path']) ?>" target="_blank">
                <?= htmlspecialchars($publishedFile['filename']) ?>
            </a>
        </p>
    <?php else: ?>
        <p>Aucun rapport n'est actuellement publié.</p>
    <?php endif; ?>

    <?php foreach($files as $file): ?>
    <div class="d-flex align-items-center justify-content-between mb-2">
        <?= htmlspecialchars($file['filename']) ?>
        <div class="d-flex gap-2">
                <form method="POST">
                    <input type="hidden" name="file_id" value="<?= $file['id'] ?>">
                    <button type="submit" class="btn btn-primary" name="publish">
                        <?= $file['is_published'] ? 'Publié' : 'Publier' ?>
                    </button>
                </form>

                <form method="POST">
                    <input type="hidden" name="file_id" value="<?= $file['id'] ?>">
                    <button type="submit" class="btn btn-danger" name="delete">Supprimer</button>
                </form>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
include '../partials/admin-template.php';
