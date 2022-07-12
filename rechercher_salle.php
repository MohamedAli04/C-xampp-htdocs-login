<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'Affectation</title>
</head><link rel="stylesheet" type="text/css" href="">
<body background="body.jpg"><center>

<?php 
 require_once "conn.php";
 require_once "validate.php";

$nom_salle=$_POST['nom_salle'];
$local=$_POST['local'];

$sql ="SELECT * FROM salle  WHERE nom_salle='$nom_salle' And local='$local';";
$resultat=$conn->query($sql);

 if (mysqli_num_rows($resultat)<>0) {
	 
while($row=mysqli_fetch_array($resultat)){?>
<table  border="5">
	<tr><td>Code</td><td>Nom</td><td>Local</td><td>Capacité</td>
	</tr><tr>
		<td><?php echo $row['id_salle'];  ?></td>
		<td><?php echo $row['nom_salle'];  ?></td>
		<td><?php echo $row['local'];  ?></td>
		<td><?php echo $row['capacite'];  ?></td>

	</tr></table>
<?php }}
else {
 	echo "Salle Introuvable !";
 } ?><br><center> 
</center>


	

 

</center>
</body>
</html>