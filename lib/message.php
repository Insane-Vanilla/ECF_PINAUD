<?php


// fonction pour enregistrer un message venant du formulaire

function addMessages ($pdo, string $lastname, string $firstname, string $email, string $phone, string $content):bool 
{
    $sql="INSERT INTO messages (lastname, firstname, email, phone_number, content)
            VALUES (:lastname, :firstname, :email, :phone_number, :content)";
    $query= $pdo->prepare($sql);
    $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':phone_number', $phone, PDO::PARAM_STR);
    $query->bindParam(':content', $content, PDO::PARAM_STR);
    return $query->execute();

}

// fonction pour récupérer tous les messages

function getMessages(PDO $pdo):array
{
    $sql = "SELECT * FROM messages ORDER BY idMessage ASC";
    $query = $pdo-> prepare ($sql);
    $query->execute();
    $messages =$query->fetchAll(PDO::FETCH_ASSOC);
    return $messages;
}


//fonction pour récupérer l'employé qui a géré le message