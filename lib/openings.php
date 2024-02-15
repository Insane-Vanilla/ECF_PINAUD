<?php

//créer fonction pour récupérer les horaires d'ouverture

function getOpeningsById(PDO $pdo, int $id):array|bool
{
    $sql = "SELECT * FROM opening WHERE idOpening = :idOpening";
    $query = $pdo-> prepare ($sql);
    $query->bindValue(":idOpening", $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}


//créer fonction pour modifier les horaires d'ouverture par jour
function getMonday(PDO $pdo):array
{
    $sql = "SELECT opening_hours FROM opening WHERE opening_day = 'lundi'";
    $query = $pdo-> prepare ($sql);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}