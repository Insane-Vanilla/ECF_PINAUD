<?php

    require_once '../lib/config.php';
    require_once '../lib/pdo.php';
    require_once '../lib/session.php';
    require_once '../lib/car.php';
    require_once 'templates/header.php';

$errors = [];
$notifications = [];

$cars = getCars($pdo);

foreach ($cars as $car) {
    $id = $car['idCar'];
    $carOptions = getCarOptions($pdo, $id);
}


?>



<div class="employe-cars">

    <h1>Gérer les voitures</h1>

        <!--Gérer les notifications et les erreurs-->
        <?php
            foreach ($notifications as $notification){ ?>
                <div class="alerte">
                    <?=$notification;?>
                </div>
        <?php } ?>
        <?php
            foreach ($errors as $error){ ?>
                <div class="alerte">
                    <?=$error;?>
                </div>
        <?php } ?>
    
        <!--LISTE DES VOITURES -->
        <h2>Liste des voitures</h2>
        <table>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Photos</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Modèle</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Année</th>
                    <th scope="col">Carburant</th>
                    <th scope="col">Boîte de vitesse</th>
                    <th scope="col">Kilométrage</th>
                    <th scope="col">Nombre de portes</th>
                    <th scope="col">Nombre de places</th>
                    <th scope="col">Couleur</th>
                    <th scope="col">Puissance fiscale</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($cars as $key => $car) { ?>
                    <tr>
                        <td><?=htmlentities($car["idCar"])?></td>
                        <td>
                            <div class="img-list">
                                <img class="img-car-list" src="/uploads/<?=$car["idCar"]?>.jpg" alt="<?=htmlentities($car["brand"])?>">
                                <img class="img-car-list" src="/uploads/<?=$car["idCar"]?>.jpg" alt="<?=htmlentities($car["brand"])?>">
                                <img class="img-car-list" src="/uploads/<?=$car["idCar"]?>.jpg" alt="<?=htmlentities($car["brand"])?>">
                                <img class="img-car-list" src="/uploads/<?=$car["idCar"]?>.jpg" alt="<?=htmlentities($car["brand"])?>">
                                <img class="img-car-list" src="/uploads/<?=$car["idCar"]?>.jpg" alt="<?=htmlentities($car["brand"])?>">
                                <img class="img-car-list" src="/uploads/<?=$car["idCar"]?>.jpg" alt="<?=htmlentities($car["brand"])?>">
                            </div>
                        </td>
                        <td><?=htmlentities($car["brand"])?></td>
                        <td><?=htmlentities($car["model"])?></td>
                        <td><?=htmlentities($car["price"])?> €</td>
                        <td><?=htmlentities($car["car_year"])?></td>
                        <td><?=ucfirst(htmlentities($car["fuel"]))?></td>
                        <td><?=ucfirst(htmlentities($car["gearbox"]))?></td>
                        <td><?=ucfirst(htmlentities($car["mileage"]))?> km</td>
                        <td><?=ucfirst(htmlentities($car["doors"]))?></td>
                        <td><?=ucfirst(htmlentities($car["seats"]))?></td>
                        <td><?=ucfirst(htmlentities($car["color"]))?></td>
                        <td><?=htmlentities($car["horsepower"])?> CV</td>
                        <td>
                            <select name="options">
                                <option value="List">--Liste des options--</option>
                                    <?php foreach ($carOptions as $carOption) { ?>
                                        <option value ="option"><?=ucfirst(htmlentities($carOption['option_description']))?></option>
                                    <?php } ?>
                            </select>
                        </td>
                        <?php } ?>
                </tr>  
            </tbody>

        </table>

</div>
