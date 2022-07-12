Author : Libane Gamal Hassan | tel 77 83 09 71 | email | libane.gamal@soprosys.com or libanehassan23@gmail.com

# Pour gérer les salles dispo ou les enseignant dispo ou les nouvelles classe 
 1 Creer un champs status dans votre table salle et que le champ soit boolean 
 2 Par defaut les champs sont dispo dont egal = true
 3 Si le salle n'est pas dispo le champ doit etre false
 
 Exemple de logique
 
   si le champ == true 
     declare un tableau est recupere les salles dispo 
   sinon les champ == false 
     envoi un message de erreur ou warning pour lui dire que le salle n'est disponible 
   
   
 Faire la meme chose pour les autres
   
  
 
