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
    
        <!--SUPPRIMER UNE VOITURE -->
        <h2>Supprimer une voiture</h2>

            <label>Indiquer l'identifiant de la voiture</label>
            <br>
            <input value="identifiant" type="text">
            <br>
            <label>Indiquer l'identifiant à nouveau</label>
            <br>
            <input value="identifiant" type="text">
            <br>
            <input type="submit" value="Confirmer la suppression">

</div>
