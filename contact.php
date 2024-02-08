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
            <li><a class="active" href="contact.html">NOUS CONTACTER</a></li>  
        </ul>
        
        <div class="button-connexion">
            <a class="connexion" href="connexion.html"><button class="btn-conn" type="button">Mon espace</button></a>
        </div>
    </header>

    
    <!--MAIN-->
    <main>
        <div class="title6">
            <img class="ecrous" src="assets/icon/ecrous.png" alt="ecrous"><h1>Nous contacter</h1>
        </div>

        <div class="contact-container">
            <div class="contact-zone">
                <div class="contact-zone2">
                    <div class="contact-zone3">
                        <img class="icon-contact" src="assets/icon/localisation.png" alt="localisation">
                        <div class="contact-zone4">
                            <p>12 rue de l'Industrie</p>
                            <p>ZI la Rivière</p>
                            <p>65500 HOUVIER</p>
                        </div>
                    </div>
                    <div class="contact-zone3">
                        <img class="icon-contact" src="assets/icon/telephone.png" alt="telephone">
                        <div class="contact-zone4">
                            <p>04 58 22 01 01</p>
                            <p>06 60 45 78 12</p>
                        </div>
                    </div>
                </div>

                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2578.4971615556724!2d5.682943786600018!3d45.18971032160149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1706525228005!5m2!1sfr!2sfr" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
            </div>

            <div class="rs-zone">
                <h2 class="rs-title">Les Bonus, l’avant/après, les nouvelles ventes en avant première :</h2>
                <ul>
                    <li class="unstyled-list"><a href="www.youtube.com"><img class="icon-rs" src="assets/icon/youtube.png" alt="youtube">www.youtube.com/@garagevparrot</a></li>
                    <li class="unstyled-list"><a href="www.instagram.com"><img class="icon-rs" src="assets/icon/instagram.png" alt="instagram">www.instagram.com/@garagevparrot</a></li>
                    <li class="unstyled-list"><a href="www.facebook.com"><img class="icon-rs" src="assets/icon/facebook.png" alt="facebook">www.facebook.com/@garagevparrot</a></li>
                </ul>
            </div>

            <div class="form-zone">
                <h2 class="form-title">Ecrivez-nous !</h2>
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

            <div class="proto-zone">
                <img class="feed-ig"src="assets/images/proto-ig.png" alt="feed-ig">
            </div>




        </div>

     <!--revenir haut page-->
        <a class="hautpage" href="#hautpage"><img class="imghp" src="assets/icon/fleche.png" alt="revenir_haut_page"></a>
        <br>    
    </main>


<?php
    require_once 'templates/footer.php';
?>
