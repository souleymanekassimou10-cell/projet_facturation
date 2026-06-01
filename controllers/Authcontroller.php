<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: ../views/login.html');
  exit;
}

$email = trim($_POST['email'] ?? '');
$motDePasse = $_POST['password'] ?? '';

if ($email === '' || $motDePasse === '') {
  header('Location: ../views/login.html?error=1');
  exit;
}

$stmt = $pdo->prepare('SELECT id, nom, rol, mot_de_passe FROM utilisateur WHERE email = ?');
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($motDePasse, $user['mot_de_passe'])) {
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['user_nom'] = $user['nom'];
  $_SESSION['user_role'] = $user['rol'];

  header('Location: ../views/dashboard.php');
  exit;
}

header('Location: ../views/login.html?error=1');
exit;