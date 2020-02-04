<?php
require_once File::build_path(array('Model','Model.php'));

class ModelMine extends Model {
    private $idMine;
    private $nomMine;
    private $profondeurMine;

    public function setAttribut($attribut, $valeur){
        $this->$attribut = $valeur;
    }


    public function getAttribut($attribut)
    {
        return $this->$attribut;
    }

    public function getAllMine(){
        $sql="SELECT * FROM Mine";

        $rep = Model::$pdo->query($sql);

        $rep->setFetchMode(PDO::FETCH_CLASS,'ModelMine');

        return $rep->fetchAll();
    }
}
