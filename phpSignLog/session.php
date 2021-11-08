
<?php ?>
<?php
    if(isset($_SESSION['email']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {

        echo "<p>Votre Email : "; echo $_SESSION['email']; echo " </p>";

        echo "<p>Votre Nom : "; echo $_SESSION['nom'];  echo " </p>";

        echo "<p>Votre Prenom : ";echo $_SESSION['prenom'];  echo " </p>";
        
    } else {
        echo "Veuillez vous connecter à votre compte (ou créez en un compte)";
    }
?>