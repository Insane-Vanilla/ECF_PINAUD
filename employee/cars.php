<?php

    require_once '../lib/config.php';
    require_once '../lib/pdo.php';
    require_once '../lib/session.php';
    require_once '../lib/car.php';
    require_once 'templates/header.php';


$cars = getCars($pdo);
//$carOptions = getCarOptions($pdo, $id);


?>



<div class="employe-cars">

    <h1>Gérer les voitures</h1>
    
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
                <?php } ?>
                        <td>
                            <?php foreach ($carOptions as $carOption) { ?>
                                <select name="options">
                                    <option value="List">--Liste des options--</option>
                                    <option value ="option"><?=ucfirst(htmlentities($carOption['option_description']))?></option>
                                </select>
                            <?php } ?>
                        </td>
                
            </tbody>

        </table>


        <!--AJOUTER UNE VOITURE -->
        <h2>Ajouter une voiture</h2>




        <!--SUPPRIMER UNE VOITURE -->
        <h2>Supprimer une voiture</h2>

            <p>Indiquer l'identifiant de la voiture</p>
            <input value="identifiant" type="text">
            <p>Indiquer l'identifiant à nouveau</p>
            <input value="identifiant" type="text">

            <input type="submit" value="Confirmer la suppression">

</div>
