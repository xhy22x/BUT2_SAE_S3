<?php require('../app/controllers/admin/login.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Se connecter - Energie Jeunes</title>
    <link rel='stylesheet' id='style-css' href='assets/css/login.css' media='all' />
</head>
<body style="background-color: #f0f0f0;">
    <div class="d-flex justify-content-center align-items-center vh-100">

        <!-- Formulaire login de l'administrateur -->
        <form class="form-login text-center" method="POST">
            <div class="mt-3 mb-5">
                <img src="assets/images/logo-EJ.svg" alt="Image Logo Energie Jeunes" style="max-width: 150px;">
            </div>
            <?php if(isset($errormsg)){echo "<p class='errorMsg'>".$errormsg."</p>";} ?>
            <div class="mb-3">
                <input type="text" class="form-control mx-auto" name="pseudo" placeholder="Identifiant Administrateur" autocomplete="off">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control mx-auto" name="password" placeholder="Mot de passe">
            </div>
            <a href="index.php">← Aller sur Energie Jeunes</a>
            <div class="d-flex justify-content-center py-3">
                <button type="submit" name="validate">Se connecter</button>
            </div>
        </form>

    </div>
</body>
</html>
