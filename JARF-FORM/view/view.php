<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home_style.css">
    <title><?= $pagetitle ?></title>
</head>

<header>
    <div class="header__navbar">
        <h1 class="home__title">GenForm V2</h1>
        <nav class="navbar">
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./index.php?controller=generator&action=generator">Générateur</a></li>
                <li><a href="./index.php">Nous contacter</a></li>
                <li><a href="./index.php">À propos</a></li>
                <?php if(!isset($_SESSION['id'])) :?>
                <li><a href="./index.php?controller=user&action=create">Inscription</a></li>
                <li><a href="./index.php?controller=user&action=login">Connexion</a></li>
                <?php else: ?>
                <li><a href="">Mes formulaires</a></li>
                <li><a href="./index.php?controller=user&action=logout">Déconnexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>

    <?php
        $filepath = File::build_path(array("view", $controller, "$view.php"));
        require $filepath;
    ?>


<footer>
    <p>© J. Renaud, F. Rivals, R. Mallek, A. Mathiou-Pollak</p>
    <ul>
        <li><a href="">test</a></li>
        <li><a href="">test</a></li>
    </ul>
</footer>


</body>
</html>
