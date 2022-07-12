<!DOCTYPE html>
<html>
<head>
	<title>Donnée de l'artiste</title>
</head><link rel="stylesheet" type="text/css" href="">
<body background="body.jpg"><center>

<?php 
 require_once "conn.php";
 require_once "validate.php";

$nom_salle=$_POST['nom_salle'];
$local=$_POST['local'];
$sql ="DELETE FROM salle WHERE nom_salle='$nom_salle' AND local='$local';";
$resultat=$conn->query($sql);

if (($resultat)!=0) {
	echo "Donnees supprimer avec succés";
	//
}
else {
 	echo "Erreur de requête !";
 } ?><br><center> 
</center>
</center>
</body>
</html>