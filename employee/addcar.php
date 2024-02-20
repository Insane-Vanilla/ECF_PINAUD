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
}


//Gestion de l'upload :
if(isset($_FILES['image-upload'])){
    $tmpName = $_FILES['image-upload']['tmp_name'];
    $name = $_FILES['image-upload']['name'];
    $size = $_FILES['image-upload']['size'];
    $error = $_FILES['image-upload']['error'];
    
    //vérification extension + taille fichier
    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));

    $extensions= ['png'];
    $maxSize = 100000;

    if (in_array($extension, $extensions) && $size <= $maxSize && $error ==0) {
        $uniqueName = $car['idCar'];
        $file = $uniqueName.".".$extension;
        move_uploaded_file($tmpName, './uploads/'.$file);
        echo "Image téléchargée";
    } else {
        echo "Mauvais format de fichier ou fichier trop volumineux";
    }
}

// Gestion de l'ajout
if (isset($_POST['addCar'])) {
    $add = addCar($pdo, $_POST['brand'], $_POST['model'], $_POST['price'],$_POST['fuel'],$_POST['gearbox'],$_POST['mileage'],$_POST['doors'],$_POST['seats'],$_POST['color'],$_POST['horsepower'],$_POST['year']);
    if ($add) {
        $notifications[] = "Ajout bien pris en compte";
    } else {
        $errors[] = "Une erreur s\'est produite lors de l\'ajout";
    }
}



$carOptions = getOptions($pdo);


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

        <!--AJOUTER UNE VOITURE -->
        <h2>Ajouter une voiture</h2>

        <form action="" method="POST">
            <div class="form-inputs">
                <label class="text-label">Marque</label>
                <input class="form-input" type="text" name="brand">
            </div>
            <br>
            <div class="form-inputs">
                <label class="text-label">Modèle</label>
                <input class="form-input"type="text" name="model">
            </div>
            <br>
            <div class="form-inputs">
                <label class="text-label">Prix</label>
                <input class="form-input" type="text" name="price">
            </div>
            <br>
            <div class="form-inputs">
                <label class="text-label">Année</label>
                <input class="form-input" type="text" name="year">
            </div>
            <br>
            <div class="form-inputs">
                <label class="text-label">Carburant</label>
                <input class="form-input" type="text" name="fuel">
            </div>
            <br>
            <div class="form-inputs">
                <label class="text-label">Boîte</label>
                <input class="form-input" type="text" name="gearbox">
            </div>
            <br>
            <div class="form-inputs">
                <label class="text-label">Kilométrage</label>
                <input class="form-input" type="text" name="mileage">
            </div>
            <br>
            <div class="form-inputs">
                <label class="text-label">Portes</label>
                <input class="form-input" type="text" name="doors">
            </div>
            <br>
            <div class="form-inputs">
                <label class="text-label">Places</label>
                <input class="form-input" type="text" name="seats">
            </div>
            <br>
            <div class="form-inputs">
                <label class="text-label">Couleur</label>
                <input class="form-input" type="text" name="color">
            </div>
            <br>
            <div class="form-inputs">
                <label class="text-label">Chevaux</label>
                <input class="form-input" type="horsepower">
            </div>
            <br>
            <label class="text-label">Options :
                <br>
                <br>
                <?php foreach ($carOptions as $carOption) { ?>
                    <input name="<?=htmlentities($carOption['option_description'])?>" type="checkbox">
                    <label for="<?=htmlentities($carOption['option_description'])?>"><?=ucfirst(htmlentities($carOption['option_description']))?>
                </label>
                <br>
                <?php } ?>
            </label>
            <br>
            <form class="upload" action="addcar.php" method="POST" enctype="multipart/form-data">
                <p>Sélectionner une image:</p>

                <input type="file" name="image-upload" id="imageUpload">
                <br>
                <p class="little">Format accepté : png </p>
                <p class="little">Taille maximum : 1Mo </p>
            </form>
            <br>
            <input type="submit" class="submit" name="addCar" value="Ajouter une voiture">
        </form>

</div>
