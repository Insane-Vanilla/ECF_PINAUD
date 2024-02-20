<?php

    require_once 'templates/header.php';
    require_once 'lib/config.php';
    require_once 'lib/pdo.php';
    require_once 'lib/car.php';

$cars = getCars($pdo)

?>

    <!--MAIN-->
    <main>
        <div class="title">
            <img class="voiture" src="assets/icon/voiture.png" alt="voiture"><h1>Nos voitures d'occasion à la vente</h1>
        </div>

        <div class="container-vente">

            <!--filtres-->
            <div class="container-filters">

                <div class="wrapper">
                    <!--filtre km-->
                    <label for="km">Kilométrage</label>
        
                    <div class="values">
                        <p><span id="range1">200</span> - <span id="range2">500 000</span>km</p>
                    </div>

                    <div class="container-filter">
                        <div class="slider-track"></div>
                        <input id="slider1" type="range" min="200" max="250000" value="200" step="100" oninput="slideOne()">
                        <input id="slider2" type="range" min="200" max="250000" value="250000" step="100" oninput="slideTwo()">
                    </div>

                    <div class="range-km">
                        <p class="km-scale">0km - 250 000 km</p>
                        <button onclick="resetKm()" class="resetkm">Réinitialiser</button>
                    </div>
                </div>

                <div class="wrapper">
                    <!--filtre prix-->
                    <label for="price">Prix</label>

                    <div class="values">
                    <p><span id="range3">500</span> - <span id="range4">10 000</span>€</p>

                    </div>
        
                    <div class="container-filter">
                        <div class="slider-track"></div>
                        <input id="slider3" type="range" min="500" max="77500" value="500" step="100" oninput="slideThree()">
                        <input id="slider4" type="range" min="500" max="77500" value="77500" step="100" oninput="slideFour()">
                    </div>

                    <div class="range-price">
                        <p class="price-scale">500€ - 77 500 €</p>
                        <button onclick="resetPrice()" class="resetprice">Réinitialiser</button>
                    </div>
                </div>

                <div class="wrapper">
                    <!--filtre année-->
                    <label for="year">Année</label>

                    <div class="values">
                    <p><span id="range5">1955</span> - <span id="range6">2023</span></p>

                    </div>
        
                    <div class="container-filter">
                        <div class="slider-track"></div>
                        <input id="slider5" type="range" min="1955" max="2023" value="1955" step="1" oninput="slideFive()">
                        <input id="slider6" type="range" min="1955" max="2023" value="2023" step="1" oninput="slideSix()">
                    </div>

                    <div class="range-year">
                        <p class="year-scale">1955 - 2023</p>
                        <button onclick="resetYear()"class="resetyear">Réinitialiser</button>
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
