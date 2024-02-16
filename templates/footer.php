<?php
    require_once 'lib/config.php';
    require_once 'lib/pdo.php';
    require_once 'lib/openings.php';

$openings = getOpenings($pdo)

?>
    <!--FOOTER-->
    <HR class="footer-top"></HR>
    <footer>
        <div class=" footer">
            <div class="horaires">
                <h5 class="title-footer">Horaires d'ouverture :</h5>
                    <?php
                    foreach ($openings as $opening) { ?>
                    <?php require "openings_part.php"; ?>
                    <?php } ?>
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

    <!--JS-->
    <script src="/js/filters.js" async></script>
    <script src="/js/stars.js" async></script>

  </body>
</html>