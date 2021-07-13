<!DOCTYPE html>
<html>
<body>
/*
exercice 1:
<ul>
<li>créer une variable prenom contenant votre prénom</li>
<li>créer une variable age contenant votre age</li>
<li>créer une variable ageFutur contenant votre $age +10 ans</li>
<li>ecrire la phrase "dans 10 ans $prenom aura $ageFutur"</li>
<li>creer une variable agePasse contenant votre $age-10 ans</li>
</ul>
*/
<?php
/*créer une variable prenom contenant votre prénom */
$prenom = "Thierry";
/*créer une variable age contenant votre age*/
$age = 43;
/*créer une variable ageFutur contenant votre $age +10 ans*/
$ageFutur = $age+10;
/*créer une variable agePasse contenant votre $age -10 ans*/
$agePasse = $age-10;

echo "Bonjour, je suis $prenom et j'ai $age <hr>";
echo "bonjour, je suis $prenom et j'aurais $ageFutur ans dans 10 ans<br>";
echo "bonjour, je suis $prenom et j'avais $agePasse ans il y a 10 ans<br>";
?>

</body>
</html>
