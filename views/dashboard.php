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
	<title>Dashboard - Gestion facturation</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<style>
		body {
			background: #f6f7fb;
			min-height: 100vh;
		}

		.hero-card {
			border: 0;
			border-radius: 1rem;
			box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.08);
		}
	</style>
</head>
<body>
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8">
				<div class="card hero-card">
					<div class="card-body p-4 p-md-5">
						<span class="badge bg-success mb-3">Connecté</span>
						<h1 class="h3 mb-2">Bienvenue, <?php echo htmlspecialchars($nom, ENT_QUOTES, 'UTF-8'); ?></h1>
						<p class="text-muted mb-4">Votre rôle actuel est : <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?></p>
						<p class="mb-0">Cette page sert de point d'entrée après authentification et confirme que la session est bien en place.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
