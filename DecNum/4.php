<!DOCTYPE html>
<html>
<body>
/*
exercice 4:
<ul>
<li>créer un tableau de stagiaires</li>
<li>afficher le nombre de stagiaires</li>
<li>afficher tous les stagiaires</li>

</ul>
<?php
/*créer un tableau de stagiaires*/
$tableau = ['Mehdi','Alexis','Dimitri','Cassandra','Valentine','Alexander'];
var_dump($tableau);
echo " le numero 2 est : $tableau[2]</br>";

/*afficher le nombre de stagiaires*/
$nombre = count($tableau);
echo " il y a $nombre stagiaires</br>";

/*afficher tous les stagiaires*/
//for($x=0;$x<6;$x++)
for($x=0;$x<$nombre;$x++)
{
	echo " <li>le numero $x est : $tableau[$x]</li>";
}

?>
</body>
</html>
