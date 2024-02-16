<?php

    require_once 'templates/header.php';
    require_once 'lib/config.php';
    require_once 'lib/pdo.php';
    require_once 'lib/services.php';

$text_Repairs = getRepairs($pdo);
$text_Maintenance = getMaintenance($pdo);
$text_Tires = getTires($pdo);
$text_BodyWork = getBodyWork($pdo);

?>

    <!--MAIN-->
    <main>

        <div class="title">
            <img class="moteur" src="assets/icon/moteur.png" alt="moteur"><h1>Nos services à l'atelier</h1>
        </div>

        <div class="intro">
            <p>Nos talentueux mécanos mettent tout en oeuvre pour entretenir et réparer votre véhicule, afin de vous apporter satisfaction. Le garage Parrot assure une prestation qualitative au meilleur prix.</p>
            <p>Pour toute demande de devis, rendez-vous dans l'onglet <span class="bold">"Nous contacter"</span>.</p>
        </div>
        
        <div class="services-container">
            <div class="photos-container">
                <img class="services-photos" src="assets/images/mecano2.jpg" alt="mecano2">
                <img class="services-photos" src="assets/images/moteur.jpg" alt="moteur">
                <img class="services-photos" src="assets/images/mecano3.jpg" alt="mecano3">
                <img class="services-photos" src="assets/images/atelier3.jpg" alt="atelier3">
                <img class="services-photos" src="assets/images/atelier1.jpg" alt="atelier1">
            </div>

            <div class="services-texte">
                <h2 class="titre-service">Réparations</h2>
                <p class="justify-text">
                    <?=nl2br($text_Repairs['description_service']);?>
                </p>
                <br>
                <h2 class="titre-service">Entretien</h2>
                <p class="justify-text">
                    <?=nl2br($text_Maintenance['description_service']);?>
                </p>
                <br>
                <h2 class="titre-service">Pneumatiques</h2>
                <p class="justify-text">
                    <?=nl2br($text_Tires['description_service']);?>
                </p>
                <br>
                <h2 class="titre-service">Carrosserie</h2>
                <p class="justify-text">
                    <?=nl2br($text_BodyWork['description_service']);?>
                </p>
            </div>
        </div>
    
     <!--revenir haut page-->
 
    <a class="hautpage" href="#hautpage"><img class="imghp" src="assets/icon/fleche.png" alt="revenir_haut_page"></a>
    <br>    
    </main>


<?php
    require_once 'templates/footer.php';
?>
