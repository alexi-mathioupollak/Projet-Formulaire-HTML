
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

    <?php include 'includes/login.php'; ?>

</body>
</html>
