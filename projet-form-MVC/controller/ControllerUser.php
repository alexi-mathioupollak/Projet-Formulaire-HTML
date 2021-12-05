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

    public static function deconnexion() {
        $pagetitle = 'FRAJ-Form';
        $controller='user';
        $view='deconnexion';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }

   public static function resetmdp() {
       $controller='user';
       $view='resetmdp';
       $pagetitle='FRAJ-Form - Réinitialiser son mot de passe';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }

    public static function resetpseudo() {
        $controller='user';
        $view='resetpseudo';
        $pagetitle='FRAJ-Form - Changer de pseudo';
        require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
    }

    public static function resetemail() {
        $controller='user';
        $view='resetemail';
        $pagetitle='FRAJ-Form - Changer de email';
        require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
    }


   public static function redirectionmdp() {
       $controller='user';
       $view='redirectionmdp';
       $pagetitle='FRAJ-Form';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }





}
?>
