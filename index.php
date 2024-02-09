<?php

    require_once 'templates/header.php';
    require_once 'lib/config.php';
    require_once 'lib/pdo.php';

?>

        <div class="title1">
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
            Bonne visite !
        </p>
        </div>
        <div class="images1">
            <img class="illu1" src="assets/images/atelier2.jpg" alt="atelier1">
            <img class="illu1" src="assets/images/14.jpg" alt="voiture14">
            <img class="illu1" src="assets/images/mecano4.jpg" alt="mecano4">
        </div>

        <!--LIVRE D'OR-->
        <div class="title2">
            <img class="ecrous" src="assets/icon/ecrous.png" alt="ecrous"><h1>Livre d'or</h1>
        </div>
        
        <div class="livre-or">
            <!--Avis1-->
            <div class="feature">
                <div class="advice-title">
                    <h3>Sergio</h3>
                    <div>
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                    </div>
                </div> 
                <p class="advice">Super merci vous êtes les meilleurs je recommande ++++.
                    Ma voiture a été chouchoutée, nettoyée, l’équipe est très disponible et à l’écoute, et le prix très raisonnable par rapport à la prestation effectuée.</p>
            </div>
            <!--Avis2-->
            <div class="feature">
                <div class="advice-title">
                    <h3>Claudine</h3>
                    <div>
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                    </div>
                </div> 
                <p class="advice">Le patron a compris mon problème et a très bien suivi mon dossier.
                    Equipe très sympathique.
                    Ils tiennent bien au courant de l’avancement des réparations et le délai annoncé est toujours respecté.</p>
            </div>
            <!--Avis3-->
            <div class="feature">
                <div class="advice-title">
                    <h3>Assad</h3>
                    <div>
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                    </div>
                </div> 
                <p class="advice">Je cherchais une occasion depuis un bon moment et grâce aux réseaux sociaux j’ai découvert le catalogue de voitures d’occasion du garage Parrot ; j’ai pu opérer une pré-sélection grâce aux supers descriptions des véhicules et j’ai eu un rdv très rapide pour venir sur place voir les voitures. Au top !</p>
            </div>
            <!--Avis4-->
            <div class="feature">
                <div class="advice-title">
                    <h3>Mia</h3>
                    <div>
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                        <img class="star" src="assets/icon/star.png" alt="star">
                    </div>
                </div> 
                <p class="advice">Bon rapport qualité/prix (par rapport à d’autres garages alentours), je reviendrai et je recommande à tout mon entourage.</p>
            </div>
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
