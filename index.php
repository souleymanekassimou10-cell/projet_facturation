<?php
session_start();

if (isset($_SESSION['id'])) {
    header('Location: views/dashboard.php');
    exit;
}

header('Location: views/login.html');
exit;