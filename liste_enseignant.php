<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'Affectation</title>
</head><link rel="stylesheet" type="text/css" href=""><meta charset="utf-8">
<body>
<center><h1>Liste des Enseignants</h1>
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
$sql ="SELECT * FROM `enseignant`;";
$resultat=$conn->query($sql);


if (mysqli_num_rows($resultat)<>0) {
	 
while($row=mysqli_fetch_array($resultat)){?>
<table  border="5">
	<tr><td>Numero d'identifiant'</td><td>Nom d'enseignant</td><td>N° téléphone </td>
	<tr>
		<td><?php echo $row['id_enseignant'];  ?></td>
		<td><?php echo $row['nom_enseignant'];  ?></td>
		<td><?php echo $row['no_tel'];  ?></td>

	</tr></table>
<?php }}
else {
	echo "liste innexistante";
}


 ?>
 

</body>
</html>