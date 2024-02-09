<?php

require_once __DIR__.'/templates/header.php';
require_once __DIR__.'../../lib/config.php';

?>

<!-- AJOUTER USER -->

<form class="box" action="" method="post">
    <h1>Ajouter un utilisateur</h1>
        <h2>Saisir adresse mail</h2>
            <input type="text" class="box-input" name="email" placeholder="Email" required />
        <h2>Saisir type d'utilisateur</h2>
        <div>
            <select class="box-input" name="type" id="type" >
                <option value="" disabled selected>Type</option>
                <option value="admin">Administrateur</option>
                <option value="user">Employé</option>
            </select>
        </div>
        <h2>Saisir mot de passe temporaire</h2>
        <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
  
        <input type="submit" name="submit" value="Ajouter un utilisateur" class="box-button" />
</form>
<?php } ?>

/* SUPPRIMER USER */

/* MODIFIER USER */


<?php

require_once __DIR__.'/templates/footer.php'

?>