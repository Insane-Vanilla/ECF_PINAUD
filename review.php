<?php

    require_once 'templates/header.php';

?>
   
    <!--MAIN-->
    <main>

        <!--Laisser un avis-->
        <div class="title8">
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

        <div class="note-container">
            <div class="note">
                <form class="note-form" action="" method="post">
                    <div class="note-inputs">
                        <label class="note-name" for="name">Votre prénom</label>
                        <input class="note-input1" title="name" type="text" required="">
                    </div>
                    <div class="note-inputs">
                        <label class="note-message" for="avis">Votre avis</label>
                        <input class="note-input2" title="advice" type="text" required="">
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
                            <span class="rating">-</span>
                        <p id="note-send"></p>
                    </div>
                    <button type="submit" class="button-note">Envoyer</button>
                </form>
            </div>
        </div>
        
        
     <!--revenir haut page-->
 
        <a class="hautpage" href="#hautpage"><img class="imghp" src="assets/icon/fleche.png" alt="revenir_haut_page"></a>
        <br>    
    </main>

    <!--FOOTER-->
    <HR class="footer-top"></HR>
    <footer>
        <div class=" footer">

            <div class="horaires">
                <h5 class="title-footer">Horaires d'ouverture :</h5>
                <ul class="horaires-liste">
                    <li><span class="bold">Lundi</span> : 8h00-12h00 / 14h00-19h00</li>
                    <li><span class="bold">Mardi</span> : 8h00-12h00 / 14h00-19h00</li>
                    <li><span class="bold">Mercredi</span> : 8h00-12h00 / 14h00-19h00 </li>
                    <li><span class="bold">Jeudi</span> : 8h00-12h00 / 14h00-19h00</li>
                    <li><span class="bold">Vendredi</span> : 8h00-18h00 </li>
                    <li><span class="bold">Samedi</span> : 9h00-12h00</li>
                    <li><span class="bold">Dimanche</span> : fermé</li>
                </ul>
            </div>

            <div class="call-us">
                <h5 class="title-footer">Nous appeler:</h5>
                <div class="contact-zone3">
                    <img class="icon-contact" src="assets/icon/telephone.png" alt="telephone">
                    <div class="contact-zone4">
                        <p>04 58 22 01 01</p>
                        <p>06 60 45 78 12</p>
                    </div>
                </div>
            </div>
          
            <div class="find-us">
                <h5 class="title-footer">Nous trouver : </h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2578.4971615556724!2d5.682943786600018!3d45.18971032160149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1706525228005!5m2!1sfr!2sfr" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          
            <div class="follow-us">
                <h5 class="title-footer">Nous suivre : </h5>
                <ul class="rs">
                    <li><a href="youtube.com"><img class="icon-rs" src="assets/icon/youtube.png" alt="youtube"></img></a></li>
                    <li><a href="instagram.com"><img class="icon-rs" src="assets/icon/instagram.png" alt="instagram"></img></a></li>
                    <li><a href="facebook.com"><img class="icon-rs" src="assets/icon/facebook.png" alt="facebook"></img></a></li>
                </ul>
            </div>

        </div>
        <HR class="footer-bottom"></HR>
        <p class="credits">© Marlène PINAUD - 2024 - Toute reproduction interdite - Mentions légales</p>
    </footer>
  </body>
</html>
