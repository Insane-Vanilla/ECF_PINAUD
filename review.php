<?php

    require_once 'templates/header.php';
    require_once 'lib/config.php';
    require_once 'lib/pdo.php';
    require_once 'lib/review.php';

$errors = [];
$notifications = [];
    
if (isset($_POST['submit_review'])) {
    $submitReview = addReview($pdo, $_POST['firstname'], $_POST['content'], (int)$_POST['rating'], (int)$_POST['approved']=0);
    if ($submitReview) {
    $notifications[] = "Votre avis a bien été envoyé pour approbation avant publication";
    } else {
        $errors[] = "Une erreur s\'est produite lors de l\'envoi de votre avis";
    }
}

?>
   
    <!--MAIN-->
    <main>

        <!--Laisser un avis-->
        <div class="title">
            <img class="ecrous" src="assets/icon/ecrous.png" alt="ecrous"><h1>Laisser un avis</h1>
        </div>

        <div class="intro">
            <p>
                Vous avez fait appel à nos services ? Vous avez acheté une voiture dans notre garage ?
                <br>
                Merci de laisser un avis !
                <br>
                N'hésitez pas à nous communiquer vos éventuelles suggestions.
                <br>
            </p>
        </div>

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

        <div class="note-container">
            <div class="note">
                <form class="note-form" action="" method="post">
                    <div class="note-inputs">
                        <label class="note-name" for="name">Votre prénom</label>
                        <input class="note-input1" title="name" type="text" name="firstname" required="">
                    </div>
                    <div class="note-inputs">
                        <label class="note-message" for="avis">Votre avis</label>
                        <input class="note-input2" title="advice" type="text" name="content" required="">
                    </div>
                    <div class="note-inputs">
                        <h3 class="title-note">Votre note</h3>
                            <div class="stars">
                                <img id="star-note" data-value="1" class="star-note" src="assets/icon/star.png" alt="star">
                                <img id="star-note" data-value="2" class="star-note" src="assets/icon/star.png" alt="star">
                                <img id="star-note" data-value="3" class="star-note" src="assets/icon/star.png" alt="star">
                                <img id="star-note" data-value="4" class="star-note" src="assets/icon/star.png" alt="star">
                                <img id="star-note" data-value="5" class="star-note" src="assets/icon/star.png" alt="star">
                            </div>
                            <p id="note-send"></p>
                            <input type="text" name="rating" class="rating-input"/>
                    </div>
                    <button type="submit" class="button-note" name="submit_review">Envoyer</button>
                </form>
            </div>
        </div>

     <!--revenir haut page-->
 
        <a class="hautpage" href="#hautpage"><img class="imghp" src="assets/icon/fleche.png" alt="revenir_haut_page"></a>
        <br>

<?php
    require_once 'templates/footer.php';

?>