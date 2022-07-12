<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'affectation</title>
</head><link rel="stylesheet" type="text/css" href="">
<body background="body.jpg"><center>

<?php 
 require_once "conn.php";
 require_once "validate.php";

	$id_salle = $_POST['id_salle'];
	$nom_salle = $_POST['nom_salle'];
	$local = $_POST['local'];
	$capacite = $_POST['capacite'];

	
 
$sql ="UPDATE `salle` SET `id_salle` = '$id_salle', `nom_salle` = '$nom_salle', `local` = '$local',`capacite` = '$capacite'WHERE `salle`.`id_salle` = '$id_salle';";
$resultat=$conn->query($sql);

if (($resultat)!=0) {
	echo "Donnees modifier avec succés";
	//
}
else {
 	echo "Erreur de requête !";
 } ?><br><center> 
</center>
</center>
</body>
</html>