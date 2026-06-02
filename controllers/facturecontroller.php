<?php
// controllers/FactureController.php
require_once __DIR__ . '/../models/Facture.php';
class FactureController {

    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        $factureModel = new Facture($this->pdo);
        $factures = $factureModel->all();
        include __DIR__ . '/../views/facture_view.php';
    }

    public function show() {
        $id = isset($_GET['id_fact']) ? $_GET['id_fact'] : null;
        if($id){ 
        $factureModel = new Facture($this->pdo);
        $facture = $factureModel->findById($id);
        include __DIR__ . '/../views/facture_show.php';
        }else{
            echo "id non specifié";
        }
    }
}
?>
