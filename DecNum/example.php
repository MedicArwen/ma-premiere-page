<html>
<head>
    <title> Example Php et Javascript</title>

<body>

<p id="p1"></p>
<?php
$nombre = 10;
echo "<hr>créer une boucle pour afficher les nombres de 1 à $nombre";
for($x=1;$x<=$nombre;$x=$x+1)
{
	echo "<li>$x</li>";

   }
?>


</body>
</html>
<script>
        let p1 = document.getElementById('p1');
        for(let i = 1; i<10; i++)
        {
            p1.innerHTML += i;
        }

    </script>
</head>