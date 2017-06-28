<?php
// on se connecte à mysql :
try{
	$bdd = new PDO('mysql:dbname=test_base;host=localhost','root','j9hn2x2');
}
// en cas d'erreur on affiche un message :
catch (Exception $e){

	die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM test_table');

while($donnees=$reponse->fetch()){
  echo '<p>Nom user= ' . $donnees['nom'] . ' - Email user= ' . $donnees['email'];
}
?>