<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Les Mines de Pepsia</title>
        <link rel="stylesheet" type="text/css" href="./view/Css/cssNain.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>



    <?php
    $filepath = File::build_path(array("view", $controller, "$view.php"));
    require $filepath;
    ?>

    <div class="footer" >
        <a href="./index.php?controller=Nain&action=read">NAIN</a>
    </div>


</html>