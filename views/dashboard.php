<?php
session_start();

if (!isset($_SESSION['user_id'])) {
	header('Location: login.html');
	exit;
}

$nom = $_SESSION['user_nom'] ?? 'Utilisateur';
$role = $_SESSION['user_role'] ?? 'Non défini';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <title>Dashboard</title>
    
</head>
<body>
    <div class="container">
        <!-- Sidebar gauche avec les liens -->
        <div class="sidebar">
            <h3>Menu</h3>
            <ul>
                <li><a href="?controller=facture&action=index" target="content-frame">Factures</a></li>
                <li><a href="?controller=client&action=index" target="content-frame">Clients</a></li>
                <li><a href="?controller=paiement&action=index" target="content-frame">Paiements</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
