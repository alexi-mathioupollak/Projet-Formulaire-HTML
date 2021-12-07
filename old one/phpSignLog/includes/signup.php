
<!--- Code PHP pour l'inscription --->
<?php
        //La fonction isset() permet de determiner si une variable est déclaré et non null
        if(isset($_POST['formsend'])){

            extract($_POST);

	    // Verifie si les champs obligatoires sont remplis ou non-nuls
            if( !empty($password) && !empty($cpassword) && !empty($nom) && !empty($prenom) && !empty($semail)){
		//echo "test apres if : felicitations ! Vous etes entrés !";

                // Verification que la valeur de $cpassword est la meme que $password
                // Soit on verifie que l'utilisateur a bien confirmé son mdp
                if ($password == $cpassword){
		    //echo "Mot de passe confirmé !";
                    include 'database.php';
                    global $dataB;  // Variable pour faire le lien avec la base de données

		    // Verification que l'email n'a pas été déjà utilisé pour un autre compte
                    $eVerif = $dataB->prepare("SELECT * FROM user WHERE email = :email");
                    $eVerif->execute([
                       	'email' => $semail
                    ]);

                    $result = $eVerif->rowCount();
		    //echo "<br/>email utilisé ?"; echo $result; echo "<br/>";

                    // Email valide => creation du compte et insertion dans la BD
                    if($result == 0){
                        // Requete pour l'inscription : INSERT INTO 'nomDeTable'(nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password);
                        $requeteI = $dataB->prepare("INSERT INTO user(nom, prenom, email, password) VALUES(:nom, :prenom, :email, :password)");

                        $requeteI->execute([
                            'nom' => $nom,
                            'prenom' => $prenom,
                            'email' => $semail,
                            'password' => $password,
                        ]);
                        echo "Le compte a bien été créé";
                    } else {
			echo "Email déjà utilisé !";
                    }
		}
            } else {
		echo "<p>Les champs obligatoires ne sont pas tous remplies</p> ";
            }
        }
    ?>
