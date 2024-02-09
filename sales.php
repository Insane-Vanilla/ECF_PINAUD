<?php

    require_once 'templates/header.php';
    require_once 'lib/config.php';
    require_once 'lib/pdo.php';
    require_once 'lib/car.php';

$cars = getCars($pdo)

?>

    <!--MAIN-->
    <main>
        <div class="title4">
            <img class="voiture" src="assets/icon/voiture.png" alt="voiture"><h1>Nos voitures d'occasion à la vente</h1>
        </div>

        <div class="container-vente">

            <!--filtres-->
            <div class="filters">
                <div class="filter-km">
                    <label for="km">Kilométrage</label>
                    <input class="custom-input" type="range" id="km" name="km" min="0" step="1" max="250000" value="250000" />
                    <div class="range-km">
                        <p class="km-scale">0km - 250 000 km</p>
                        <button class="reset">Réinitialiser</button>
                    </div>
                </div>

                <div class="filter-price">
                    <label for="price">Prix</label>
                    <input id="price" type="range" name="price" step="50" min="500" max="77500" value="77500" />
                    <div class="range-price">
                        <p class="price-scale">500€ - 77 500€</p>
                        <button class="reset">Réinitialiser</button>
                    </div>
                </div>

                <div class="filter-year">
                    <label for="year">Année</label>
                    <input id="year" type="range" name="volume" step="1" min="1955" max="2023" value="2023" />
                    <div class="range-year">
                        <p class="year-scale">1955-2023</p>
                        <button class="reset">Réinitialiser</button>
                    </div>
                </div>

            </div>

            <!--catalogue-->
            <div class="cards">
                <?php
                    foreach ($cars as $key => $car) { ?>
                    <?php require "templates/car_part.php"; ?>
                <?php } ?>
            </div>

        </div>
    
     <!--revenir haut page-->
 
        <a class="hautpage" href="#hautpage"><img class="imghp" src="assets/icon/fleche.png" alt="revenir_haut_page"></a>
        <br>    
    </main>

<?php
    require_once 'templates/footer.php';
?>
