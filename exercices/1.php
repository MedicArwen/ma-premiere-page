<?php
echo "avec FOR";
    for($x = 4; $x <=12;$x++)
    {
        echo ('<p>'.$x.'</p>');
    }
echo "avec WHILE";
    $x = 4;
    while($x<13) 
    {
        echo ('<p>'.$x.'</p>');
        $x++;
    }
?>