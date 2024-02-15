<?php

    require_once 'lib/config.php';
    require_once 'lib/pdo.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--META-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="keywords"
      content="voiture, réparation, vente, occasion, garage, prestation, automobile, carrosserie, entretien, pneus, véhicules"
    />
    <meta
      name="description"
      content="Découvrez le site web du garage Vincent PARROT, garage proposant réparation et entretien de votre véhicule, ainsi que voitures d'occasion"
    />

    <!--FAVICON-->
    <link rel="icon" type="image/png" href="/assets/icon/favicon.png">

    <!--FONTS-->
    <link href="https://db.onlinewebfonts.com/c/088f292cf151a6e496fc8cdc5441b3e3?family=Lovelo-Black" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/d353583e5cdf878d047eae178df5b757?family=Stars+%26+Love+Bottom+Heavy" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/tt-chocolates" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/filtres.css"/>
    <link rel="stylesheet" href="/assets/css/responsive.css" />

    <title>Garage Vincent Parrot</title>
  
</head>

<body>
    <!--HEADER-->

    <header id="hautpage">
        <!-- logo -->
        <div><a href="index.php"><img class="logo" src="assets/images/logo.png" alt="logo PARROT"></a></div>
            
        <!-- navigation -->
        <ul class="main-nav">
            <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="services.php">L'ATELIER</a></li>
            <li><a href="sales.php">LES VOITURES</a></li>
            <li><a href="contact.php">NOUS CONTACTER</a></li>  
        </ul>
        
        <div class="button-connexion">
            <?php if(isset($_SESSION["user"]) || isset($_SESSION["admin"])) { ?>
                <a class="connexion" href="logout.php"><button class="btn-conn" type="button">Déconnexion</button></a>
            <?php } else { ?>
                <a class="connexion" href="login.php"><button class="btn-conn" type="button">Mon espace</button></a>
            <?php } ?>
        </div>
    </header>
<main>