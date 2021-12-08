<?php
session_name('fraj-form');
session_start();
session_destroy();

header('Location: ./index.php');
exit;


?>