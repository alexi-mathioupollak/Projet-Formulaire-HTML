<?php

    define('HOST', 'webinfo');
    define('DB_NAME','rivalsf');
    define('USER','rivalsf');
    define('PASS','tartiflette$');

    try {
        $dataB = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $dataB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "<br/>[ Connection to Database ]<br/>";
	//echo "<br/>br/>";
    } catch(PDOException $e){
        echo $e;
	//->getMessage();
    }

?>
