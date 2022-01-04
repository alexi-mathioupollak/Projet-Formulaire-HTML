<?php
session_name('projet');
session_start();

require_once File::build_path(array("controller", "ControllerGenerator.php"));


if (!isset($_GET['action'])) {
    $controller = 'accueil';
    $view = 'home';
    $pagetitle = 'Accueil';
    require File::build_path(array("view", "view.php"));   
}
?>
