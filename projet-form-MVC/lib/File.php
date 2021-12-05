<?php

class File {
    
public static function build_path($path_array) {
    $DS = DIRECTORY_SEPARATOR;
    $ROOT_FOLDER = "/home/ann2/rivalsf/public_html/Projet-Formulaire-HTML";
    return __DIR__ . $DS . ".." . $DS . join('/', $path_array);
    }
}


?>
