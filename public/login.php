<?php $title = "Connexion Administrateur - Energie Jeunes"; ?>
<?php require('../app/controllers/admin/login.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php include '../app/views/partials/head.php'; ?>
<body style="background-color: #f0f0f0;">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="form-login" method="POST">

            <div class="text-center mt-3 mb-5">
                <img src="assets/images/logo-EJ.svg" alt="Image Logo Energie Jeunes" style="max-width: 150px;">
            </div>
            <div class="text-center">
                <?php if(isset($errormsg)){echo "<p class='errorMsg'>".$errormsg."</p>";} ?>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control mx-auto" name="pseudo" placeholder="Identifiant Administrateur" autocomplete="off">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control mx-auto" name="password" placeholder="Mot de passe">
            </div>
            <div class="d-flex justify-content-center py-3">
                <button type="submit" name="validate">Se connecter</button>
            </div>
        </form>
    </div>
</body>
</html>
