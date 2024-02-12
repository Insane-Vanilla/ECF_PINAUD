<?php

require_once '/templates/header.php';
require_once '../../lib/config.php';
require_once '../lib/pdo.php';
require_once '../lib/user.php;';


$errors = [];
$notifications = [];

if (isset($_POST['addUser'])) {
    $add = addUser($pdo, $_POST['email_employee'], $_POST['password_employee']);
    if ($add) {
        $notifications[] = "Ajout bien pris en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de l\'ajout";
    }
}

if (isset($_POST['deleteUser'])) {
    $delete = deleteUser($pdo, $_POST['email_employee']);
    if ($delete) {
        $notifications[] = "Suppression bien prise en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la suppression";
    }
}

?>

<h1>Gérer les utilisateurs</h1>
    <?php
        foreach ($notifications as $notification){ ?>
            <div class="alerte">
                <?=$notification;?>
            </div>
    <?php } ?>

    <?php
        foreach ($errors as $error){ ?>
            <div class="alerte">
                <?=$errors;?>
            </div>
    <?php } ?>

    <!-- AJOUTER USER -->

    <form class="box" action="" method="POST">
        <h2>Ajouter un utilisateur</h2>
            <h3>Saisir l'adresse mail</h3>
                <input type="text" class="box-input" name="email" placeholder="Email" required />
            <h2>Saisir un mot de passe temporaire</h2>
            <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    
            <input type="submit" name="addUser" value="Ajouter un utilisateur" class="button" />
    </form>

    <!-- SUPPRIMER USER -->

    <form class="box" action="" method="GET">
        <h2>Supprimer un utilisateur</h2>
            <h3>Saisir l'adresse mail de l'utilisateur concerné</h3>
                <input type="text" class="box-input" name="email_employee" placeholder="Email" required />
            <input type="submit" name="deleteUser" value="Supprimer un utilisateur" class="button" />
    </form>



<?php

require_once __DIR__.'/templates/footer.php'

?>