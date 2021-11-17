

    <?php include 'navbar.php'; ?>

    <!-- Partie Connexion -->
    <h3>Login</h3>
    <form method="post" action="sessionP.php" >
        <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required> <br>
        <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required> <br>
        <input type="submit" name="formlogin" id="formlogin" value="Se connecter" >
    </form>

    <?php include '../includes/login.php'; ?>

