<!-- views/paiement_view.php -->
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/paiement_view.css">
    <title>paiement</title>
</head>
<body>
    <div class="page">
        <h2>Liste des Paiements</h2>
        <table>
            <thead>
                <tr>
                    <th>Identifient du paiement</th>
                    <th>identifiant  de la facture payé</th>
                    <th>Montant payé</th>
                    <th>Date de paiement</th>
                    <th>Mode de paiement</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php if(isset($paiements) && !empty($paiements)): ?>
                    <?php foreach($paiements as $paiement): ?>
                    <tr>
                        <td><?php echo $paiement['id_paie']; ?></td>
                        <td><?php echo $paiement['id_facture']; ?></td>
                        <td><?php echo $paiement['mont_paie']; ?> </td>
                        <td><?php echo $paiement['date_paie']; ?></td>
                        <td><?php echo $paiement['mode_paie']; ?></td>
                        
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Aucun paiement trouvé</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>