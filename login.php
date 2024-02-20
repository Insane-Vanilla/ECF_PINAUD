<?php

    require_once 'templates/header.php';
    require_once 'lib/pdo.php';
    require_once 'lib/config.php';
    require_once 'lib/user.php';


$errors = [];

if (isset($_POST["loginUser"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $user = verifyUserLoginPassword($pdo, $email, $password);

  if ($user) {
    session_regenerate_id(true);
    $_SESSION["user"]= $user;
    header("location:employee/index.php");
  } else {
    $errors[]= "Email ou mot de passe incorrect";
  }
}

if (isset($_POST["loginUser"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $admin = verifyAdminLoginPassword($pdo, $email, $password);

  if ($admin) {
    session_regenerate_id(true);
    $_SESSION["admin"]= $admin;
    header("location:admin/index.php");
  } else {
    $errors[]= "Email ou mot de passe incorrect";
  }
}

?>

    <!--MAIN-->
    <main>
      <div class="title">
        <img class="moteur" src="assets/icon/moteur.png" alt="moteur" />
        <h1>Espace connexion</h1>
      </div>
      
      <!--Affichage éventuelle erreur -->
      <?php foreach($errors as $error) { ?>
          <div class="error">
          <?=$error; ?>
      </div>
      <?php } ?>

      <div class="container-connection">
        <div class="connection">
          <form
            class="connection-form"
            id="connection-form"
            name="connection-form"
            accept-charset="utf-8"
            action=""
            method="post"
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
              <a href="#"
                ><input class="connect" type="submit" name="loginUser" value="Se connecter"
              /></a>
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
