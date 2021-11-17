<?php   
session_start(); 
session_unset();
session_destroy(); //destroy the session
echo "Deconnexion en cous...";
echo "Redicrection vers la Homepage";
header("Location: ../pages/home.php"); //to redirect back to "index.php" after logging out
exit();
?>