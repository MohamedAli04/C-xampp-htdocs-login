<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'Affectation</title>
</head><link rel="stylesheet" type="text/css" href=""><meta charset="utf-8">
<body>
<center><h1>Liste des Salles</h1>
<?php 

    require_once "conn.php";
    require_once "validate.php";

/*	$no_recu = $_POST['no_recu'];
	$nom_etudiant = $_POST['nom_etudiant'];
	$date_naissance = $_POST['date_naissance'];
	$no_tel1 = $_POST['no_tel1'];
	$no_tel2 = $_POST['no_tel2'];
	$formation = $_POST['formation'];
	$formule = $_POST['formule'];
 */
$sql ="SELECT * FROM `salle`;";
$resultat=$conn->query($sql);


if (mysqli_num_rows($resultat)<>0) {
	 
while($row=mysqli_fetch_array($resultat)){?>
<table  border="5">
	<tr><td>Code Salle</td><td>Nom Salle</td><td>Local</td><td>Capacité</td>
	<tr>
		<td><?php echo $row['id_salle'];  ?></td>
		<td><?php echo $row['nom_salle'];  ?></td>
		<td><?php echo $row['local'];  ?></td>
		<td><?php echo $row['capacite'];  ?></td>

	</tr></table>
<?php }}
else {
	echo "liste innexistante";
}


 ?>
 </center>

</body>
</html>