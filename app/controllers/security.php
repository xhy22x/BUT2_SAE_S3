<?php

session_start();

if(!isset($_SESSION['auth'])){
    header('Location: ../../../public/login.php');
    exit;
}
function requireAdmin() {
    if (!isset($_SESSION['auth']) || $_SESSION['role'] !== 'admin') {
        header('Location: ../../../public/login.php');
        exit;
    }
}

function requireResponsable($poleId) {
    //Si c'est admin, il a accès
    if ($_SESSION['role'] === 'admin') {
        return;
    }
    if (
        !isset($_SESSION['auth']) ||
        $_SESSION['role'] !== 'responsable' ||
        $_SESSION['pole_id'] != $poleId
    ) {
        header('Location: ../../../public/login.php');
        exit;
    }
}
