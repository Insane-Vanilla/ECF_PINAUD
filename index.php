<?php

    require_once 'templates/header.php';
    require_once 'lib/config.php';
    require_once 'lib/pdo.php';
    require_once 'lib/review.php';


$reviews = getReviews($pdo);
//$stars = getStars($pdo, $rating);

?>
    <main>
        <div class="title">
            <img class="voiture" src="assets/icon/voiture.png" alt="voiture"><h1>Bienvenue sur le site du garage Vincent  Parrot</h1>
        </div>
        <div class="intro">
        <p>
            Nous proposons des services liés à l’entretien, la réparation des voitures et la carrosserie.
            <br>
            Notre enseigne propose également des voitures d’occasion à la vente, dont le catalogue est situé dans l’onglet “Les voitures”.
            <br>
            Pour toute question, rendez-vous dans l'onglet "Nous contacter".
            <br>
            <span class="bold">Bonne visite !</span>
        </p>
        </div>
        <div class="images1">
            <img class="illu1" src="assets/images/atelier2.jpg" alt="atelier1">
            <img class="illu1" src="assets/images/voiture.jpg" alt="voiture">
            <img class="illu1" src="assets/images/mecano4.jpg" alt="mecano4">
        </div>

        <!--LIVRE D'OR-->
        <div class="title">
            <img class="ecrous" src="assets/icon/ecrous.png" alt="ecrous"><h1>Livre d'or</h1>
        </div>
        
        <div class="livre-or">
            <!--Avis-->
            <?php
                foreach ($reviews as $key => $review) { ?>
                <?php require "templates/review_part.php"; ?>
            <?php } ?>
        </div>

        <br>
                
        <a class="write-advice" href="review.php">Ajouter un avis</a>

        <br>
     <!--revenir haut page-->
 
    <a class="hautpage" href="#hautpage"><img class="imghp" src="assets/icon/fleche.png" alt="revenir_haut_page"></a>
    <br>    
    
    </main>

<?php
    require_once 'templates/footer.php';
?>
