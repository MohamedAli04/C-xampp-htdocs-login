
<?php 

    require_once "conn.php";
    require_once "validate.php";

	$id_salle = $_POST['id_salle'];
	$nom_salle = $_POST['nom_salle'];
	$local = $_POST['local'];
	$capacite = $_POST['capacite'];
 
$sql ="INSERT INTO `salle` (`id_salle`, `nom_salle`, `local`, `capacite`) VALUES ('$id_salle','$nom_salle','$local','$capacite');";
$resultat=$conn->query($sql);


if ($resultat!=0) {
	echo "Bienvenue ";

}
else {
	echo "Veuillez bien saisir les champs";
}


 ?>