<?php

//fonction pour récupérer les avis

function getReviews(PDO $pdo, int $limit = null, int $page = null): array
{
    $sql="SELECT * FROM review ORDER BY idReview ASC";
    
    if ($limit && !$page) {
        $sql .= "LIMIT :limit";
    }
    if ($page){
        $sql .= "LIMIT :offset, :limit";
    }
    
    $query=$pdo->prepare($sql);

    if($limit){
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    if ($page) {
        $offset = ($page -1) * $limit;
        $query->bindValue(":offset", $offset, PDO::PARAM_INT);
    }
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

//function addReview ()