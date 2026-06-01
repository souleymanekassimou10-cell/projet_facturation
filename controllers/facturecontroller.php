<?php
// controllers/FactureController.php
require_once __DIR__ . '/../models/Facture.php';
class FactureController {
    public function index() {
        $factureModel = new Facture();
        $factures = $factureModel->getAll();
        include __DIR__ . '/../views/facture_view.php';
    }

    public function show() {
        $id = isset($_GET['id_fact']) ? $_GET['id_fact'] : null;
        $factureModel = new Facture();
        $facture = $factureModel->getById($id_fact);
        include __DIR__ . '/../views/facture_show.php';
    }
}
?>
