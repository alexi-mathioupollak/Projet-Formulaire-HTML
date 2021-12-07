

<?php include 'navbar.php'; ?>

<!-- Partie de session -->
<h3>Bienvenue sur votre profil</h3>

<div class="session">
    <?php include '../includes/session.php';?> 
</div>
<form method="post">
    <input type="button" name="formlogout" id="formlogout" value="Se Déconnecter">
</form>
