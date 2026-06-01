<?php
// controllers/PaiementController.php
require_once 'models/Paiement.php';

class PaiementController {
    public function index() {
        $paiementModel = new Paiement();
        $paiements = $paiementModel->getAll();
        include 'views/paiement_view.php';
    }

    public function show() {
        $id = isset($_GET['id_paie']) ? $_GET['id_paie'] : null;
        $paiementModel = new Paiement();
        $paiement = $paiementModel->getById($id);
        include 'views/paiement_view.php';
    }
}
?>