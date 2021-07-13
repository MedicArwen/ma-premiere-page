<!DOCTYPE html>
<html>
<body>
/*
exercice 2:
<ul>
<li>créer une variable nombre contenant un nombre (un entier naturel positif supérieur à 0</li>
<li>un test (IF) vérifiant que le nombre est supérieur à 1</li>
<li>créer la boucle pour calculer factorielle de $nombre</li>
<li>ecrire la phrase "factorielle($nombre)=..."</li>

</ul>
<?php
$nombre = 4;
if($nombre > 0)
{
	$factorielle = 1;
	for($x = 1;$x <= $nombre;$x++)
    {
    	echo "$x";
        $factorielle = $factorielle* $x;
        if ($x < $nombre)
        	echo " x ";
        else
        	echo " = ";
        
    }
    echo $factorielle;
}
else
{
	echo "ERREUR: le nombre est inférieur à 1";
}
?>

</body>
</html>
