<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'Affectation</title>
</head><link rel="stylesheet" type="text/css" href=""><meta charset="utf-8">
<body>
<center><h1>Liste des Etudiants</h1>
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
$sql ="SELECT * FROM `etudiant`;";
$resultat=$conn->query($sql);


if (mysqli_num_rows($resultat)<>0) {
	 
while($row=mysqli_fetch_array($resultat)){?>
<table  border="5">
	<tr><td>Numero de reçu</td><td>Date d'Enregistrement</td><td>Nom d'etudiant</td><td>Date de Naissance</td><td>N° de téléphone 1</td><td>N° téléphone 2</td>
	<tr>
		<td><?php echo $row['no_recu'];  ?></td>
		<td><?php echo $row['date'];  ?></td>
		<td><?php echo $row['nom_etudiant'];  ?></td>
		<td><?php echo $row['date_naissance'];  ?></td>
		<td><?php echo $row['no_tel1'];  ?></td>
		<td><?php echo $row['no_tel2'];  ?></td>

	</tr></table>
<?php }}
else {
	echo "liste innexistante";
}


 ?>
 </center>

</body>
</html>