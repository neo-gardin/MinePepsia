<?php
require_once File::build_path(array('Model','ModelMine.php'));

class ControllerMine{

    public static function read(){
        $tab=ModelMine::getAllMine();
        $controller='Mine';
        $view = 'read';
        require File::build_path(array("view","view.php"));
    }
}