

 <body>
 <div class="row">
     <h1> Liste des employés des Mines</h1>
     <?php

     foreach ($tab as $t){


    echo '<div class="col s12 m6">';
     echo ' <div class="card blue-grey darken-1">';
       echo ' <div class="card-content white-text">';
         echo ' <span class="card-title">'. 'Nain '.  $t->getAttribut('nom') .  '</span>';
         echo 'ID du Nain :'.$t->getAttribut('id'). '<br>'.'Nom : '.$t->getAttribut('nom'). '<br>'.'Taille du nain :' .$t->getAttribut('taille').'cm'. '<br>'.'Mine n° : '.$t->getAttribut('mine_id');
        echo '</div>';

      echo '</div>';
    echo '</div>';


      }?>

 </div>



 </body>



