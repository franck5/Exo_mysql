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
FROM shows ORDER BY title');
echo '<h1>Spectacles</h1>';
// Affichage de chaque nom
while ($donnees = $reponse->fetch()){
	
		
    echo '<p>' . $donnees['title'] . '  par  ' . $donnees['performer'] . '  le  ' .  $donnees['date'] . '   à  ' . $donnees['startTime'] . '</p>';
	

}
$reponse->closeCursor();
?>