<?php
require_once File::build_path(array("model", "ModelForm.php"));  // chargement du modèle

class ControllerForm {

    public static function home() {
        $controller='form';
        $view='home';
        $pagetitle='FRAJ-Form - Homepage';
        require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
    }

    public static function download() {
        $controller='form';
        $view='home';
        $pagetitle='FRAJ-Form - Homepage';
        require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
    }



}


?>