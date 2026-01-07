<?php
require('../../controllers/security.php');
requireAdmin();
ob_start();

$backupDir = '../../../backups/';
$files = [];

if (is_dir($backupDir)) {
    $files = array_diff(scandir($backupDir), ['.', '..']);
    rsort($files);
}
?>

<h2>Liste des sauvegardes de la base</h2>

    <form method="post" class="my-4" onsubmit="return confirm('Voulez-vous vraiment faire une sauvegarde?')">
        <button type="submit" name="backup_now" class="btn btn-success">
            <i class="bi bi-cloud-arrow-down"></i> Créer une sauvegarde maintenant
        </button>
    </form>

<table class="table">
    <thead>
    <tr>
        <th>Fichier</th>
        <th>Date de création</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($files as $file): ?>
        <?php if(strpos($file, '.sqlite') !== false): ?>
            <tr>
                <td><?= htmlspecialchars($file) ?></td>
                <td><?= date("d/m/Y H:i:s", filemtime($backupDir . $file)) ?></td>
                <td>
                    <a href="<?= $backupDir . $file ?>" class="btn btn-sm btn-primary" download>Télécharger</a>
                </td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
include '../partials/dashboard-template.php';