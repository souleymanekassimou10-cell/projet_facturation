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
    <!-- views/dashboard.php sans iframe -->
<div class="container">
    <div class="sidebar">
        <h3>Menu</h3>
        <ul>
            <li><a href="?controller=facture&action=index">Factures</a></li>
            <li><a href="?controller=client&action=index">Clients</a></li>
            <li><a href="?controller=paiement&action=index">Paiements</a></li>
        </ul>
    </div>
    
    <div class="content">
        <?php
        // Inclure le contenu directement dans la page
        if(isset($_GET['controller'])) {
            $controller = $_GET['controller'];
            $action = isset($_GET['action']) ? $_GET['action'] : 'index';
            
            $controllerFile = "controllers/" . ucfirst($controller) . "Controller.php";
            if(file_exists($controllerFile)) {
                include $controllerFile;
                $controllerName = ucfirst($controller) . "Controller";
                $ctrl = new $controllerName();
                $ctrl->$action();
            }
        } else {
            echo "<h2>Bienvenue sur le Dashboard</h2>";
            echo "<p>Sélectionnez une option dans le menu de gauche.</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
