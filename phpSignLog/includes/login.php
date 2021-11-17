
<?php

	echo "<br/>*** Connection.php ***<br/>";

	if(isset($_POST['formlogin'])){

		extract($_POST);
		include 'database.php';
		global $dataB;

		//echo "<br/>_Before if Empty()";
		//echo "</br>email empty() ?"; echo !empty($email);
		//echo "</br>password empty() ?<br/> "; echo !empty($password);

		if(!empty($lpassword) && !empty($lemail)){
			//echo "<br/>__Entry if Empty()";

            $rVerifE = $dataB->prepare("SELECT * FROM user WHERE email = :email");

            $rVerifE->execute([
				'email' => $lemail
			]);

            $result = $rVerifE->fetch();

            //var_dump($result);

			//echo "<br/>__Before if(result == true)";

			if ($result == true){
				//echo "<br/>___Entry if(result == true)";

        	   	//echo $lpassword == $result['password'];
             	//if (password_verify($lpassword, $result['password'])){  //Si on  hash les password
            	if ($lpassword == $result['password']){
					echo "<br/> Mot correct <br/> Connexion en cours...";
					$_SESSION['email'] = $result['email'];
                   	$_SESSION['nom'] = $result['nom'];
                    $_SESSION['prenom'] = $result['prenom'];
					echo "<br/> Connexion reussite !";

					//header("../pages/sessionP.php");
                	
               	} else {
               			echo "Le mot de passe n'est pas valide "; 
	      		}
	      	} else {
				echo "<br/>";
                echo "L'email " . $lemail . " n'existe pas ou n'est associé à aucun compte";
           	}
    	} else {
        	echo "Veuillez compléter tous les champs";
    	}
  	}

?>
