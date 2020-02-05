<?php
require_once File::build_path(array('Model','Model.php'));

class ModelMine extends Model {
    private $id;
    private $nom;
    private $profondeur;


    public function setAttribut($attribut, $valeur){
        $this->$attribut = $valeur;
    }


    public function getAttribut($attribut)
    {
        return $this->$attribut;
    }

    public function __construct($id =NULL,$nom =NULL,$profondeur =NULL)
    {
        if(is_null($id) && !is_null($nom) && !is_null($profondeur) ){
            $this->id=Null;
            $this->nom=$nom;
            $this->profondeur=$profondeur;

        }
    }




    public static  function getAllMine(){
        $sql="SELECT * FROM Mine";

        $rep = Model::$pdo->query($sql);

        $rep->setFetchMode(PDO::FETCH_CLASS,'ModelMine');

        return $rep->fetchAll();
    }
}
