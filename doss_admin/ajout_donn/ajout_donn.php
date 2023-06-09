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
  <h2>Choisir les caractéristiques de la valeur à ajouter</h2>
		
<?php 
//Display of measurements and sensors

require '../nb_mes.php';
echo "  <br> ";
require '../nm_cap.php';
echo "<br>";
?>

&ensp;
		<form action="aj_car_val.php" method="post">
		
			<label for="ID_Mes">L'ID de la mesure : </label><br>
			<input type="number" id="ID_Mes" name="ID_Mes"><br>
			
			<label for="Date">Sa date :</label><br>
			<input type="date" id="Date" name="Date"><br>
			
			<label for="horaire">Son horaire : </label><br>
			<input type="time" id="horaire" name="horaire"><br>
			
			<label for="val">Sa valeur : </label><br>
			<input type="number" id="val" name="val"><br>
			
			<label for="nom_cap">Le nom de son capteur : </label><br>
			<input type="text" id="nom_cap" name="nom_cap"><br>
			
			<input type="submit" value="Créer la nouvelle valeur">
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
