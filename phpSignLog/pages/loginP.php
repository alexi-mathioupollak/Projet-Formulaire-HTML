

    <?php include 'navbarVisitor.php'; ?>

    <!-- Partie Connexion -->
    <h3>Login</h3>
    <form method="post">
        <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required> <br>
        <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required> <br>
        <input type="submit" name="formlogin" id="formlogin" value="Se connecter" action="./sessionP.php">
    </form>

    <?php include '../includes/login.php'; ?>

