<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'Affectation</title>
</head><link rel="stylesheet" type="text/css" href="">
<body background="body.jpg"><center>

<?php 
 require_once "conn.php";
 require_once "validate.php";

$no_recu=$_POST['no_recu'];
$nom_etudiant=$_POST['nom_etudiant'];
$sql ="SELECT * FROM etudiant WHERE no_recu='$no_recu' AND nom_etudiant='$nom_etudiant';";
$resultat=$conn->query($sql);

 if (mysqli_num_rows($resultat)<>0) {
	 
while($row=mysqli_fetch_array($resultat)){?>
<table  border="5">
	<tr><td>Numero du reçu</td><td>Date d'Enregistrement</td><td>Nom d'etudiant</td><td>Date de Naissance</td><td>N° téléphone 1</td><td>N° téléphone 2</td>
		<td><?php echo $row['no_recu'];  ?></td>
		<td><?php echo $row['date'];  ?></td>
		<td><?php echo $row['nom_etudiant'];  ?></td>
		<td><?php echo $row['date_naissance'];  ?></td>
		<td><?php echo $row['no_tel1'];  ?></td>
		<td><?php echo $row['no_tel2'];  ?></td>

	</tr></table>
<?php }}
else {
 	echo "Etudiant Introuvable !";
 } ?><br><center> 
</center>


	

 

</center>
</body>
</html>