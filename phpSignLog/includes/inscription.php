
<!-- Code PHP pour l'inscription -->
<?php 
        //La fonction isset() permet de determiner si une variable est déclaré et non null
        if(isset($_POST['formsend'])){

            extract($_POST);

            // Verifiation que les champs obligatoires sont remplis ou non-nuls
            if( !empty($password) && !empty($cpassword) && !empty($nom) && !empty($prenom) && !empty($semail)){

                // Verification que la valeur de $cpassword est la meme que $password
                // Soit on verifie que l'utilisateur a bien confirmé son mdp
                if ($password == $cpassword){  
                    
                    include 'database.php';
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
                        $requeteI = $dataB->prepare("INSERT INTO users(nom, prenom, email, password) VALUES(:nom, :prenom, :email, :password)");

                        $requeteI->execute([
                            'nom' => $nom,
                            'prenom' => $prenom,
                            'email' => $semail,
                            'password' => $password,
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