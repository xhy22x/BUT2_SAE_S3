<?php
session_start();

//L'utilisateur valide le formulaire
if(isset($_POST["validate"])){

    //Vérification des données entrées
    $checkIfAllInputsAreValids = !empty($_POST['pseudo']) && !empty($_POST['password']);
    if($checkIfAllInputsAreValids){

        //Donnée par défaut du admin
        $default_pseudo = 'admin';
        $default_password = 'admin';

        //Donnée entrée par l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        //Vérification de l'authentification
        if($user_pseudo == $default_pseudo && $user_password == $default_password){

            //Session d'authentification
            $_SESSION['auth'] = true;

            //Redirection vers page d'admin
            header('Location: admin-panel.php');

        }else{
            $errormsg = "Votre pseudo ou mot de passe est incorrect.";
        }

    }else{
        $errormsg = 'Veuillez remplir tous les champs';
    }
}

