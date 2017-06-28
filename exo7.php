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
echo '<h1>Spectacles</h1>';
// Affichage de chaque nom
while ($donnees = $reponse->fetch()){
	
		
    echo '<p>Nom : ' . $donnees['lastName'] . ' - Prénom : ' . $donnees['firstName'] . 'Date de naissance : ' . $donnees['birthDate'] . 'Carte de fidélité : ' . $donnees['card'] . 'Numéro de carte : ' . $donnees['cardNumber'] .'</p>';
	

}
$reponse->closeCursor();
?>