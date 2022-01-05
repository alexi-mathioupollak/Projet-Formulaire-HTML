<?php

$ROOT_FOLDER = __DIR__;
$DS = DIRECTORY_SEPARATOR;
require_once $ROOT_FOLDER . $DS . '..' . $DS . 'lib' . $DS . 'File.php';

require_once File::build_path(array("model", "ModelGenerator.php"));


class ControllerGenerator {

    public static function generator() {
        $controller = 'generator';
        $view = 'generator';
        $pagetitle = 'Generator';
        require File::build_path(array("view", "view.php"));
    }

    public static function save() {
        ModelGenerator::save($_SESSION['id'], $_POST['content']);
        $controller = 'generator';
        $view = 'generator';
        $pagetitle = 'Generator';
        require File::build_path(array("view", "view.php"));
    }

    public static function readAllForms() {
        $tab_f = ModelGenerator::getAllForms($_SESSION['id']);     //appel au modèle pour gerer la BD

        $controller = 'generator';
        $view = 'list';
        $pagetitle = 'Liste des formulaires';
        require File::build_path(array("view", "view.php"));
    }

    public static function readForm() {
        $controller = 'generator';
        $view = 'generator';
        $pagetitle = 'Generator';
        require File::build_path(array("view", "view.php"));
    }

}
?>