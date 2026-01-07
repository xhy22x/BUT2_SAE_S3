<?php

function validateFile($file){
    $maxSize = 50 * 1024 * 1024; // 50 Mo
    $validExtensions = array('.pdf');

    if($file['error'] > 0)
        die("Une erreur est survenue lors du transfert");

    if($file['size'] > $maxSize)
       die("Le fichier est trop volumineux (max 50 Mo)");

    $fileExt = strtolower(strrchr($file['name'], '.'));
    if (!in_array($fileExt, $validExtensions))
        die("Le fichier n'est pas un fichier valide");
}

function generateFileName($originalName): string{
    $name = pathinfo($originalName, PATHINFO_FILENAME);
    $name = preg_replace('/[^a-zA-Z0-9-_]/', '-', $name);
    $name = strtolower($name);
    $date = date('Y-m-d');
    $uniqueId = uniqid();
    $ext = strtolower(strrchr($originalName, '.'));
    return $name . '_' . $date . '_'. $uniqueId . $ext;
}

function moveFile(array $file, string $targetDir): string {
    $finalName = generateFileName($file['name']);
    $destination = rtrim($targetDir, '/') . '/' . $finalName;

    if (!move_uploaded_file($file['tmp_name'], $destination))
        die("Erreur lors du déplacement du fichier");

    return "assets/pdf/" . $finalName;
}

function publish(PDO $pdo, int $id){
    $pdo->query("UPDATE fichiers SET is_published = 0");
    $stmt = $pdo->prepare("UPDATE fichiers SET is_published = 1 WHERE id = :id");
    $stmt->execute([':id' => $id]);
}

function getAllFiles(PDO $pdo): array {
    $stmt = $pdo->query("SELECT * FROM fichiers ORDER BY id DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function deleteFile(PDO $pdo, int $fileId, string $publicDir): bool {
    $stmt = $pdo->prepare("SELECT * FROM fichiers WHERE id = :id");
    $stmt->execute([':id' => $fileId]);
    $file = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$file) return false;
    $filePath = $publicDir . $file['path'];
    if(file_exists($filePath)) unlink($filePath);
    $stmt = $pdo->prepare("DELETE FROM fichiers WHERE id = :id");
    return $stmt->execute([':id' => $fileId]);
}
