<?php
require_once 'config/database.php';

$database = new db_facturation();
$conn = $database->getConnection();

if($conn) {
    echo "Connexion réussie à la base de données !";
} else {
    echo "Échec de la connexion.";
}
?>
