<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'j9hn2x2');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query(' SELECT type
FROM showTypes');
echo '<h1>Type de spectacle</h1>';
// Affichage de chaque nom
while ($donnees = $reponse->fetch())
{
    echo '<p>Type = ' . $donnees['type']. '</p>';
}
$reponse->closeCursor();
?>