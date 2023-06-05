<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="../styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../styles/forme_général.css" media="screen"/>
  <title>Administrateur</title>
  <meta charset="utf-8">
 </head>
 
 <body>
 <header>
   <nav>

    <ul class="ul3">
			
		   <li><a href="../index.php" >Accueil</a></li>
		   <li><a href="../consultation.php">Consultation</a></li>
		   <li><a href="../gest_projet.html"> Gestion du projet </a></li>
		   <li><a href="../doss_gest/page_gest.html">Gestionnaire</a></li>
		   <li><a href="page_admin.html">Administrateur</a></li>

    </ul>
   </nav>
  </header> 
  
 <section>
<?php
	echo 'rajouter un batiment, 
	supprimer un batiment,
	rajouter une donnée,
	supprimer une donnée';
?>


  <h2>Choisir qu'elles fonctionnalités à utiliser</h2>
		<form action="blblb.php" method="post">
			<label for="capteur">Choix du capteur : </label><br>
			<input type="text" id="capteur" name="capteur"><br>
			
			<label for="plage">Date de début :</label><br>
			<input type="date" id="date_debut" name="date_debut"><br>
			
			<label for="plage">Date de fin :</label><br>
			<input type="date" id="date_fin" name="date_fin"><br>
			
			<input type="submit" value="Choix">
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
