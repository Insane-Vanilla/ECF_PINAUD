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
        $notifications[] = "Modification bien prise en compte";
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

        <h2>Réparations</h2>

            <textarea name="textarea-repairs" cols="100" rows="10">
                <?=nl2br($text_Repairs['description_service']);?>
            </textarea>
            <br>
            <input class="input-button" type="submit" name="updateRepairs" value="Modifier le texte" class="button" />

        <h2>Entretien</h2>

            <textarea name="textarea-maintenance" cols="100" rows="10">
                <?=nl2br($text_Maintenance['description_service']);?>
            </textarea>
            <br>
            <input class="input-button" type="submit" name="updateMaintenance" value="Modifier le texte" class="button" />

        <h2>Pneumatiques</h2>

            <textarea name="textarea-tires" cols="100" rows="10">
                <?=nl2br($text_Tires['description_service']);?>
            </textarea>
            <br>
            <input class="input-button" type="submit" name="updateTires" value="Modifier le texte" class="button" />

        <h2>Carrosserie</h2>

            <textarea name="textarea-bodywork" cols="100" rows="10">
                <?=nl2br($text_BodyWork['description_service']);?>
            </textarea>
            <br>
            <input class="input-button" type="submit" name="updateBodyWork" value="Modifier le texte" class="button"/>

     </div>
 


</body>

</html>