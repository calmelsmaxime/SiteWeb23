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
 <h2>Choisir la donnée à supprimer</h2>

<?php 
//Displaying the measurements
require '../nb_mes.php';
echo "<br>";
?>
&ensp;

		<form action="supp_car_donn.php" method="post">
		
			<label for="ID_Mes">L'ID de la mesure : </label><br>
			<input type="number" id="ID_Mes" name="ID_Mes"><br>
			
			<input type="submit" value="Supprimer la valeur">
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
