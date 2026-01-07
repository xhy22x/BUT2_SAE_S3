<?php
session_start();

/** @var PDO $pdo */
require_once '../config/database.php';

//L'utilisateur valide le formulaire
if(isset($_POST["validate"])){

    //Vérification des données entrées
    $checkIfAllInputsAreValids = !empty($_POST['pseudo']) && !empty($_POST['password']);
    if($checkIfAllInputsAreValids){

        //Donnée entrée par l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        //Recherche dans la base
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->bindParam(':email', $user_pseudo);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        //Vérification de l'authentification
        if($user && $user_password === $user['password']){

            //Session d'authentification
            $_SESSION['auth'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['pole_id'] = $user['pole_id'];

            //Redirection en fonction du rôle
            if($user['role'] === 'admin' || $user['role'] === 'responsable'){
                header('Location: ../app/views/pages/dashboard.php');
                exit;
            }else{
                $_SESSION['error'] = "Rôle ou pôle inconnu.";
                header('Location: login.php');
                exit;
            }

        }else{
            $_SESSION['error'] = "Votre pseudo ou mot de passe est incorrect.";
            header('Location: login.php');
            exit;
        }

    }else{
        $_SESSION['error'] = "Veuillez remplir tous les champs";
        header('Location: login.php');
        exit;
    }
}

if(isset($_SESSION['error'])){
    $errormsg = $_SESSION['error'];
    unset($_SESSION['error']);
}