<?php

    require_once 'templates/header.php';

?>

  <body>
    <!--HEADER-->

    <header id="hautpage">
        <!-- logo -->
        <div><a href="index.html"><img class="logo" src="assets/images/logo.png" alt="logo PARROT"></a></div>
            
        <!-- navigation -->
        <ul class="main-nav">
            <li><a href="index.html">ACCUEIL</a></li>
            <li><a href="services.html">L'ATELIER</a></li>
            <li><a href="ventes.html">LES VOITURES</a></li>
            <li><a href="contact.html">NOUS CONTACTER</a></li>  
        </ul>
        
        <div class="button-connexion">
            <a class="connexion" href="connexion.html"><button class="btn-conn" type="button">Mon espace</button></a>
        </div>
    </header>

    
    <!--MAIN-->
    <main>
        <div class="title5">
            <img class="voiture" src="assets/icon/voiture.png" alt="voiture"><h1>Fiche voiture</h1>
        </div>

        <!--Fiche-->
        <div class="container-fiche">
            <div class="photos-fiche">
                <img class="photo-main" src="assets/images/14.jpg" alt="voiture14">
                <div class="sec">
                    <img class="photo-sec" src="assets/images/14.jpg" alt="voiture14">
                    <img class="photo-sec" src="assets/images/14.jpg" alt="voiture14">
                    <img class="photo-sec" src="assets/images/14.jpg" alt="voiture14">
                    <img class="photo-sec" src="assets/images/14.jpg" alt="voiture14">
                    <img class="photo-sec" src="assets/images/14.jpg" alt="voiture14">
                </div>
            </div>

            <div class="description">
                <div class="header-description">
                    <div>
                        <h3 class="titre-fiche">ASTON MARTIN</h3>
                        <h4 class="sous-titre-fiche">GT1 3CH DH AHS absbe</h4>
                    </div>
                    <h3 class="prix-fiche">75 000 €</h3>
                </div>
                <div class="liste-description">
                    <ul>
                        <li><span class="underline">Année de mise en circulation</span> : 2018</li>
                        <li><span class="underline">Carburant</span> : Diesel</li>
                        <li><span class="underline">Boîte de vitesse</span> : Manuelle</li>
                        <li><span class="underline">Kilométrage</span> : 20 560 km</li>
                        <li><span class="underline">Nombre de portes </span> : 3</li>
                        <li><span class="underline">Nombre de places</span> : 5</li>
                        <li><span class="underline">Couleur</span> : Bordeaux</li>
                        <li><span class="underline">Puissance fiscale</span> : 7CV</li>
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


    
     <!--revenir haut page-->
 
    <a class="hautpage" href="#hautpage"><img class="imghp" src="assets/icon/fleche.png" alt="revenir_haut_page"></a>
    <br>    
    </main>

<?php
    require_once 'templates/footer.php';
?>
