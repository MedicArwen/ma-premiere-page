
<?php
echo "construction liste de héros";
$listeHeros=
[
    ['nom'=>'Clark','prenom'=>'kent','pseudo'=>'SuperMan','estSuperVilain'=>false],
    ['nom'=>'Brice','prenom'=>'Wayne','pseudo'=>'Batman','estSuperVilain'=>false],
    ['nom'=>'Romanof','prenom'=>'Natasha','pseudo'=>'Black Widow','estSuperVilain'=>false]
];

function afficherHeros($pHero)
{
    return '<li>'.$pHero['prenom'].' '.$pHero['nom'].' est '.$pHero['pseudo'];
    
}
?>