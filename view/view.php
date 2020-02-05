<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Les Mines de Pepsia</title>
        <link rel="stylesheet" type="text/css" href="./view/Css/materialize.css">
        <link rel="stylesheet" type="text/css" href="./view/Css/cssMenu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo right">Mine Pepsia</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="./index.php?controller=Nain&action=read">Nain</a></li>
                    <li><a href="./index.php?controller=Mine&action=read" >Mine</a></li>
                </ul>
            </div>
        </nav>

    </head>

    <nav



    <?php
    $filepath = File::build_path(array("view", $controller, "$view.php"));
    require $filepath;
    ?>

    <footer class="page-footer">
        <div class="container">

        </div>
    </footer>


</html>