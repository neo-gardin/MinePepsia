<?php
require_once File::build_path(array('Model','ModelMine.php'));

class ControllerMine{

    public static function read(){
        $tab=ModelMine::getAllMine();


         foreach ($tab as $t) {


                 $taille[] = ModelMine::getTailleMoyenneNain($t->getAttribut('id'));


    }




        $controller='Mine';
        $view = 'read';
        require File::build_path(array("view","view.php"));
    }
}