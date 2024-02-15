<?php

require_once '../lib/config.php';
require_once '../lib/pdo.php';
require_once '../lib/session.php';
require_once '../lib/openings.php';
require_once 'templates/header.php';

$mondays = getMonday($pdo);

?>

<div class="admin-openings">

    <h1>Gérer les horaires d'ouverture</h1>
        <table class="table-openings">
            <thead>
                <tr>
                    <th scope="col">Jour</th>
                    <th scope="col">Ouverture matin</th>
                    <th scope="col"></th>
                    <th scope="col">Fermeture matin</th>
                    <th scope="col"></th>
                    <th scope="col">Ouverture après-midi</th>
                    <th scope="col"></th>
                    <th scope="col">Fermeture après-midi</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lundi</td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>

                </tr>
                <tr>
                    <td>Mardi</td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                </tr>
                <tr>
                    <td>Mercredi</td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                </tr>
                <tr>
                    <td>Jeudi</td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                </tr>
                <tr>
                    <td>Vendredi</td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                </tr>
                <tr>
                    <td>Samedi</td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                    <td><textarea name="" id="" cols="10" rows="1"><?=$mondays["opening_hours"];?></textarea></td>
                    <td><input class="input-button2" type="submit" name="" value="Modifier" class="button" /></td>
                </tr>

            </tbody>
        </table>

</div>





</body>

</html>