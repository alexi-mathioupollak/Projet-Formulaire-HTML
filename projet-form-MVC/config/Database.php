<?php

$host = "webinfo";
$dbname = "rivalsf";
$password = "tartiflette$";
$username = "rivalsf";

try {  
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    
  	} 
  catch (PDOException $e) {
  
    die("Probleme SQL $dbname :" . $e->getMessage());
    
  }

?>