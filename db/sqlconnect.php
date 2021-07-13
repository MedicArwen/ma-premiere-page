<?php       
try
{

    $pdo = new PDO('mysql:host=localhost;dbname=qencrdfc_decnum', 'decnum', 'HNE8AEHLmqHVX3Q');    
}   
catch (Exception $e)
{
    die ('erreur:'. $e->getMessage());
}
?>