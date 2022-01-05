<?php

$ROOT_FOLDER = __DIR__;
$DS = DIRECTORY_SEPARATOR;
require_once $ROOT_FOLDER . $DS . '..' . $DS . 'lib' . $DS . 'File.php';

require_once File::build_path(array("model","Model.php"));


class ModelGenerator {

	private $contenu;
	private $idForm;

	public function __construct($contenu = null, $idForm = null){
        if (!is_null($contenu) && !is_null($idForm)) {
            $this->contenu = $contenu;
			$this->idForm = $idForm;
        }
    }

	public static function save($idUser, $content) {
        $insert_form = "INSERT INTO p__form(idUser, contenu) VALUES (:idUser, :contenu)";

        $req_prep = Model::getPDO()->prepare($insert_form);
        $req_prep->execute([
            "idUser" => $idUser,
            "contenu" => $content
        ]);
    }

	public function getContenu(){
		return $this->contenu;
	}

	public function getIdForm() {
		return $this->idForm;
	}

	public static function getAllForms($idUser) {
		$rep = Model::getPDO()->query("SELECT * FROM p__form WHERE idUser = $idUser");
        $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelGenerator');
        $tab_f = $rep->fetchAll();
        return $tab_f;
	}

	public static function getFormById($idForm) {
        $sql = "SELECT * FROM p__form WHERE idForm=:idForm";
        // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "idForm" => $idForm
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);

        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelGenerator');
        $tab_f = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_f))
            return false;
        return $tab_f[0];
    }

}

?>

