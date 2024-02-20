<?php


?>

<div class="feature">
    <div class="advice-title">
        <h3><?=htmlentities($review["firstname"])?></h3>
            <div>
                <?php if ($review['ratingStars'] ===1) { ?>
                    <img class="star" src="assets/icon/star.png" alt="star">
                <?php }?>
                <?php if ($review['ratingStars'] ===2) { ?>
                    <img class="star" src="assets/icon/star.png" alt="star">
                    <img class="star" src="assets/icon/star.png" alt="star">
                <?php }?>
                <?php if ($review['ratingStars'] ===3) { ?>
                    <img class="star" src="assets/icon/star.png" alt="star">
                    <img class="star" src="assets/icon/star.png" alt="star">
                    <img class="star" src="assets/icon/star.png" alt="star">
                <?php }?>
                <?php if ($review['ratingStars'] ===4) { ?>
                    <img class="star" src="assets/icon/star.png" alt="star">
                    <img class="star" src="assets/icon/star.png" alt="star">
                    <img class="star" src="assets/icon/star.png" alt="star">
                    <img class="star" src="assets/icon/star.png" alt="star">
                <?php }?>
                <?php if ($review['ratingStars'] ===5) { ?>
                    <img class="star" src="assets/icon/star.png" alt="star">
                    <img class="star" src="assets/icon/star.png" alt="star">
                    <img class="star" src="assets/icon/star.png" alt="star">
                    <img class="star" src="assets/icon/star.png" alt="star">
                    <img class="star" src="assets/icon/star.png" alt="star">
                <?php }?>
                </div>
            </div> 
                <p class="advice"><?=htmlentities($review["content"])?></p>
            </div>