<?php

    require_once 'templates/header.php';
    require_once 'lib/pdo.php';
    require_once 'lib/config.php';
    require_once 'lib/user.php';

$errors = [];
$notifications=[];

// Vérification identifiants de connexion
if (isset($_POST['loginUser'])) {
  $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);
  $admin = verifyAdminLoginPassword($pdo, $_POST['email'], $_POST['password']);
  if ($user) {
    session_regenerate_id(true);
    $_SESSION['user']= $user;
    header('location:employee/index.php');
    } elseif ($admin) {
      session_regenerate_id(true);
      $_SESSION['admin']= $admin;
      header('location:admin/index.php');
    } else {
      $errors[]= 'Email ou mot de passe incorrect';
  }
}

?>

    <!--MAIN-->
    <main>
      <div class="title">
        <img class="moteur" src="assets/icon/moteur.png" alt="moteur" />
        <h1>Espace connexion</h1>
      </div>
      
      <!--Gérer les notifications et les erreurs-->
      <?php
          foreach ($notifications as $notification){ ?>
            <div class="alerte">
              <?=$notification;?>
            </div>
      <?php } ?>
      <?php
          foreach ($errors as $error){ ?>
            <div class="alerte">
                <?=$error;?>
            </div>
      <?php } ?>

      <!--FORMULAIRE DE CONNEXION -->
      <div class="container-connection">
        <div class="connection">
          <form
            class="connection-form"
            id="connection-form"
            name="connection-form"
            accept-charset="utf-8"
            method="POST"
          >
            <div class="connection-inputs">
              <label
                class="text-label-connection"
                class="label-contact"
                for="email"
                >Email</label
              >
              <input
                class="connection-input"
                type="text"
                name="email"
                id="email"
                placeholder="Identifiant"
                required=""
              />
            </div>

            <div class="connection-inputs">
              <label class="text-label-connection" for="password"
                >Mot de passe</label
              >
              <input
                class="connection-input"
                type="text"
                name="password"
                id="password"
                placeholder="Mot de passe"
                required=""
              />
            </div>

            <div class="connection-button">
            <input class="connect" type="submit" name="loginUser" value="Se connecter"/>
            </div>
          </form>
        </div>
      </div>
    </main>

    <!--FOOTER-->
    <HR class="footer-top"></HR>
    <footer>
        <div class=" footer-login">
            <h5 class="title-footer">Accéder à votre espace personnel: </h5>
            <p> Si vous avez des difficultés à vous connecter, contacter le 0 800 152 152</p>
            <img src="assets/images/logo.png" alt="logo" class="logo-footer-login">

        </div>
        <HR class="footer-bottom"></HR>
        <p class="credits">© Marlène PINAUD - 2024 - Toute reproduction interdite - Mentions légales</p>
    </footer>
  </body>
</html>
