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

    <div class="container mb-3 py-5">
        <form method="POST" enctype="multipart/form-data">
            <label class="form-label fw-bold">Ajouter un fichier :</label>
            <div class="input-group">
                <input type="file" class="form-control" name="uploaded_file" required>
                <button class="btn btn-outline-secondary" type="submit" name="submit">Confirmer</button>
            </div>

            <?php
            if(isset($_POST['submit'])){
                $maxSize = 10 * 1024 * 1024; // 10 Mo
                $validExtensions = array('.pdf', '.doc', '.docx');
                if($_FILES['uploaded_file']['error'] > 0){
                    echo "Une erreur est survenue lors du transfert";
                    die;
                }

                $fileSize = $_FILES['uploaded_file']['size'];
                if($fileSize > $maxSize){
                    echo "Le fichier est trop volumineux (max 10 Mo)";
                    die;
                }

                $filename = $_FILES['uploaded_file']['name'];
                $fileExt = "." . strtolower(substr(strrchr($filename, '.'), 1));

                if(!in_array($fileExt, $validExtensions)){
                    echo "Le fichier n'est pas un fichier valide";
                }

                $tmpName = $_FILES['uploaded_file']['tmp_name'];
                $originalName = pathinfo($_FILES['uploaded_file']['name'], PATHINFO_FILENAME);
                $cleanName = preg_replace('/[^a-zA-Z0-9-_]/', '-', $originalName);
                $cleanName = strtolower($cleanName);
                $fileName = dirname(__DIR__, 2) . "/public/assets/pdf/" . $cleanName . '_' . date('Y-m-d') ;
                $result = move_uploaded_file($tmpName, $fileName);
                if($result){
                    echo "Transfert terminé !";
                }

            }

            ?>
        </form>


    </div>

    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>






</body>
</html>
