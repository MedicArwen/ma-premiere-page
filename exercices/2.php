<?php
/** DECLARATION DES FONCTIONS */
function decompte($x)
{
    echo $x.'<br>';
    if($x >= 2){
        $x--;
        return decompte($x);
    }
}
/**DEBUT DU PROGRAMME */
$x= 10;
decompte($x);
echo "décompte fait avec x=$x";

?>