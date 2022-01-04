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

}
?>