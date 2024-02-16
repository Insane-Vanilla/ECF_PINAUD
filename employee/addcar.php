<?php

    require_once '../lib/config.php';
    require_once '../lib/pdo.php';
    require_once '../lib/session.php';
    require_once '../lib/car.php';
    require_once 'templates/header.php';


//$carOptions = getCarOptions($pdo, $id);
$cars = getCars($pdo);

?>



<div class="employe-cars">

    <h1>Gérer les voitures</h1>

        <!--AJOUTER UNE VOITURE -->
        <h2>Ajouter une voiture</h2>

        <form action="" method="POST">
            <label>Marque</label>
            <input type="text">
            <br>
            <label>Modèle</label>
            <input type="text">
            <br>
            <label>Prix</label>
            <input type="text">
            <br>
            <label>Année</label>
            <input type="text">
            <br>
            <label>Carburant</label>
            <input type="text">
            <br>
            <label>Boîte de vitesse</label>
            <input type="text">
            <br>
            <label>Kilométrage</label>
            <input type="text">
            <br>
            <label>Nombre de portes</label>
            <input type="text">
            <br>
            <label>Nombre de places</label>
            <input type="text">
            <br>
            <label>Couleur</label>
            <input type="text">
            <br>
            <label>Puissance fiscale</label>
            <input type="text">
            <br>
            <label>Options
                <?php foreach ($carOptions as $carOption) { ?>
                    <input type="checkbox">
                    <label for="<?=htmlentities($carOption['option_description'])?>"><?=ucfirst(htmlentities($carOption['option_description']))?></label>
                <?php } ?>
            </label>

            <input type="submit" value="Ajouter une voiture">
        </form>

</div>
