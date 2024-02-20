<?php

    require_once '../lib/config.php';
    require_once '../lib/pdo.php';
    require_once '../lib/session.php';
    require_once '../lib/review.php';
    require_once '../lib/user.php';
    require_once 'templates/header.php';

$errors = [];
$notifications = [];

if (isset($_POST['publish_review'])) {
    $publish = publishReview($pdo, $_POST['approved']===1);
    if ($publish) {
        $notifications[] = "Avis publié";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la publication";
    }
}


$reviews = getReviews($pdo);
$users = getUsers($pdo);
foreach ($users as $user) {
    $id = $user['idEmployee'];
    $managers = getReviewManager($pdo, $id);
}


?>

<div class="employe-reviews">

    <h1>Gérer les avis reçus</h1>

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
    
        <h2>Liste des avis reçus</h2>
        <table class="table-reviews">
            <thead>
                <tr>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Contenu</th>
                    <th scope="col">Nombre d'étoiles</th>
                    <th scope="col">Approuvé</th>
                    <th scope="col">A traiter</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reviews as $review) { ?>
                <tr>
                    <td><?=ucfirst(htmlentities($review["idReview"]));?></td>
                    <td><?=ucfirst(htmlentities($review["firstname"]));?></td>
                    <td><?=ucfirst(htmlentities($review["content"]));?></td>
                    <td><?=htmlentities($review["ratingStars"]);?></td>
                    <!--approuvé-->
                    <td>
                        <?php if ($review['approved']===1) {?>
                            Oui, par :
                                <?php foreach ($managers as $manager){?>
                                <?=(htmlentities($manager['email_employee']))?>
                                <?php } ?>
                        <?php } else { ?>Non</td>
                                                
                    <!--à traiter-->
                    <td><select name="users">
                            <option value="">--Sélectionner un employé--</option>
                                <?php foreach ($users as $user) {?>
                                    <option value=""><?=(htmlentities($user['email_employee']))?></option>
                                <?php }?>
                        </select>
                        <input type="submit" name="publish_review" value="Valider">
                          <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
</div>


