<?php
function connecte(): bool {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['login']);
}
function redirect() {
    if (!connecte()) {
        header('Location: login.php');
        exit();
    }
}

?>