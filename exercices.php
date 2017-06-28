<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'j9hn2x2');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query(' SELECT lastName, firstName
FROM clients');
echo '<h1>Liste des clients</h1>';
// Affichage de chaque nom
while ($donnees = $reponse->fetch())
{
    echo '<p>Nom = ' . $donnees['lastName'] . ' - Prénom = ' . $donnees['firstName'] . '</p>';
}
$reponse->closeCursor();
?>