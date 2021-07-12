<?php 
echo "x=5 et y='5'<hr>";
$x = 5;
$y='5';
if ($x == $y)
echo "x == y ? vrai (égalité des valeurs, typage faible)<br>";
if ($x === $y)
echo "x === y ? egalite valeur et type<br>";
else
echo "x === y ? faux: x et y sont pas de même type et valeur, une chaine et un entier.<br>";
$z=5;
if ($x === $z)
echo "X ===y avec y=5: vrai -> egalite valeur et type<br>";
?>