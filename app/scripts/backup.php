<?php
requireAdmin();

$dbFile = '../../config/database.sqlite';

$backupDir = '../../backups/';
if (!is_dir($backupDir)) mkdir($backupDir, 0777, true);

$backupFile = $backupDir . 'database_backup_' . date('Y-m-d_H-i-s') . '.sqlite';

if (copy($dbFile, $backupFile)) {
    echo "Backup créé : $backupFile";
} else {
    echo "Erreur lors de la sauvegarde";
}
