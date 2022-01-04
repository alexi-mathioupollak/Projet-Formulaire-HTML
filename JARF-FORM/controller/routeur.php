<?php
session_name('projet');
session_start();

require_once File::build_path(array("controller", "ControllerGenerator.php"));


if (!isset($_GET['action'])) {
    $controller = 'accueil';
    $view = 'home';
    $pagetitle = 'Accueil';
    require File::build_path(array("view", "view.php"));   
} else {
        $action = $_GET['action'];


    if (!isset($_GET['controller'])) {
        $controller = 'generator';
    } else {
        $controller = $_GET['controller'];
    }

    $controller_class = 'Controller' . ucfirst($controller);

    if (class_exists($controller_class)) {
        $allMethodsController = get_class_methods($controller_class);
        if (in_array($action, $allMethodsController)) {
            $controller_class::$action();
        } else {
            ControllerUser::error();
        } 
    } else {
        ControllerUser::error();
    }
}
?>
