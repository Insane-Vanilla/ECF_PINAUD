<?php

function verifyUserLoginPassword(PDO $pdo, string $email, string $password)
{
    $query = $pdo->prepare("SELECT * FROM employee WHERE email_employee = :email_employee");
    $query->bindParam(':email_employee', $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if ($user && password_verify($password, $user['password_employee'])) {
        return $user;
    } else {
        return false;
    }
}

function verifyAdminLoginPassword(PDO $pdo, string $email, string $password)
{
    $query = $pdo->prepare("SELECT * FROM administrator WHERE email_admin = :email_admin");
    $query->bindParam(':email_admin', $email, PDO::PARAM_STR);
    $query->execute();
    $admin = $query->fetch();

    if ($admin && password_verify($password, $admin['password_admin'])) {
        return $admin;
    } else {
        return false;
    }
}