<?php


// fonction pour récupérer le texte "réparations"

function getRepairs(PDO $pdo)
{
    $sql = "SELECT description_service FROM services WHERE category = 'Réparations'";
    $query=$pdo->prepare($sql);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

// fonction pour modifier le texte "réparations"

function updateRepairs(PDO $pdo, string $descriptionRepairs):bool
{
    $sql ="UPDATE services SET description_service WHERE id=1";
    $query =$pdo->prepare($sql);
    $query->bindParam(':description_service', $descriptionRepairs, PDO::PARAM_STR);
    return $query->execute();
}

// fonction pour récupérer le texte "entretien"

function getMaintenance (PDO $pdo)
{
    $sql = "SELECT description_service FROM services WHERE category = 'Entretien'";
    $query=$pdo->prepare($sql);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

// fonction pour modifier le texte "entretien"

function updateMaintenance(PDO $pdo, string $descriptionMaintenance):bool
{
    $sql ="UPDATE services SET description_service WHERE id=2";
    $query =$pdo->prepare($sql);
    $query->bindParam(':description_service', $descriptionMaintenance, PDO::PARAM_STR);
    return $query->execute();
}

// fonction pour récupérer le texte "pneumatiques"

function getTires (PDO $pdo)
{
    $sql = "SELECT description_service FROM services WHERE category = 'Pneumatiques'";
    $query=$pdo->prepare($sql);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

// fonction pour modifier le texte "pneumatiques"

function updateTires(PDO $pdo, string $descriptionTires):bool
{
    $sql ="UPDATE services SET description_service WHERE id=3";
    $query =$pdo->prepare($sql);
    $query->bindParam(':description_service', $descriptionTires, PDO::PARAM_STR);
    return $query->execute();
}

//fonction pour récupérer le texte "carrosserie"

function getBodyWork(PDO $pdo)
{
    $sql = "SELECT description_service FROM services WHERE category = 'Carrosserie'";
    $query=$pdo->prepare($sql);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

// fonction pour modifier le texte "carrosserie"

function updateBodyWork(PDO $pdo, string $descriptionBodyWork):bool
{
    $sql ="UPDATE services SET description_service WHERE id=4";
    $query =$pdo->prepare($sql);
    $query->bindParam(':description_service', $descriptionBodyWork, PDO::PARAM_STR);
    return $query->execute();
}