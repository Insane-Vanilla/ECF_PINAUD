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

<?php
    require_once 'templates/footer.php';
?>
