<?php


// fonction pour voir tous les employés

function getUsers(PDO $pdo, int $limit = null):array
{
    $sql = "SELECT * FROM employee ORDER BY idEmployee ASC";
    if ($limit){
        $sql .= "LIMIT : limit";
    }
    $query = $pdo->prepare($sql);
    if ($limit) {
        $query-> bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    $query-> execute();
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

//fonction pour ajouter un employé

function addUser(PDO $pdo, string $email_employee, string $password_employee, int $idAdmin):bool
{
    $sql ="INSERT INTO employee (email_employee, password_employee, idAdmin) VALUES (:email_employee, :password_employee, :idAdmin)";
    $query =$pdo->prepare($sql);
    $password_employee = password_hash($password_employee, PASSWORD_DEFAULT);
    $query->bindParam(':email_employee', $email_employee, PDO::PARAM_STR);
    $query->bindParam(':password_employee', $password_employee, PDO::PARAM_STR);
    $query->bindParam(':idAdmin', $idAdmin, PDO::PARAM_STR);
    return $query->execute();
}

//fonction pour supprimer un employé

function deleteUser(PDO $pdo, int $id):bool
{
    $sql ="DELETE FROM employee WHERE idEmployee= :idEmployee";
    $query =$pdo->prepare($sql);
    $query->bindValue(':idEmployee', $id, PDO::PARAM_STR);
    return $query->execute();
}

// fonction pour vérifier l'identifiant et mot de passe de l'employé

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

// fonction pour vérifier l'identifiant et mot de passe de l'admin

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

// A FAIRE : fonction pour hasher les mots de passe des nouveaux utilisateurs