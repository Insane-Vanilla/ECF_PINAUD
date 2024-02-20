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

function getOptions(PDO $pdo):array|bool
{
    $query=$pdo->prepare("SELECT * FROM options ORDER BY idOption ASC");
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

function addCar(PDO $pdo, string $brand, string $model, int $price, string $fuel, string $gearbox, string $mileage, int $doors, int $seats, string $color, int $horsepower, datetime $car_year):bool
{
    $sql="INSERT INTO car (brand, model, price, fuel, gearbox, mileage, doors, seats, color, horsepower, car_year) VALUES (:brand, :model, :price, :fuel, :gearbox, :mileage, :doors, :seats, :color, :horsepower, :car_year)";
    $query=$pdo->prepare($sql);
    $query->bindParam(':brand', $brand, PDO::PARAM_STR);
    $query->bindParam(':model', $model, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_STR);
    $query->bindParam(':fuel', $fuel, PDO::PARAM_STR);
    $query->bindParam(':gearbox', $gearbox, PDO::PARAM_STR);
    $query->bindParam(':mileage', $mileage, PDO::PARAM_STR);
    $query->bindParam(':doors', $doors, PDO::PARAM_STR);
    $query->bindParam(':seats', $seats, PDO::PARAM_STR);
    $query->bindParam(':color', $color, PDO::PARAM_STR);
    $query->bindParam(':horsepower', $horsepower, PDO::PARAM_STR);
    $query->bindParam(':car_year', $car_year, PDO::PARAM_STR);
    return $query->execute();

}

//créer fonction pour supprimer une voiture

function deleteCar(PDO $pdo, int $id):bool
{
    $sql="DELETE FROM car WHERE idCar=:idCar";
    $query=$pdo->prepare($sql);
    $query->bindValue(':idCar', $id, $pdo::PARAM_STR);
    return $query->execute();
}