<?php

function verifyUserLoginPassword(PDO $pdo, string $email, string $password)
{
    $query = $pdo->prepare("SELECT * FROM employee WHERE email = :email");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}

function verifyAdminLoginPassword(PDO $pdo, string $email, string $password)
{
    $query = $pdo->prepare("SELECT * FROM administrator WHERE email = :email");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $admin = $query->fetch();

    if ($admin && password_verify($password, $admin['password'])) {
        return $admin;
    } else {
        return false;
    }
}