<!-- views/client_view.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/client_view.css">
    <title>client</title>
</head>
<body>
    <div class="page">
        <h2>Liste des Clients</h2>
        <table>
            <thead>
                <tr>
                    <th>Id_client</th>
                    <th>Nom du client</th>
                    <th>Adresse du client</th>
                    <th>Telephonene du client</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($clients) && !empty($clients)): ?>
                    <?php foreach($clients as $client): ?>
                    <tr>
                        <td><?php echo $client['id_client']; ?></td>
                        <td><?php echo $client['nom_client']; ?></td>
                        <td><?php echo $client['adr_client']; ?></td>
                        <td><?php echo $client['tel_client']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">Aucun client trouvé</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>