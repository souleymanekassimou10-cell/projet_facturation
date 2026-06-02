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
  <base href="<?php echo dirname($_SERVER['PHP_SELF']); ?>/">
  <link rel="stylesheet" href="../assets/css/dashboard.css">
  <title>Dashboard</title>
  <style>
    .layout { display:flex; height:100vh; }
    .sidebar { width:220px; padding:20px; background:#f5f5f5; box-shadow:1px 0 0 #ddd; }
    .content { flex:1; padding:0; }
    .sidebar ul { padding:0; margin:0; list-style:none; }
    .sidebar li { margin:8px 0; }
    .sidebar a { color:#333; text-decoration:none; display:block; }
    iframe { width:100%; height:100%; border:0; }
  </style>
</head>
<body>
  <div class="layout">
    <nav class="sidebar">
      <h3>Menu</h3>
      <ul>
        <li><a href="facture_view.php" target="content-frame">Factures</a></li>
        <li><a href="client_view.php" target="content-frame">Clients</a></li>
        <li><a href="paiement_view.php" target="content-frame">Paiements</a></li>
      </ul>
    </nav>

    <main class="content">
      <iframe name="content-frame" src="facture_view.php" title="contenu"></iframe>
    </main>
  </div>
</body>
</html>