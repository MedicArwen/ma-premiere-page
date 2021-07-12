<?php

//exercice factoriel
    $nombreFactorise = 4;
    $resultat = 1;
    for ( $i=1; $i<=$nombreFactorise; $i++){
        $resultat = $resultat * $i;
        echo ("<p>Étape n°".$i." résulat =".$resultat."</p>");
    }
    echo ("<p>for: Le résultat final est de ".$resultat."</p>");
    //solution simple

    // WHILE
    $nombreFactorise = 4;
    $resultat = 1;
   // for ( $i=1; $i<=$nombreFactorise; $i++)
   $i=1;
   while ($i<=4)
    {
        $resultat = $resultat * $i;
        echo ("<p>Étape n°".$i." résulat =".$resultat."</p>");
        $i++;
    }
    echo ("<p>while: Le résultat final est de ".$resultat."</p>");

?>
