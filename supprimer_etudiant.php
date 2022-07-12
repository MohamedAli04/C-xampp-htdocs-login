<!DOCTYPE html>
<html>
<head>
	<title>Donnée de l'artiste</title>
</head><link rel="stylesheet" type="text/css" href="">
<body background="body.jpg"><center>

<?php 
 require_once "conn.php";
 require_once "validate.php";

$no_recu=$_POST['no_recu'];
$nom_etudiant=$_POST['nom_etudiant'];
$sql ="DELETE FROM etudiant WHERE no_recu='$no_recu' AND nom_etudiant='$nom_etudiant';";
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