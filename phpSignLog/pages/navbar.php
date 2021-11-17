
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- <title>page index</title> -->
    <link rel="stylesheet" href="index.css" media="screen" type="text/css" />
</head>
<body>

	<?php 

	if (isset($_SESSION['email'])) { ?>
	
	<nav class="menu-nav">
		<ul>
			<li class="btn">
				<a href="navbarUser.php">Accueil</a>
			</li>
			<li class="btn">
				<a href="sessionP.php">Compte</a>
			</li>
			<li class="btn">
				<a href="../includes/logout.php">Se Déconnecter</a>
			</li>
		
		</ul>
	</nav>
	

<?php } else { ?>


	<nav class="menu-nav">
		<ul>
			<li class="btn">
				<a href="navbarVisitor.php">Accueil</a>
			</li>
			<li class="btn">
				<a href="signupP.php">Inscription</a>
			</li>
			<li class="btn">
				<a href="loginP.php">Connexion</a>
			</li>
		
		</ul>
	</nav>

<?php } ?>

</body>