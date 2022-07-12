<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'Affectation</title>
</head><link rel="stylesheet" type="text/css" href="">
<body background="body.jpg"><center>

<?php 
 require_once "conn.php";
 require_once "validate.php";

$nom_enseignant=$_POST['nom_enseignant'];
$sql ="SELECT * FROM enseignant WHERE  nom_enseignant='$nom_enseignant';";
$resultat=$conn->query($sql);

 if (mysqli_num_rows($resultat)<>0) {
	 
while($row=mysqli_fetch_array($resultat)){?>
<table  border="5">
	<tr><td>Identifiant de l'enseignant</td><td>Nom d'enseignant</td><td>N° téléphone </td>
	<tr>
		<td><?php echo $row['id_enseignant'];  ?></td>
		<td><?php echo $row['nom_enseignant'];  ?></td>
		<td><?php echo $row['no_tel'];  ?></td>

	</tr></table>
<?php }}
else {
 	echo "Enseignant Introuvable !";
 } ?><br><center> 
</center>


	

 

</center>
</body>
</html>