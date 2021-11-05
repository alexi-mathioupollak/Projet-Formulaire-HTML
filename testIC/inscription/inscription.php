<!-- Code PHP pour la/les sessions -->
<!-- // La fonction session_start() permet de demarrer une session -->
<?php session_start(); ?>

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
        <label id="pres">Créer votre Compte FRAJ</label><br><br>       
        <div class="nom_pre">
            <input type="text" id="nom" placeholder="Votre Nom" required/><br>
            <input type="text" id="prenom" placeholder="Votre Prénom" required/><br>
        </div>
        <input type="email" name="semail" id="semail" placeholder="Votre Email" required> <br>
        <input type="passw" name="passw" id="passw" placeholder="Votre Mot de passe" required> <br>
        <input type="cpassword" name="cpassword" id="cpassword" placeholder="Confirmez votre Mot de passe" required> <br>
        <input type="submit" name="formsend" id="formsend" value="S'inscrire">
    </form>

    <!-- Code PHP pour l'inscription -->
    <?php 
        //La fonction isset() permet de determiner si une variable est déclaré et non null
        if(isset($_POST['formsend'])){

            extract($_POST);

            // Verifiation que les champs obligatoires sont remplis ou non-nuls
            if( !empty($passw) && !empty($cpassword) && !empty($nom) && !empty($prenom) && !empty($email)){

                // Verification que la valeur de $cpassword est la meme que $password
                // Soit on verifie que l'utilisateur a bien confirmé son mdp
                if ($passw == $cpassword){  
                    
                    include 'includes/database.php';
                    global $dataB;

                    // Verification que l'email n'a pas été déjà utilisé pour un autre compte
                    $eVerif = $dataB->prepare("SELECT * FROM users WHERE email = :email");

                    $eVerif->execute([
                        'email' => $semail
                    ])
                    
                    $result = $eVerif->rowCount();
                    
                    // Email valide et non-utilisé auparavant
                    if($result == 0){
                        // Requete pour l'inscription : INSERT INTO 'nomDeTable'(nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password);
                        $requeteI = $dataB->prepare("INSERT INTO users(nom, prenom, email, passw) VALUES(:nom, :prenom, :email, :passw)");

                        $requeteI->execute([
                            'nom' => $nom,
                            'prenom' => $prenom,
                            'email' => $semail,
                            'passw' => $passw,
                        ])
                        echo "Le compte a bien été crée";
                    } else {
                        echo "Email déjà utilisé !"
                    }
                }
                
                // if(password_verify('vinaigrette22', $password)){
                //     echo "Mot de passe correcte"
                // } else {
                //     echo "Mot de passe incorrect";
                // }
                
            } else {
                echo "Les champs obligatoires ne sont pas tous remplies ";
            }
        }
    ?>

    
    

</body>
</html>


<!--
    $options = [ 
        'cost' => 12,
    ];

    //Permet de crypter le mdp
    $haspass = password_hash($password, PASSWORD_BCRYPT, $options);  
    
--->
<!-- 
    <form method="post">
        <label id="pres">Créer votre Compte FRAJ</label>
        <br><br>       
        <div class="nom_pre">
            <label for="nom">Nom</label>
            <input type="text" id="nom" placeholder="Votre Nom" required/><br>

            <label for="prenom">Prénom</label> 
            <input type="text" id="prenom" placeholder="Votre Prénom" required/><br>
        </div>
        <label>Email </label><br> 
        <input type="email" name="semail" id="semail" placeholder="Votre Email" required> <br>

        <label>Mot de passe </label><br> 
        <input type="passw" name="passw" id="passw" placeholder="Votre Mot de passe" required> <br>

        <label>Confirmation</label><br> 
        <input type="cpassword" name="cpassword" id="cpassword" placeholder="Confirmez votre Mot de passe" required> <br>

        <input type="submit" name="formsend" id="formsend" value="S'inscrire">
    </form>
 -->