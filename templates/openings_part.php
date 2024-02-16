<?php


?>
        <ul class="horaires-liste">
            <li>
                <span class="bold"><?=ucfirst(htmlentities($opening["opening_day"]));?></span>
                :  <?=$opening["morning_opening"];?>
                - <?=$opening["morning_closing"];?>
                / <?=$opening["afternoon_opening"];?>
                -<?=$opening["afternoon_closing"];?>
            </li>
        </ul>
    

