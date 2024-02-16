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

// fonction pour modifier les horaires d'ouverture

function updateOpenings(PDO $pdo, datetime $morning_opening, datetime $morning_closing, datetime $afternoon_opening, datetime $afternoon_closing):bool
{
    $sql = "UPDATE openings SET morning_opening morning_closing afternoon_opening afternoon_closing";
    $query= $pdo->prepare($sql);
    $query->bindParam('morning_opening', $morning_opening, PDO::PARAM_STR);
    $query->bindParam('morning_closing', $morning_closing, PDO::PARAM_STR);
    $query->bindParam('afternoon_opening', $afternoon_opening, PDO::PARAM_STR);
    $query->bindParam('afternoon_closing', $afternoon_closing, PDO::PARAM_STR);
    return $query->execute();

}
