<?php

$ROOT_FOLDER = __DIR__;
$DS = DIRECTORY_SEPARATOR;
require_once $ROOT_FOLDER . $DS . '..' . $DS . 'lib' . $DS . 'File.php';

require_once File::build_path(array("model","Model.php"));


class ModelGenerator {

	public static function save($idUser, $content) {
        $insert_form = "INSERT INTO p__form(idUser, contenu) VALUES (:idUser, :contenu)";

        $req_prep = Model::getPDO()->prepare($insert_form);
        $req_prep->execute([
            "idUser" => $idUser,
            "contenu" => $content
        ]);
    }

}

?>

