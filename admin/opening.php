<?php

    require_once '../lib/config.php';
    require_once '../lib/pdo.php';
    require_once '../lib/session.php';
    require_once '../lib/openings.php';
    require_once 'templates/header.php';

$errors = [];
$notifications = [];
    
if (isset($_POST['updatemo']))
{
    $newMorningsOpenings = updateMorningsOpenings($pdo, $_POST['newmo']);
    if ($newMorningsOpenings) {
        $notifications[] = "Modification(s) bien prise(s) en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la(des) modification(s)";
    }
}

if (isset($_POST['updatemc']))
{
    $newMorningsClosings = updateMorningsClosings($pdo, $_POST['newmc']);
    if ($newMorningsClosings) {
        $notifications[] = "Modification(s) bien prise(s) en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la(des) modification(s)";
    }
}

if (isset($_POST['updateao']))
{
    $newAfternoonsOpenings = updateAfternoonsOpenings($pdo, $_POST['newao']);
    if ($newAfternoonsOpenings) {
        $notifications[] = "Modification(s) bien prise(s) en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la(des) modification(s)";
    }
}

if (isset($_POST['updateac']))
{
    $newAfternoonsClosings = updateAfternoonsClosings($pdo, $_POST['newac']);
    if ($newAfternoonsClosings) {
        $notifications[] = "Modification(s) bien prise(s) en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la(des) modification(s)";
    }
}

$openings = getOpenings($pdo);

?>

<div class="admin-openings">

    <h1>Gérer les horaires d'ouverture</h1>

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
        
        <table class="table-openings">
            <thead>
                <tr>
                    <th scope="col">Jour</th>
                    <th scope="col">Ouverture matin</th>
                    <th scope="col"></th>
                    <th scope="col">Fermeture matin</th>
                    <th scope="col"></th>
                    <th scope="col">Ouverture après-midi</th>
                    <th scope="col"></th>
                    <th scope="col">Fermeture après-midi</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($openings as $opening) { ?>
                <tr>
                    <td><?=ucfirst(htmlentities($opening["opening_day"]));?></td>
                    
                    <td><form id="openingform" action="" method="POST"><textarea form="openingform" name="newmo" id="" cols="10" rows="1"><?=$opening["morning_opening"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="updatemo" value="Modifier" class="button" /></form></td>
                    
                    <td><form id="openingform" action="" method="POST"><textarea name="newmc" id="" cols="10" rows="1"><?=$opening["morning_closing"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="updatemc" value="Modifier" class="button" /></form></td>
                    
                    <td><form id="openingform" action="" method="POST"><textarea name="newao" id="" cols="10" rows="1"><?=$opening["afternoon_opening"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="unpdateao" value="Modifier" class="button" /></form></td>
                    
                    <td><form id="openingform" action="" method="POST"><textarea name="newac" id="" cols="10" rows="1"><?=$opening["afternoon_closing"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="updateac" value="Modifier" class="button" /></form></td>
                </tr>
                <?php } ?>

            </tbody>
        </table>

</div>

</body>

</html>