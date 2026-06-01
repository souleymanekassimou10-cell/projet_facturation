<?php
// models/Paiement.php
require_once 'config/database.php';

class Paiement {
    private $conn;
    private $table = "paiement";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM" . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id_paie) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_paie = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id_paie);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>