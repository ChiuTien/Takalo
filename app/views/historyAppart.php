<?php 
namespace app\views;

use app\controllers\ControllerHistoriqueAppart;


    $controllerHistoriqueAppart = new ControllerHistoriqueAppart();
    $historiqueAppartenance = $controllerHistoriqueAppart->getHistoriqueAppartenanceByObjet(2);
?>

<h1>Historique d'appartenance objet </h1>

<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Heure</th>
            <th>Proprietaire</th>
            <th>Echange</th>
            <th>Objet</th>
            <th>Historique</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($historiqueAppartenance as $hA): ?>
            <tr>
                <td><?= $hA->getDate() ?></td>
                <td><?= $hA->getHeure() ?></td>
                <td><?= $hA->getIdProprietaire() ?></td>
                <td><?= $hA->getIdEchange() ?></td>
                <td><?= $hA->getIdObjet() ?></td>
                <td><?= $hA->getIdHistorique() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
