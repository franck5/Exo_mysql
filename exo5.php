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
FROM clients ORDER BY lastName');
echo '<h1>Client dont le nom commence par la lettre "M"</h1>';
// Affichage de chaque nom
while ($donnees = $reponse->fetch()){
	if (substr($donnees['lastName'],  0, 1) == "M") {
		
    echo '<p>Nom = ' . $donnees['lastName'] . ' - Prénom = ' . $donnees['firstName'] . '</p>';
	}

}
$reponse->closeCursor();
?>