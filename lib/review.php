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


// fonction pour récupérer l'employé qui a géré l'avis
function getReviewManager(PDO $pdo, int $id):array
{
    $sql="SELECT * FROM employee
            LEFT JOIN manage_review ON manage_review.idEmployee = employee.idEmployee
            WHERE manage_review.idReview = :idReview";
    $query=$pdo->prepare($sql);
    $query->bindParam(":idReview", $id, PDO::PARAM_STR);
    $query->execute();
    $reviewManagers = $query->fetchAll(PDO::FETCH_ASSOC);
    return $reviewManagers;

}

//fonction pour enregistrer un avis

function addReview (PDO $pdo, string $firstname, string $content, int $ratingStars, int $approved):bool
{
    $sql = "INSERT INTO review (firstname, content, ratingStars, approved) VALUES (:firstname, :content, :ratingStars, :approved)";
    $query = $pdo ->prepare ($sql);
    $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $query->bindParam(':content', $content, PDO::PARAM_STR);
    $query->bindParam(':ratingStars', $ratingStars, PDO::PARAM_STR);
    $query->bindParam(':approved', $approved, PDO::PARAM_STR);
    return $query->execute();
}

// fonction pour approuver et publier un avis

function publishReview (PDO $pdo, int $approved):bool
{
    $sql="SELECT * FROM review WHERE approved= :approved";
    $query=$pdo->prepare($sql);
    $query->bindParam(':approved', $approved, PDO::PARAM_STR);
    return $query->execute();
}
