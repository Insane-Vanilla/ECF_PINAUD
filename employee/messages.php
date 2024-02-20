<?php

    require_once '../lib/config.php';
    require_once '../lib/pdo.php';
    require_once '../lib/session.php';
    require_once '../lib/message.php';
    require_once '../lib/user.php';
    require_once 'templates/header.php';

$messages = getMessages($pdo);
$users = getUsers($pdo);

foreach ($users as $user) {
    $id = $user['idEmployee'];
    $managers = getMessageManager($pdo, $id);
}

if (isset($_POST['processed'])) {
    $processed = publishReview($pdo, $_POST['approved']===1);
    if ($publish) {
        $notifications[] = "Avis publié";
    } else { 
        $errors[] = "Une erreur s\'est produite lors de la publication";
    }
}

?>

<div class="employe-msgs">

    <h1>Gérer les messages</h1>
    
        <table class="table-messages">
            <thead>
                <tr>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contenu</th>
                    <th scope="col">Traité par</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $message) { ?>
                <tr>
                    <td><?=ucfirst(htmlentities($message["idMessage"]));?></td>
                    <td><?=ucfirst(htmlentities($message["lastname"]));?></td>
                    <td><?=ucfirst(htmlentities($message["firstname"]));?></td>
                    <td><?=htmlentities($message["email"]);?></td>
                    <td><?=$message["phone_number"];?></td>
                    <td><?=htmlentities($message["content"]);?></td>
                    <td><?php if ($message['processed']===1) {
                                foreach ($managers as $manager)
                                    { ?><?=(htmlentities($manager['email_employee']))?>
                                <?php }
                                } else { ?>
                                    <select name="users">
                                        <option value="">--Sélectionner un employé--</option>
                                        <?php foreach ($users as $user) {?>
                                            <option value=""><?=(htmlentities($user['email_employee']))?></option>
                                        <?php }?>
                                    </select>
                                    <input type="submit" name="processed" value="Valider">
                          <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

</div>