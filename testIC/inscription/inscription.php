


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="inscription.css" media="screen" type="text/css" />
</head>
<body>
    <h3>Formulaire d'inscription</h3>
    <!-- formulaire d'inscription -->
    <form method="post">
        <div class="formI">
            <label for="nom">Nom</label>
            <input type="text" id="nom" placeholder="Votre nom" required/><br>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" placeholder="Votre prénom" required/><br>

            <label>Email </label><!--<br> -->
            <input type="email" name="email" id="email" placeholder="Votre email" required> <br>

            <label>Mot de passe </label><!--<br> -->
            <input type="password" name="password" id="password" placeholder="Votre mot de passe" required> <br>

            <label>Confirmation</label><!--<br> -->
            <input type="cpassword" name="cpassword" id="cpassword" placeholder="Confirmez" required> <br>

            <input type="submit" name="form_send" id="form_send" value="S'inscrire">
        </div>
    </form>

    <!-- script php -->
    <?php
        if (isset($_POST['form_send'])){
            
        }
    ?>

</body>
</html>