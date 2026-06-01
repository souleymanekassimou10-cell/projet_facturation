<?php
// controllers/ClientController.php
require_once 'models/Client.php';

class ClientController {
    public function index() {
        $clientModel = new Client();
        $clients = $clientModel->getAll();
        include 'views/client_view.php';
    }

    public function show() {
        $id = isset($_GET['id_client']) ? $_GET['id_client'] : null;
        $clientModel = new Client();
        $client = $clientModel->getById($id);
        include 'views/client_view.php';
    }
}
?>