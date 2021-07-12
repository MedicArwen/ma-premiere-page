<?php

function factorielle($pNombre) 
{ 
   if($pNombre == 0) 
      return 1;
  else 
      return $pNombre*factorielle($pNombre-1); 
}
    echo "La valeur factorielle de 5 est ".factorielle(5).".";
?>
