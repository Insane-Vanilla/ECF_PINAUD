<?php

    require_once __DIR__.'templates/header.php';
    require_once __DIR__.'lib/pdo.php';
    require_once __DIR__.'lib/user.php';
    require_once __DIR__.'lib/config.php';


$errors = [];

if (isset($_POST["loginUser"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

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
  $email = $_POST["email"];
  $password = $_POST["password"];

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
      <?php foreach($erros as $error) { ?>
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
  </body>
</html>
