
<!-- Code PHP pour l'inscription -->
<?php
        //La fonction isset() permet de determiner si une variable est déclaré et non null
        if(isset($_POST['formsend'])){

            extract($_POST);

            // Verifiation que les champs obligatoires sont remplis ou non-nuls
	    echo "test avant if";
	    echo "</br>verif des champs :";
	    echo "</br>password empty() ?   "; echo !empty($password);
	    echo "</br>confirm password empty() ?   "; echo !empty($cpassword);
	    echo "</br>nom empty() ?   "; echo !empty($nom);
	    echo "</br>prenom empty() ?   "; echo !empty($prenom);
	    echo "</br>email empty() ?   "; echo !empty($email);

            if( !empty($password) && !empty($cpassword) && !empty($nom) && !empty($prenom) && !empty($semail)){
		echo "test apres if : felicitations ! Vous etes entrés !";

                // Verification que la valeur de $cpassword est la meme que $password
                // Soit on verifie que l'utilisateur a bien confirmé son mdp
                if ($password == $cpassword){
		    echo "mot de passe confirmé !";
                    include 'database.php';
                    global $dataB;

                    // Requete de sauvegarde de donnees :
                    $saveD = $dataB->prepare("SELECT * FROM user WHERE email = :email");
		    $saveD->execute([
                        'email' => $semail
                    ]);

		    $tab_u = $saveD->fetchAll();
		    var_dump($tab_u);

                    // Verification que l'email n'a pas été déjà utilisé pour un autre compte
		    try {
                    	$eVerif = $dataB->prepare("DELETE * FROM user WHERE email = :email");

                    	$eVerif->execute([
                        	'email' => $semail
                    	]);
			echo "<br/>(enter in try)<br/>";
		    } catch(PDOException $e){
		        echo $e;
		    }

                    if (isset($eVerif)) {
			$result = $eVerif->rowCount();
		    } else { $result = 0; }
	            /*
		    $result = $dataB->prepare("SELECT COUNT(*) FROM user WHERE email = :email");

                    $result->execute([
                        'email' => $semail
                    ]);
		    */

                    // Email valide et non-utilisé auparavant
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
		    $requeteSU = $dataB->prepare("INSERT INTO user VALUES ($tab_u[1],$tab_u[2],$tab_u[3],$tab_[4])");
                    $requeteSU->execute();
                }

                // if(password_verify('vinaigrette22', $password)){
                //     echo "Mot de passe correcte"
                // } else {
                //     echo "Mot de passe incorrect";
                // }
            } else {
		echo "<p>Les champs obligatoires ne sont pas tous remplies</p> ";
            }
        }
    ?>
