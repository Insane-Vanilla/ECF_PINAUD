<?php

    require_once 'templates/header.php';
    require_once 'lib/config.php';
    require_once 'lib/pdo.php';
    require_once 'lib/car.php';


    $car = getCarById($pdo, $idCar);

    /*$error = false;
    if(isset($_GET['idCar'])) {
        $idCar = $_GET['idCar'];
        $car = getCarById($pdo, $idCar);
        $imagePath = _CAR_IMAGES_FOLDER_.$car["idCar"]."jpg";
        if (!$car) {
            $error = true;
        }
    } else {
        $error = true;
    }
*/

?>

    <!--MAIN-->
    <main>
        <div class="title">
            <img class="voiture" src="assets/icon/voiture.png" alt="voiture"><h1>Fiche voiture</h1>
        </div>

        <!--Fiche-->

        <?php if (!$error) { ?>
        <div class="container-fiche">
            <div class="photos-fiche">
                <img class="photo-main" src="<?=$imagePath?>"  alt="<?=$car['brand']?>">
                <div class="sec">
                    <img class="photo-sec" src="<?=$imagePath?>" alt="<?=$car['brand']?>">
                    <img class="photo-sec" src="<?=$imagePath?>" alt="<?=$car['brand']?>">
                    <img class="photo-sec" src="<?=$imagePath?>" alt="<?=$car['brand']?>">
                    <img class="photo-sec" src="<?=$imagePath?>" alt="<?=$car['brand']?>">
                    <img class="photo-sec" src="<?=$imagePath?>" alt="<?=$car['brand']?>">
                </div>
            </div>

            <div class="description">
                <div class="header-description">
                    <div>
                        <h3 class="titre-fiche"><?=$car['brand']?></h3>
                        <h4 class="sous-titre-fiche"><?=$car['model']?></h4>
                    </div>
                    <h3 class="prix-fiche"><?=$car['price']?>€</h3>
                </div>
                <div class="liste-description">
                    <ul>
                        <li><span class="underline">Année de mise en circulation</span> : <?=htmlentities($car['car_year'])?></li>
                        <li><span class="underline">Carburant</span> : <?=htmlentities($car['fuel'])?></li>
                        <li><span class="underline">Boîte de vitesse</span> : <?=htmlentities($car['gearbox'])?></li>
                        <li><span class="underline">Kilométrage</span> : <?=htmlentities($car['mileage'])?>km</li>
                        <li><span class="underline">Nombre de portes </span> : <?=htmlentities($car['doors'])?></li>
                        <li><span class="underline">Nombre de places</span> : <?=htmlentities($car['seats'])?></li>
                        <li><span class="underline">Couleur</span> : <?=htmlentities($car['color'])?></li>
                        <li><span class="underline">Puissance fiscale</span> : <?=htmlentities($car['horsepower'])?>CV</li>
                        <li><span class="underline">Options</span> :
                            <ul>
                                <li>Siège à mémoire de forme</li>
                                <li>Toit ouvrant</li>
                                <li>Jantes alu</li>
                                <li>GPS</li>
                                <li>Bluetooth</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <h3>Cette voiture vous intéresse ?</h3>
                <h4>Appelez nous :</h4>
        
                    <div class="contact-zone3">
                        <img class="icon-contact" src="assets/icon/telephone.png" alt="telephone">
                        <div class="contact-zone4">
                            <p>04 58 22 01 01</p>
                            <p>06 60 45 78 12</p>
                        </div>
                    </div>
                </div>

                <h4>Ou écrivez-nous un message : </h4>

                <form class="contact-form" id="contact-form" name="contact-form" accept-charset="utf-8" action="" method="post">                      
                    <div class="form-inputs">
                        <label class="text-label" class="label-contact" for="first-name">Nom</label>
                        <input class="form-input" type="text" name="first-name" id="first-name" placeholder="Votre nom" required="">
                    </div>

                    <div class="form-inputs">
                        <label class="text-label" for="name">Prénom</label>
                        <input class="form-input"type="text" name="name" id="name" placeholder="Votre prénom" required="">
                    </div>

                    <div class="form-inputs">
                        <label class="text-label" for="email-address">Email</label>
                        <input class="form-input"type="text" name="_replyto" id="email-address" placeholder="email@exemple.com" required="">
                    </div>

                    <div class="form-inputs">
                        <label class="text-label" for="telephone">Téléphone</label>
                        <input class="form-input" type="text" name="telephone" id="telephone" placeholder="06 00 00 00 00" required="">
                    </div>

                    <div class="form-inputs">
                        <label class="text-label" for="message">Message</label>
                        <textarea class="form-textarea" rows="5" name="message" id="message" placeholder="Votre message" required=""></textarea>
                    </div>

                    <div class="contact-input">
                        <a href="#"><input class="submit" type="submit" value="Envoyer"></a>
                    </div>
                  </form>

                </div>


            </div>
        </div>
        <?php } else { ?>
        <h2>Voiture introuvable</h2>
        <?php } ?>


    
     <!--revenir haut page-->
 
    <a class="hautpage" href="#hautpage"><img class="imghp" src="assets/icon/fleche.png" alt="revenir_haut_page"></a>
    <br>    
    </main>

<?php
    require_once 'templates/footer.php';
?>
