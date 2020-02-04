<body>
	<div class="row">
        <?php

        foreach ($tab as $t){

		echo'<div class="col3">';
            echo'<span style="font-size:30px;cursor:pointer" onclick="openNav()">';


			echo '<div class="card">';
				echo '<div class="cardImage">';
				echo '</div>';

				echo '<div class="cardContainer">'."\n";
  					      echo 'ID du Nain :'.$t->getAttribut('id'). '<br>'.'Nom : '.$t->getAttribut('nom'). '<br>'.
       					 'Taille du nain :' .$t->getAttribut('taille').'cm'. '<br>'.'Mine n° : '.$t->getAttribut('mine_id');

				echo'</div>';
			echo'</div>';

		echo'</div>';}?>

	</div>



</body>


