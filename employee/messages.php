<?php

    require_once '../lib/config.php';
    require_once '../lib/pdo.php';
    require_once '../lib/session.php';
    require_once '../lib/message.php';
    require_once 'templates/header.php';

$messages = getMessages($pdo);

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
                    <td> 
                        <!-- foreach message
                        if 
                    - si pas traité : 
                        <select name="users">
                            <option value="">--Sélectionner un employé--</option>
                            (foreach $users as $user) { 
                            <option value = $user['email_employe']>$user['email_employe'</option> }
                        </select>


                    - si traité : afficher employé qui a traité le message 
                        --> 
            </td>

                </tr>
                <?php } ?>

            </tbody>
        </table>

</div>