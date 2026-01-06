<?php

session_start();
function requireAdmin() {
    if (!isset($_SESSION['auth']) || $_SESSION['role'] !== 'admin') {
        header('Location: ../../public/login.php');
        exit;
    }
}

function requireResponsable($poleId) {
    if (
        !isset($_SESSION['auth']) ||
        $_SESSION['role'] !== 'responsable' ||
        $_SESSION['pole_id'] != $poleId
    ) {
        header('Location: ../../public/login.php');
        exit;
    }
}
