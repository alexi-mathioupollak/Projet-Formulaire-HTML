<!-- Code PHP pour la/les sessions -->
<!-- // La fonction session_start() permet de demarrer une session -->
<?php session_start();
    // var_dump($_SESSION);
    // On nettoie et on detruit une session
    // session_unset();
    // session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- <title>page index</title> -->
    <link rel="stylesheet" href="index.css" media="screen" type="text/css" />
</head>
<body>
    <!-- Partie de session -->
    <h3>Bienvenue sur votre profil</h2>

    <div class="session">
        <?php include 'includes/session.php';?> 
    </div>

    <h3>Login</h3>
    <!-- Partie Connexion -->
    <form method="post">
        <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required> <br>
        <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required> <br>
        <input type="submit" name="formlogin" id="formlogin" value="Se connecter">
    </form>

    <?php include 'includes/connexion.php'; ?>


    <!-- Partie Inscription -->
    <h3>Formulaire d'inscription</h3>
    <form method="post">
        <label id="pres">Créer votre Compte FRAJ</label><br><br>
        <div class="nom_pre">
            <input type="text" name="nom" id="nom" placeholder="Votre Nom" required/><br>
            <input type="text" name="prenom" id="prenom" placeholder="Votre Prénom" required/><br>
        </div>
        <input type="email" name="semail" id="semail" placeholder="Votre Email" required> <br>
        <input type="password" name="password" id="password" placeholder="Votre Mot de passe" required> <br>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirmez votre Mot de passe" required> <br>
        <input type="submit" name="formsend" id="formsend" value="S'inscrire">
    </form>

    <?php include 'includes/inscription.php'; ?>



</body>
</html>
