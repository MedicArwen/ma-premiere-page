<?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=qencrdfc_decnum', 'qencrdfc_decnum', 'HNE8AEHLmqHVX3Q', $pdo_options);
    
    $reponse = $bdd->query('SELECT pseudo FROM membres;');
    
    while ($donnees = $reponse->fetch())
    {
        echo $donnees['pseudo'] .'<br />';
    }
    
    $reponse->closeCursor();
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>