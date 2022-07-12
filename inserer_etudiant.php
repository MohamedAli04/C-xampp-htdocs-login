
<?php 

    require_once "conn.php";
    require_once "validate.php";

	$no_recu = $_POST['no_recu'];
	$nom_etudiant = $_POST['nom_etudiant'];
	$date_naissance = $_POST['date_naissance'];
	$no_tel1 = $_POST['no_tel1'];
	$no_tel2 = $_POST['no_tel2'];

	$date = $_POST['date'];
	$formation = $_POST['formation'];
	$formule = $_POST['formule'];
	$level = $_POST['level'];
	
 
$sql ="INSERT INTO `etudiant` (`no_recu`, `date`,`nom_etudiant`, `date_naissance`, `no_tel1`, `no_tel2`) VALUES ('$no_recu','$date','$nom_etudiant','$date_naissance','$no_tel1','$no_tel2');";
$resultat=$conn->query($sql);

/*$sql1 ="INSERT INTO `module` (`formation`, `formule`) VALUES ('$formation','$formule');";
$resultat1=$conn->query($sql1);

$sql3 ="INSERT INTO `classe` (`level`) VALUES ('$level');";
$resultat3=$conn->query($sql3);


$sql4 ="INSERT INTO `salle` (`local`) VALUES ('$local');";
$resultat3=$conn->query($sql4);
*/
if ($resultat!=0) {
	$sql2 ="SELECT * FROM etudiant WHERE no_recu='$no_recu' AND nom_etudiant='$nom_etudiant';";
$resultat2=$conn->query($sql2);

 if (mysqli_num_rows($resultat2)<>0) {
	 
while($row=mysqli_fetch_array($resultat2)){?>
	<center>
<table  border="5">
	<tr><td>Numero du reçu</td><td>Nom d'etudiant</td><td>N° téléphone 1</td><td>Formation</td><td>Formule</td><td>Level</td><td>Enseignant</td><td>Salle</td><td>Local</td><td>Horaire</td><td>Jours</td></tr><tr>
		<td><?php echo $row['no_recu'];  ?></td>
		<td><?php echo $row['nom_etudiant'];  ?></td>
		<td><?php echo $row['no_tel1'];  ?></td>
		<td><?php echo $formation  ?></td>
		<td><?php echo $formule;  ?></td>
		<td><?php echo $level;  ?></td>
		<td><!--<?php echo $row['nom_enseignant'];  ?>--></td>
		<td><!--<?php echo $row['nom_salle'];  ?>--></td>
		<td><?php 
	if ($formule=='Informatique') {
			
		
		echo "Local 1"; }  ?></td>
		<td><!--<?php echo $row['horaire'];  ?>--></td>
		<td><!--<?php echo $row['jours'];  ?>--></td>

	</tr></table></center>

<?php }}





}
else {
	echo "Veuillez bien saisir les champs";
}

 ?>