<?php
    session_name('fraj-form');
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/CSS/main.css">
    <link rel="stylesheet" href="assets/CSS/footer.css">
    <link rel="stylesheet" href="assets/CSS/navbar.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/JS/script.js"></script>
    <title><?php echo $pagetitle ?></title>
</head>
<header>
    <div id="titre_et_nav">
        <div class="princ_title">
            <h1 id="titre_principal">FRAJ-Form</h1>
        </div>
        <nav class="navbar">
            <ul class="menu">
                <?php
                if(isset($_SESSION['id'])){
                ?>
                <li><a href="./index.php?action=home" draggable="false">HOME</a></li>
                <li><a href="./index.php?action=generator" draggable="false">GENERATOR</a></li>
                <li><a href="./index.php?action=profil">PROFIL</a></li>
                <li><a href="./index.php?action=logout">LOG OUT</a></li>
                <?php
            }else{

            ?>
                <li><a href="./index.php?action=home" draggable="false">HOME</a></li>
                <li><a href="./index.php?action=generator" draggable="false">GENERATOR</a></li>
                <li><a href="./index.php?action=login">LOG IN</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
</header>
<body>
        <div class="content">
                <?php
                require File::build_path(array("view", $controller, "$view.php"));
                ?>
            
        </div>    
            <footer class="page-footer dark">
        <div class="footer-copyright">
                    <a href="./assets/img/meme_easteregg.jpg"><p>© 2021 FRAJ-Form</p></a>
        </div>
    </footer>
</body>

</html>
