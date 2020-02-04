<?php

require_once (File::build_path(array('controller','ControllerNain.php')));
require_once (File::build_path(array('controller','ControllerMine.php')));

if (empty($_GET["action"])) {
    ControllerNain::read();
}
else {
    $controller = $_GET["controller"];
    $action = $_GET["action"];
    $controller_action = 'Controller' . ucfirst($controller);
    $controller_action::$action();
}


?>
