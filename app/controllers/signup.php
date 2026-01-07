<?php

session_start();

/** @var PDO $pdo */
require_once '../config/database.php';

if (isset($_POST['validate'])) {

    $checkIfAllInputsAreValids =
        !empty($_POST['email']) &&
        !empty($_POST['password']);

    if ($checkIfAllInputsAreValids) {

        $user_email = htmlspecialchars($_POST['email']);
        $user_password = $_POST['password'];


        $checkUser = $pdo->prepare(
            'SELECT id FROM utilisateurs WHERE email = :email'
        );
        $checkUser->bindParam(':email', $user_email);
        $checkUser->execute();

        if ($checkUser->rowCount() > 0) {
            $_SESSION['error'] = "Cet email est déjà utilisé.";
            header('Location: signup.php');
            exit;
        }

        $hashedPassword = password_hash($user_password, PASSWORD_DEFAULT);

        $insertUser = $pdo->prepare(
            'INSERT INTO utilisateurs (email, password, role)
             VALUES (:email, :password, :role)'
        );

        $insertUser->execute([
            ':email' => $user_email,
            ':password' => $hashedPassword,
            ':role' => 'benevole'
        ]);

        // 6️⃣ Connexion automatique après inscription
        $_SESSION['auth'] = true;
        $_SESSION['email'] = $user_email;
        $_SESSION['role'] = 'benevole';

        header('Location: ../app/views/pages/dashboard.php');
        exit;

    } else {
        $_SESSION['error'] = "Veuillez remplir tous les champs.";
        header('Location: signup.php');
        exit;
    }
}

// Message d'erreur
if (isset($_SESSION['error'])) {
    $errormsg = $_SESSION['error'];
    unset($_SESSION['error']);
}
