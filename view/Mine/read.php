

<body>
<div class="row">
    <h1> Liste des Mines Actives</h1>
    <?php

    foreach ($tab as $t){

        echo '<div class="col s12 m6">';
        echo ' <div class="card blue-grey darken-1">';
        echo ' <div class="card-content white-text">';
        echo ' <span class="card-title">'. 'Mine '.  $t->getAttribut('nom') .  '</span>';
        echo 'ID de la Mine : '.$t->getAttribut('id'). '<br>'.'Nom de la Mine : '.$t->getAttribut('nom'). '<br>'.'Profondeur de la mine : ' .$t->getAttribut('profondeur').' Mètres';
        echo '</div>';

        echo '</div>';
        echo '</div>';


    }?>

</div>



</body>



