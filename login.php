<?php

    require_once 'templates/header.php';
    require_once 'lib/pdo.php';
    require_once 'lib/user.php';
    require_once 'lib/config.php';


$errors = [];

if (isset($_POST["loginUser"])) {
  $email = $_POST["email_employee"];
  $password = $_POST["password_employee"];

  $user = verifyUserLoginPassword($pdo, $email, $password);

  if ($user) {
    session_regenerate_id(true);
    $_SESSION["user"]= $user;
    header("location:index.php");
  } else {
    $errors[]= "Email ou mot de passe incorrect";
  }
}

if (isset($_POST["loginUser"])) {
  $email = $_POST["email_admin"];
  $password = $_POST["password_admin"];

  $admin = verifyAdminLoginPassword($pdo, $email, $password);

  if ($admin) {
    session_regenerate_id(true);
    $_SESSION["admin"]= $admin;
    header("admin/location:index.php");
  } else {
    $errors[]= "Email ou mot de passe incorrect";
  }
}

?>

    <!--MAIN-->
    <main>
      <div class="title7">
        <img class="moteur" src="assets/icon/moteur.png" alt="moteur" />
        <h1>Espace connexion</h1>
      </div>
      
      <!--Affichage éventuelle erreur -->
      <?php foreach($errors as $error) { ?>
        <div class="error">
          <?=$errors; ?>
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
            <div class="footer-login2">
                <h5 class="title-footer">Accéder à votre espace personnel: </h5>
                <p> Si vous avez des difficultés à vous connecter, contacter le 0800 152 152</p>
            </div>
            <img src="assets/images/logo.png" alt="logo" class="logo-footer-login>
            

        </div>
        <HR class="footer-bottom"></HR>
        <p class="credits">© Marlène PINAUD - 2024 - Toute reproduction interdite - Mentions légales</p>
    </footer>
  </body>
</html>
