<?php

// fonction pour récupérer les voitures
function getCars(PDO $pdo, int $limit = null, int $page = null): array
{
    $sql ="SELECT * FROM car ORDER BY idCar ASC";
    if ($limit && !$page) {
        $sql .= "LIMIT :limit";
    }
    if ($page) {
        $sql .= "LIMIT :offset, :limit";
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    if ($page) {
        $offset = ($page -1) * $limit;
        $query->bindValue(":offset", $offset, PDO::PARAM_INT);
    }

    $query->execute();
    $cars = $query->fetchAll(PDO::FETCH_ASSOC);

    return $cars;
}

//créer fonction pour récupérer voitures par leur id

function getCarById(PDO $pdo, int $id):array|bool
{
    $query=$pdo->prepare("SELECT * FROM car WHERE idCar= :idCar");
    $query->bindValue(':idCar', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

// créer fonction pour récupérer les options

function getOptions(PDO $pdo, int $idOption):array|bool
{
    $query=$pdo->prepare("SELECT * FROM options WHERE idOption= :idOption");
    $query->bindValue(":idOption", $idOption, PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}


// créer fonction pour récupérer les options des voitures

function getCarOptions(PDO $pdo, int $id):array
{
    $sql="SELECT * FROM options
            LEFT JOIN car_options ON car_options.idOption = options.idOption
            WHERE car_options.idCar = :idCar";
    $query=$pdo->prepare($sql);
    $query->bindParam(":idCar", $id, PDO::PARAM_STR);
    $query->execute();
    $options = $query->fetchAll(PDO::FETCH_ASSOC);
    return $options;

}


//créer fonction pour ajouter une voiture

//créer fonction pour supprimer une voiture