<?php

    define('HOST', 'localhost');
    define('BD_NAME','siteHTMLform');
    define('USER','rivalsf');
    define('PASS','tartiflette$');

    try {
        $dataB = new PDO("mysql:host" . HOST . ";db_name=" . DB_NAME, USER, PASS);
        $dataB->setAttribute(PDO::AFTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo $e;
    }

?>