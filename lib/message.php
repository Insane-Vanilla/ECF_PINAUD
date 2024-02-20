<?php


// fonction pour enregistrer un message venant du formulaire

function addMessage ($pdo, string $lastname, string $firstname, string $email, string $phone, string $content):bool 
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
function getMessageManager(PDO $pdo, int $id):array
{
    $sql="SELECT * FROM employee
            LEFT JOIN get_message ON get_message.idEmployee = employee.idEmployee
            WHERE get_message.idMessage = :idMessage";
    $query=$pdo->prepare($sql);
    $query->bindParam(":idMessage", $id, PDO::PARAM_STR);
    $query->execute();
    $messagesManagers = $query->fetchAll(PDO::FETCH_ASSOC);
    return $messagesManagers;
}

// fonction pour confirmer le traitement d'un message

function processMessage(PDO $pdo, int $processed): bool
{
    $sql="SELECT * FROM messages WHERE processed= :processed";
    $query=$pdo->prepare($sql);
    $query->bindParam(':processed', $processed, PDO::PARAM_STR);
    return $query->execute();
}
