<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'j9hn2x2');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query(' SELECT *
FROM clients LIMIT 0,20');
echo '<h1>20 premier clients</h1>';
// Affichage de chaque nom
while ($donnees = $reponse->fetch())
{
    echo '<p>Nom = ' . $donnees['lastName'] . ' - Prénom = ' . $donnees['firstName'] . '</p>';;
}
$reponse->closeCursor();
?>