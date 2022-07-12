<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'affectation</title>
</head><link rel="stylesheet" type="text/css" href="">
<body background="body.jpg"><center>

<?php 
 require_once "conn.php";
 require_once "validate.php";

	$no_recu = $_POST['no_recu'];

	$date = $_POST['date'];
	$nom_etudiant = $_POST['nom_etudiant'];
	$date_naissance = $_POST['date_naissance'];
	$no_tel1 = $_POST['no_tel1'];
	$no_tel2 = $_POST['no_tel2'];

	$date = $_POST['date'];
 
$sql ="UPDATE `etudiant` SET `no_recu` = '$no_recu',`date` = '$date', `nom_etudiant` = '$nom_etudiant', `date_naissance` = '$date_naissance', `no_tel1` = '$no_tel1', `no_tel2` = '$no_tel2' WHERE `etudiant`.`no_recu` = '$no_recu';";
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