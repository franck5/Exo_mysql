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
FROM clients');
echo '<h1>Clients card</h1>';
// Affichage de chaque nom
while ($donnees = $reponse->fetch()){
	if ($donnees['card'] == 1) {
		# code...
    echo '<p>Nom = ' . $donnees['lastName'] . ' - Prénom = ' . $donnees['firstName'] . '</p>';;
	}
}
$reponse->closeCursor();
?>