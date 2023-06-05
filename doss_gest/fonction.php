<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="../styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../styles/forme_général.css" media="screen"/>
  <title>Gestionaire</title>
  <meta charset="utf-8">
 </head>
 
 <body>
 <header>
   <nav>
   
    <ul class="ul3">
			
		   <li><a href="../index.php" >Accueil</a></li>
		   <li><a href="../consultation.php">Consultation</a></li>
		   <li><a href="../gest_projet.html"> Gestion du projet </a></li>
		   <li><a href="page_gest.html">Gestionnaire</a></li>
		   <li><a href="../doss_admin/page_admin.html">Administrateur</a></li>

    </ul>
   </nav>
  </header> 
  
  
  
  <section>
<?php 
//Connection à la base de donnée
require '../connexion_bd.php';

// Selection uniquement du batiment du gestionnaire
$sql = "SELECT ID_Bat FROM batiment
			 WHERE Login_gest = '$username' AND mdp_gest = '$password'
			 LIMIT 1;";
	$result = mysqli_query($conn, $sql);
	$bat = mysqli_fetch_assoc($result);
	 $batID = $bat['ID_Bat'];
echo "<h2>Choisir qu'elles données afficher pour le Batiment $batID </h2>"

if (mysqli_num_rows($result) == 1) {
    header('Location: gest_sql.php?username=' . urlencode($username) . '&password=' . urlencode($password));
    exit();
}
	
?>

		<form action="gest_sql.php" method="post">
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
