<?php

//créer fonction pour récupérer les horaires d'ouverture

function getOpenings(PDO $pdo):array
{
    $sql = "SELECT * FROM opening ORDER BY idOpening ASC";
    $query = $pdo-> prepare ($sql);
    $query->execute();
    $openings =$query->fetchAll(PDO::FETCH_ASSOC);
    return $openings;
}

// fonction pour modifier les horaires d'ouverture du matin

function updateMorningsOpenings(PDO $pdo, datetime $morning_opening):bool
{
    $sql = "UPDATE openings SET morning_opening=:morning_opening ";
    $query= $pdo->prepare($sql);
    $query->bindParam(':morning_opening', $morning_opening, PDO::PARAM_STR);
    return $query->execute();
}

// fonction pour modifier les horaires de fermeture du matin

function updateMorningsClosings(PDO $pdo, datetime $morning_closing):bool
{
    $sql = "UPDATE openings SET morning_closing=:morning_closing ";
    $query= $pdo->prepare($sql);
    $query->bindParam(':morning_closing', $morning_closing, PDO::PARAM_STR);
    return $query->execute();
}

// fonction pour modifier les horaires d'ouverture de l'après-midi

function updateAfternoonsOpenings(PDO $pdo, datetime $afternoon_opening):bool
{
    $sql = "UPDATE openings SET afternoon_opening=:afternoon_opening ";
    $query= $pdo->prepare($sql);
    $query->bindParam(':afternoon_opening', $afternoon_opening, PDO::PARAM_STR);
    return $query->execute();
}

// fonction pour modifier les horaires de fermeture de l'après-midi

function updateAfternoonsClosings(PDO $pdo, datetime $afternoon_closing):bool
{
    $sql = "UPDATE openings SET afternoon_closing=:afternoon_closing ";
    $query= $pdo->prepare($sql);
    $query->bindParam(':afternoon_closing', $afternoon_closing, PDO::PARAM_STR);
    return $query->execute();
}
