<?php
// solution classique
for($ligne = 1;$ligne <=5; $ligne++)
{
    for($colonne =1; $colonne <= 5; $colonne++)
    {
        echo str_pad($ligne*$colonne,4,"_", STR_PAD_LEFT);
    }
    echo "<br>";
}
echo "<hr>";
// solution Logan: une multiplication est une addition !
for($ligne = 1;$ligne <=5; $ligne++)
{
    echo str_pad($ligne,4,"_", STR_PAD_LEFT);
    $somme = $ligne;
    for($colonne =1; $colonne <= 4; $colonne++)
    {
        $somme+=$ligne;
        echo str_pad($somme,4,"_", STR_PAD_LEFT);
        
    }
    echo "<br>";
}
echo "<hr>";
// solution justine: une table pour la multiplication
$table = [1,2,3,4,5];
for ($ligne = 1; $ligne <=5; $ligne++)
{
    foreach($table as $element)
    {
        echo str_pad($element*$ligne,4,"_", STR_PAD_LEFT);
    }
    echo "<br>";
}
?>