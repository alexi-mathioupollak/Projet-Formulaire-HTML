<?php
    session_name('fraj-form');
    session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $pagetitle ?></title>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container">
             <div class="collapse navbar-collapse" id="navcol-1"><a href="./index.php"><!-- <img src="./assets/img/logo.png" style="width: 385px;margin: -13px;padding: 7px;"> --></a>
                             <ul class="navbar-nav ms-auto">
                                <?php
                        if(isset($_SESSION['id'])){
                            ?>
                                <li class="nav-item"><a class="nav-link active" href="./index.php">Accueil</a></li>
                                <li class="nav-item"><a class="nav-link active" href="./index.php?action=profil">Profil</a></li>
                                <li class="nav-item"><a class="nav-link active" href="./index.php?action=deconnexion">Déconnexion</a></li>

                            <?php
                        }else{
                            ?>
                            <li class="nav-item"><a class="nav-link active" href="./index.php">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link active" href="./index.php?action=login">Connexion</a></li>

                            <?php
                        }
                        ?>
                </ul>
            </div>
        </div>
    </nav>
        <div class="content">
                <?php

                $filepath = File::build_path(array("view", $controller, "$view.php"));
                require $filepath;

                ?>
            
        </div>    
            <footer class="page-footer dark">
        <div class="footer-copyright">
                    <a href="./assets/img/meme_easteregg.jpg"><p>© 2021 FRAJ-Form</p></a>
        </div>
    </footer>
</body>

</html>
