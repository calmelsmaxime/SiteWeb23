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
			
		   <li><a href="../../index.html" >Accueil</a></li>
		   <li><a href="../../consultation.php">Consultation</a></li>
		   <li><a href="../../gest_projet.html"> Gestion du projet </a></li>
		   <li><a href="../../doss_gest/page_gest.html">Gestionnaire</a></li>
		   <li><a href="../page_admin.html">Administrateur</a></li>

    </ul>
   </nav>
  </header> 


<section>
  <h2>Choisissez les caractéristiques du Batiment à ajouter</h2>

<?php 
//Display of buildings

require '../nb_bat.php';
echo "<br>";
require '../nm_bat.php';
echo "<br>";

?>
&ensp;

		<form action="aj_car_bat.php" method="post">
		
			<label for="ID_Bat">L'ID du batiment : </label><br>
			<input type="number" id="ID_Bat" name="ID_Bat"><br>
			
			<label for="nom">Son nom :</label><br>
			<input type="text" id="nom" name="nom"><br>
			
			<label for="log_gest">Le login du gestionnaire : </label><br>
			<input type="text" id="log_gest" name="log_gest"><br>
			
			<label for="mdp_gest">Le mdp du gestionnaire : </label><br>
			<input type="text" id="mdp_gest" name="mdp_gest"><br>
			
			<input type="submit" value="Créer le Batiment">
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
