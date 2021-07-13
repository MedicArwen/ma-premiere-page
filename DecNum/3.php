<!DOCTYPE html>
<html>
<body>
/*
exercice 3:
<ul>
<li>créer une variable $nombre qui prend la valeur de 10;</li>
<li>créer une boucle pour afficher les nombres de 1 à $nombre ($x++)</li>

<li>créer une boucle pour afficher les nombres de $nombre à 1 ($x--)</li>

</ul>
<?php
$nombre = 10;
//for($x=1;$x<=$nombre;$x++)
/*créer une boucle pour afficher les nombres de 1 à $nombre*/
/* for (valeur initiale; condition pour continuer a boucler;incrémentation/décrémentation)*/
echo "<hr>créer une boucle pour afficher les nombres de 1 à $nombre";
for($x=1;$x<=$nombre;$x=$x+1)
{
	echo "<li>$x</li>";

   }
echo "<hr>créer une boucle pour afficher les nombres de $nombre à 1";
/*créer une boucle pour afficher les nombres de $nombre à 1*/
for($x=10;$x>0;$x=$x-1)
{
	echo "<li>$x</li>";

   }
?>
</body>
</html>
