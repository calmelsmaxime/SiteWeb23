<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="../../styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../../styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../../styles/forme_général.css" media="screen"/>
  <title>Administrateur</title>
  <meta charset="utf-8">
 </head>
 
 <body>
 <header>
   <nav>

    <ul class="ul3">
			
		   <li><a href="../../index.php" >Accueil</a></li>
		   <li><a href="../../consultation.php">Consultation</a></li>
		   <li><a href="../../gest_projet.html"> Gestion du projet </a></li>
		   <li><a href="../../doss_gest/page_gest.html">Gestionnaire</a></li>
		   <li><a href="../page_admin.html">Administrateur</a></li>

    </ul>
   </nav>
  </header> 


<section>
  <h2>Choisir les caractéristiques du capteur à ajouter</h2>

<?php 
//Affichage des batiments
require '../nb_capt.php';
echo "<br>";
require '../nb_bat.php';
echo "<br>";

?>
&ensp;

		<form action="aj_car_cap.php" method="post">
		
			<label for="ID_Cap">L'ID du capteur : </label><br>
			<input type="number" id="ID_Cap" name="ID_Cap"><br>
			
			<label for="nom">Son nom :</label><br>
			<input type="text" id="nom" name="nom"><br>
			
			<label for="type">Le type du capteur </label><br>
			<input type="text" id="type" name="type"><br>
			
			<label for="nom_Bat">Nom du Batiment : </label><br>
			<input type="text" id="nom_Bat" name="nom_Bat"><br>
			
			<input type="submit" value="Créer le capteur">
		</form>
 </section>

<footer>
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>Département Réseaux et Télécommunications</li>
      <li>BUT1</li>
	</ul>  
  </footer>
  
</body>
</html>