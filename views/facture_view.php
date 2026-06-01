<!-- views/facture_view.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/facture_view.css">
    <title>Factures</title>
</head>
<body>
    <div class="page">
        <h2>Liste des Factures</h2>
        <table>
            <thead>
                <tr>
                    <th>identifiant de la facture</th>
                    <th>identifiant du client</th>
                    <th>identifiant de l'utilisateur</th>
                    <th>Numero de la facture</th>
                    <th>la date de l'emission</th>
                    <th>La dateate de l'echeance</th>
                    <th>Montant hors taxe</th>
                    <th>Taux de TVA</th>
                    <th>Montant total</th>
                    <th>stature</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($factures) && !empty($factures)): ?>
                    <?php foreach($factures as $facture): ?>
                    <tr>
                        <td><?php echo $facture['id_fact']; ?></td>
                        <td><?php echo $facture['id_client']; ?></td>
                        <td><?php echo $facture['id']; ?> </td>
                        <td><?php echo $facture['num_fact']; ?></td>
                        <td><?php echo $facture['date_emise']; ?></td>
                        <td><?php echo $facture['date_ech']; ?></td>
                        <td><?php echo $facture['montant_ht']; ?></td>
                        <td><?php echo $facture['taux_tva']; ?></td>
                        <td><?php echo $facture['mont_ttc']; ?></td>
                        <td><?php echo $facture['statut']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="10">Aucune facture trouvée</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>