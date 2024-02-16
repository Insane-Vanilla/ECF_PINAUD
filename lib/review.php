<?php

//fonction pour récupérer les avis

function getReviews(PDO $pdo): array
{
    $sql="SELECT * FROM review ORDER BY idReview ASC";
    $query=$pdo->prepare($sql);
    $query->execute();
    $reviews = $query->fetchAll(PDO::FETCH_ASSOC);
    return $reviews;
}


// fonction pour récupérer les avis par leur id

function getReviewById (PDO $pdo, int $idReview ): array|bool
{
    $query=$pdo->prepare("SELECT * FROM review WHERE idReview= :idReview");
    $query->bindValue(":idReview", $idReview, PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// fonction pour récupérer nombre étoiles

function getStars(PDO $pdo, int $ratingStars) : array|bool
{
    $query=$pdo->prepare("SELECT * FROM review WHERE ratingStars= :ratingStars");
    $query->bindValue(":ratingStars", $ratingStars, PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// fonction pour approuver et publier un avis

function addReview ($pdo):array
{
    $sql="SELECT * FROM review WHERE approved= 1";
    $query=$pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
