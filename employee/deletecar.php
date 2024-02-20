<?php

    require_once '../lib/config.php';
    require_once '../lib/pdo.php';
    require_once '../lib/session.php';
    require_once '../lib/car.php';
    require_once 'templates/header.php';


$car = false;
$errors = [];
$notifications = [];

if (isset($_GET["id"])) {
    $car =  getCarById($pdo, (int)$_GET["id"]);
}
if ($car) {
    if (deleteCar($pdo, $_GET["id"])) {
        $notifications[] = "La voiture a bien été supprimée";
    } else {
        $errors[] = "Une erreur s'est produite lors de la suppression";
    }
} else {
    $errors[] = "La voiture n'existe pas";
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
        
        <!--SUPPRIMER UNE VOITURE -->
        <h2>Supprimer une voiture</h2>
            
            <form action="" method="GET">
                <label>Indiquer l'identifiant de la voiture</label>
                <br>
                <br>
                <input name="id" value="" type="text">
                <br>
                <br>
                <input type="submit" name="deleteCar" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?')" value="Confirmer la suppression">
            </form>
</div>
