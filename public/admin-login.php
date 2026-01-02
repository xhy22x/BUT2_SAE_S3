<?php $title = "Connexion Administrateur - Energie Jeunes"; ?>
<?php require('../app/controllers/admin/login.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php include '../app/views/partials/head-admin.php'; ?>
<body>
    <br><br>
    <form class="container" method="POST">

        <?php if(isset($errormsg)){echo "<p class='errorMsg'>".$errormsg."</p>";} ?>

        <div class="mb-3">
            <label class="form-label">Pseudo Administrateur</label>
            <input type="text" class="form-control" name="pseudo" autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
    </form>
</body>
</html>
