<?php

    require_once '../lib/config.php';
    require_once '../lib/pdo.php';
    require_once '../lib/session.php';
    require_once '../lib/user.php';
    require_once 'templates/header.php';



$errors = [];
$notifications = [];

if (isset($_POST['addUser'])) {
    $add = addUser($pdo, $_POST['email'], $_POST['password'], (int)$_POST['idAdmin']=1);
    if ($add) {
        $notifications[] = "Ajout bien pris en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de l\'ajout";
    }
}

if (isset($_POST['deleteUser'])) {
    $delete = deleteUser($pdo, $id);
    if ($delete) {
        $notifications[] = "Ajout bien pris en compte";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de l\'ajout";
    }
}

$users = getUsers($pdo);

?>
    <div class="admin-users">
        <h1>Gérer les utilisateurs</h1>

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
                        <?=$errors;?>
                    </div>
            <?php } ?>

            <!-- VOIR TOUS LES UTILISATEURS -->
            <h2>Liste des utilisateurs</h2>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Identifiant</th>
                            <th scope="col">Adresse email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($users as $user) { ?>
                            <tr>
                                <td><?=$user["idEmployee"];?></td>
                                <td><?=$user["email_employee"];?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            <br>
            <!-- AJOUTER USER -->

            <form class="box" action="" method="POST">
                <h2>Ajouter un utilisateur</h2>
                    <h3>Saisir l'adresse mail</h3>
                        <input type="text" class="box-input" name="email" placeholder="Email" required />
                    <h3>Saisir un mot de passe temporaire</h3>
                        <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
                    <br>
                    <br>
                    <input class="input-button" type="submit" name="addUser" value="Ajouter un utilisateur" class="button" />
            </form>
            <br>
            <!-- SUPPRIMER USER -->

            <form class="box" action="" method="POST">
                <h2>Supprimer un utilisateur</h2>
                    <h3>Saisir l'adresse mail de l'utilisateur concerné</h3>
                        <input type="text" class="box-input" name="email_employee" placeholder="Email" required />
                        <br>
                        <br>
                        <input class="input-button" type="submit" name="deleteUser" value="Supprimer un utilisateur" class="button" />
            </form>


    </div>
</body>


</html>