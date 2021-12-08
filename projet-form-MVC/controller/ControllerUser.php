<?php
require_once File::build_path(array("model","ModelUser.php")); // chargement du modèle

class ControllerUser {

    public static function accueil() {
        $controller='user';
        $view='accueil';
        $pagetitle='FRAJ-Form';
        require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
    }


    public static function register() {
        $pagetitle = 'FRAJ-Form - Inscription';
        $controller='user';
        $view='register';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
    }

    public static function login() {
        $pagetitle = 'FRAJ-Form - Connexion';
        $controller='user';
        $view='login';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }


      public static function profil() {
        $pagetitle = 'FRAJ-Form - Profil';
        $controller='user';
        $view='login';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }

    public static function logout() {
        $pagetitle = 'FRAJ-Form';
        $controller='user';
        $view='logout';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }

   public static function resetmdp() {
       $controller='user';
       $view='resetpw';
       $pagetitle='FRAJ-Form - Reset Password';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }

    public static function resetpseudo() {
        $controller='user';
        $view='resetlogin';
        $pagetitle='FRAJ-Form - Change Login';
        require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
    }

    public static function resetemail() {
        $controller='user';
        $view='resetemail';
        $pagetitle='FRAJ-Form - Reset Email';
        require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
    }


   public static function redirectionpw() {
       $controller='user';
       $view='redirectionpw';
       $pagetitle='FRAJ-Form';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }





}
?>
