<?php

session_start();
if(!isset($_SESSION['auth'])){
    header('Location: ../../public/admin-login.php');
}
