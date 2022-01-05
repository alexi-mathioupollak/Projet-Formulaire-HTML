<?php

require_once File::build_path(array("config", "Conf.php"));

  if ((isset($_SESSION['id']))){ //si une session existe déja (= utilisateur connecté) on redirige vers la page d'accueil
    header('Location: ./index.php');
    exit;
  }

  
  if(!empty($_POST)){ // Si la variable "$_Post" contient des informations alors on les traites
    extract($_POST); //extrait les valeurs du form en 2 variables $email $password
    
    $ok = true;


  if (isset($_POST['connexion'])){ //test pour le formulaire "inscription"

    //htmlentites = pour éviter les injections, trim = enleve les espaces au début et a la fin
    $email = htmlentities(strtolower(trim($email)));
    $password = trim($_POST['password']);

    if(empty($email)){ //test si email est vide
      $ok = false;
      $er_email = "L'email est vide";
    }

    if(empty($password)){ //test si le password est vide
      $ok = false;
      $er_password = "Le mot de passe est vide";
    }
      
        
    $options = ['cost' => 12];  
    //$password = password_hash($password, PASSWORD_BCRYPT, $options);  //on crypte le password avec la meme clé que pour l'inscription

    $req = Model::getPDO()->prepare("SELECT password FROM p__user WHERE email = :email"); 
    $req->execute(array('email' => $email));
    $hash = $req->fetchAll();
    $hashed_pwd = $hash[0]['password'];

    //on test si les valeurs du formulaire correspondent a la bdd
    if (!password_verify($password, $hashed_pwd)) { 
      $ok = false;
      $er_email = "Le mail ou le mot de passe est incorrect";
    }

    $req = Model::getPDO()->prepare("SELECT * FROM p__user WHERE email = :email"); 
    $req->execute(array('email' => $email));
    $resultat = $req->fetchAll();

    if ($resultat[0]['nonce'] != null) {
      $ok = false;
    }

    if ($ok){
     //si tout est valide, alors on charge une session avec les attributs de la requete
      $_SESSION['id'] = $resultat[0]['idUser']; 
      $_SESSION['username'] = htmlentities($resultat[0]['username']); //htmlentities pour éviter les injections html/php
      $_SESSION['email'] = htmlentities($resultat[0]['email']);
      $_SESSION['admin'] = htmlentities($resultat[0]['isAdmin']);


      header('Location: ./index.php'); //on redirige l'utilisateur vers la page d'accueil
      exit;
    }

  }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in</title>
    <link rel="stylesheet" href="CSS/login_style.css">
</head>

<body>
    <section class="full_box_login">
        <div class="container_form_log">
            <div class="block-heading">
                <h2 class="text-info">CONNEXION</h2>
            </div>
            <form method="post" class="login_form">
              <?php
              if (isset($er_email)){ //si $er_mail n'est pas vide, alors on l'affiche
              ?>
                 <div><?= $er_email ?></div>
              <?php
                }
              ?>
                <div class="mail"><label class="label" for="email">Email</label>
                  <input class="form-control" type="email" id="email" placeholder="email" name="email" value="<?php if(isset($email)){ echo htmlentities($email); }?>" required></div>
                  <?php
                  if (isset($er_password)){ //si $er_password n'est pas vide, alors on l'affiche
                  ?>
                    <div><?= $er_password ?></div>
                  <?php
                    }
                  ?>
                  <br>
                <div class="pwd">
                  <label class="label" for="password">
                    Password
                  
                  </label>
                  <input class="form-control" type="password" id="password" placeholder="password" name="password">
                </div>
                <div class="mb-3">
                </div>
                <button class="btn_text" name="connexion" type="submit">Log in</button>
                <div>
                </div>
                <p class="under_link_reg">Pas encore inscrit ?</p>
                <a href="./index.php?controller=user&action=create" class="reg_btn">S'inscrire</a>
                <div>
                </div>
                <a href="./index.php?controller=user&action=resetpassword" class="forg_btn">Mot de passe oublié ?</a>
            </form>
        </div>
    </section>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="./assets/js/vanilla-zoom.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>


</html>