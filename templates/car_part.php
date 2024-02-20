<?php


?>


<article data-km="<?=htmlentities($car["mileage"])?>"
        data-price="<?=htmlentities($car["price"])?>"
        data-year="<?=htmlentities($car["car_year"])?>"
        class="card">
    <img src="uploads/<?=$car["idCar"]?>.jpg" alt="<?=htmlentities($car["brand"])?>">
        <div class="content">
            <p class="car-name"><?=htmlentities($car["brand"])?></p>
            <p class="car-year">Année : <?=htmlentities($car["car_year"])?></p>
            <p class="car-motor"><?=ucfirst(htmlentities($car["fuel"]))?></p>
            <p class="car-km"><?=htmlentities($car["mileage"])?> km</p>
            <p class="car-price"><?=htmlentities($car["price"])?> €</p>
        </div>
        <footer class="footer-card">
            <a class="fiche-voiture" href="details.php?id=<?=$car["idCar"];?>"><button class="details">Détails</button></a>
        </footer>
</article>