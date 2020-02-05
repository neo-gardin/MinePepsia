<?php
require_once File::build_path(array('Model','ModelNain.php'));

class ControllerNain{

    public static function read(){

        $tab=ModelNain::getAllNain();
        $controller='Nain';
        $view = 'read';
        require File::build_path(array("view","view.php"));
    }
}