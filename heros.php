
<html>
<head>
<title> heros </title>
</head>
<body>
<?php
include 'fonctions_heros.php';

echo "<ul>";
foreach($listeHeros as $hero)
{
    echo afficherHeros($hero);
}
echo "</ul>"
?>
</body>
</html>