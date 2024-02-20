<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => _DOMAIN_,
    'secure' => true,
    'httponly' => true
]);

session_start();

function adminOnly()
{
    if (!isset($_SESSION['employee'])) {
        // Rediriger vers login
        header('location: ../login.php');
    } else if (!isset($_SESSION['administrator'])) {
        // Rediriger vers accueil
        header('location: ../index.php');
    }
}