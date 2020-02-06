<?php
require_once File::build_path(array('Model','Model.php'));

class ModelNain extends Model{
    private $id;
    private $nom;
    private $taille;
    private $mine_id;



    public function setAttribut($attribut, $valeur){
        $this->$attribut = $valeur;
    }


    public function getAttribut($attribut)
    {
        return $this->$attribut;
    }


    public function __construct($id =NULL,$nom =NULL,$taille =NULL,$mine_id =NULL)
    {
        if(is_null($id) && !is_null($nom) && !is_null($taille) && !is_null($mine_id)){
            $this->id=Null;
            $this->nom=$nom;
            $this->taille=$taille;
            $this->mine_id=$mine_id;

        }
    }





    static public  function getAllNain(){

        $sql="SELECT * FROM Nain";

        $rep = Model::$pdo->query($sql);



        $rep->setFetchMode(PDO::FETCH_CLASS,'ModelNain');

        return $rep->fetchAll();
    }








}