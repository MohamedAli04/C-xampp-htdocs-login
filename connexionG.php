<!DOCTYPE html>
<html>
<head>
	<title>Bienvenu sur notre plateforme</title>
</head><link rel="stylesheet" type="text/css" href="">
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue</title>
</head><meta charset="utf-8">
<h4 align="right">
	<br> <a href="menuad.html"> Deconnexion</a></h4>
<body background="body.jpg"><center><h1>
<?php
$serveur="localhost";
$artiste="root";
$mdp="";
$base="gestion_de_salles";
$sum=mysqli_connect($serveur,$artiste,$mdp,$base);
$id=$_POST['id'];
$mdp=$_POST['mdp'];
$requete="SELECT * FROM administrateur WHERE id='$id' AND mdp='$mdp'" ;
if(!$sum){
	echo "Erreur de connection a la base de donnée";
}
/*else{
	$resultat=mysqli_query($sum,"SELECT * FROM groupe WHERE nomgroupe='$nomgroupe'");
	if(mysqli_num_rows($resultat)==0){
		echo "Vous n'etes pas inscris a notre CD-Theques";
	}
	else {
		$_SESSION['nomartiste']=$nomgroupe;
		echo $nomgroupe; echo " Bienvenu a notre CD-Theques";	}
}*/
elseif ($requete=!0) {
	echo "Bienvenu ";?><br><br>
<td><a href="gestion_des_etudiants.html"><input type="submit" value="Gestion des Etudiants"></a></td>
<td><a href="gestion_des_enseignants.html"><input type="submit" value="Gestion des Enseignants"></a></td>
<td><a href="gestion_des_salles.html"><input type="submit" value="Gestion des Salles"></a></td>
<td><a href="gestion_des_classes.html"><input type="submit" value="Gestion des Classes"></a></td>


	<?php
}else{echo "Veuillez resaissir le nom d'administrateur";}  ?>

</h1>

</center>
  

  </body>
  </html>