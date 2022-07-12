<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'affectation</title>
</head><link rel="stylesheet" type="text/css" href="">
<body background="body.jpg"><center>

<?php 
 require_once "conn.php";
 require_once "validate.php";

	$id_enseignant = $_POST['id_enseignant'];
	$nom_enseignant = $_POST['nom_enseignant'];
	$no_tel = $_POST['no_tel'];

	 
$sql ="UPDATE `enseignant` SET `nom_enseignant` = '$nom_enseignant', `no_tel` = '$no_tel' WHERE `enseignant`.`id_enseignant` = '$id_enseignant';";
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