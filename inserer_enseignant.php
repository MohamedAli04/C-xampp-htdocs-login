
<?php 

    require_once "conn.php";
    require_once "validate.php";

	$nom_enseignant = $_POST['nom_enseignant'];
	$no_tel = $_POST['no_tel'];
 
$sql ="INSERT INTO `enseignant` (`nom_enseignant`, `no_tel`,`formation`,`formule`) VALUES ('$nom_enseignant','$no_tel');";
$resultat=$conn->query($sql);


if ($resultat!=0) {
	echo "Bienvenue ";

}
else {
	echo "Veuillez bien saisir les champs";
}


 ?>