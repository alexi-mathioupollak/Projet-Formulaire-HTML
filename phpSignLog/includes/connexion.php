
<?php

	if(isset($_POST['formlogin'])){

		extract($_POST);
		include 'database.php';
		global $dataB;

        	if( !empty($lpassword) && !empty($lemail)){

            		$rVerifE = $dataB->prepare("SELECT * FROM users WHERE email = :email");

            		$rVerifE->execute([
				'email' => $lemail
			]);

            		$result = $rVerifE->fetch();

            		// var_dump($result);

			 if ($result == true){
        	        	$lpassword = $result['password'];
             		 	if (password_verify($lpassword, $result['password'])){
                    			echo "Mot correct <br/> Connexion en cours...";

      			                $_SESSION['email'] = $result['email'];
                   		 	$_SESSION['nom'] = $result['nom'];
                    			$_SESSION['prenom'] = $result['prenom'];

                		} else {
                    			echo "Le mot de passe n'est pas valide ";
                		}

            		} else {
                		echo "L'email " . $lemail . "n'existe pas ou n'est associé à aucun compte";
            		}
        	} else {
           		 echo "Veuillez compléter tous les champs";
        	}
    	}

?>
