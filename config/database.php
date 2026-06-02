<?php
// Nom de l'application
$nom_app = 'Gestion facturation';

$host = 'localhost';
$dbname = 'db_facturation';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass,
        [  // ← Ajoutez ces crochets (tableau)
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]  // ← Fermez le tableau
    );
} catch (PDOException $e) {
    die('Connexion echouee : ' . $e->getMessage());
}