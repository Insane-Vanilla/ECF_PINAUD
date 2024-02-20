<?php

    require_once '../lib/config.php';
    require_once '../lib/pdo.php';
    require_once '../lib/session.php';
    require_once '../lib/services.php';
    require_once 'templates/header.php';

$errors = [];
$notifications = [];

if (isset($_POST['updateRepairs'])) {
    $newRepairs = updateRepairs($pdo, $_POST['textarea-repairs']);
    if ($newRepairs) {
        $notifications[] = "Modifications bien prises en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la modification";
    }
}
if (isset($_POST['updateMaintenance'])) {
    $newMaintenance = updateMaintenance($pdo, htmlspecialchars($_POST['textarea-maintenance']));
    if ($newMaintenance) {
        $notifications[] = "Modifications bien prises en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la modification";
    }
}
if (isset($_POST['updateTires'])) {
    $newTires = updateTires($pdo, $_POST['textarea-tires']);
    if ($newTires) {
        $notifications[] = "Modifications bien prises en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la modification";
    }
}
if (isset($_POST['updateBodyWork'])) {
    $newBodyWork = updateBodyWork($pdo, $id, $_POST['textarea-bodywork']);
    if ($newBodyWork) {
        $notifications[] = "Modifications bien prises en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la modification";
    }
}


$text_Repairs = getRepairs($pdo);
$text_Maintenance = getMaintenance($pdo);
$text_Tires = getTires($pdo);
$text_BodyWork = getBodyWork($pdo);

?>
<div class="admin-services">
    <h1>Gérer les services proposés</h1>

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

        <!--MODIFIER REPARATIONS-->
        <h2>Réparations</h2>
        
            <form action="" method="POST">
                <textarea name="textarea-repairs" cols="100" rows="10">
                    <?=nl2br($text_Repairs['description_service']);?>
                </textarea>
                <br>
                <input class="input-button" type="submit" name="updateRepairs" value="Modifier le texte" class="button" />
            </form>

        <!--MODIFIER ENTRETIEN-->
        <h2>Entretien</h2>

            <form action="" method="POST">
                <textarea name="textarea-maintenance" cols="100" rows="10">
                    <?=nl2br($text_Maintenance['description_service']);?>
                </textarea>
                <br>
                <input class="input-button" type="submit" name="updateMaintenance" value="Modifier le texte" class="button" />
            </form>

        <!--MODIFIER PNEUMATIQUES-->
        <h2>Pneumatiques</h2>

            <form action="" method="POST">
                <textarea name="textarea-tires" cols="100" rows="10">
                    <?=nl2br($text_Tires['description_service']);?>
                </textarea>
                <br>
                <input class="input-button" type="submit" name="updateTires" value="Modifier le texte" class="button" />
            </form>
        <!--MODIFIER CARROSSERIE-->
        <h2>Carrosserie</h2>
        
            <form action="" method="POST">
                <textarea name="textarea-bodywork" cols="100" rows="10">
                    <?=nl2br($text_BodyWork['description_service']);?>
                </textarea>
                <br>
                <input class="input-button" type="submit" name="updateBodyWork" value="Modifier le texte" class="button"/>
            </form>
     </div>
 


</body>

</html>