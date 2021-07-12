<?php
function supprimeDoublon($pTableau)
{
    $retourneText="<ul>";
    $resultat = array_unique($pTableau);
    foreach($resultat as $item)
        $retourneText.="<li>".$item."</li>";
    $retourneText .= "</ul>";
    return $retourneText;
}

$tableau = [1,2,2,3,3,3,4,5,5];
$result= supprimeDoublon($tableau);
echo $result;
?>