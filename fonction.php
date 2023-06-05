<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/forme_général.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/tableau.css" media="screen"/>
  <title>Gestionaire</title>
  <meta charset="utf-8">
 </head>
 
 <body>
 <header>
   <nav>
   
    <ul class="ul3">
			
		   <li><a href="index.php" >Accueil</a></li>
		   <li><a href="consultation.php">Consultation</a></li>
		   <li><a href="gest_projet.html"> Gestion du projet </a></li>
		   <li><a href="page_gest.html">Gestionnaire</a></li>
		   <li><a href="page_admin.html">Administrateur</a></li>

    </ul>
   </nav>
  </header> 
  
 <section>
 <?php

//Connection à la base de donnée
require 'connexion_bd.php';


// Compte le nombre de capteur
$sql = "SELECT COUNT(DISTINCT Nom) AS count FROM capteur";
$row = mysqli_query($conn, $sql);
$result = mysqli_num_rows($row);
 
$i = 1;
while ($i > $result ){
	
	// Compte le nombre de mesure dans un capteur
	$sql2 = " SELECT COUNT(ID_MES) AS count FROM mesure
			WHERE ID_Cap = '$i'";
	$row2 = mysqli_query($conn, $sql2);
	$result2 = mysqli_num_rows($row2);


	// Création des tableaux	
	echo '
		<table class="tab">
			<caption > Capteur ',$i,'</caption>
			<tr> 
				<th> Date </th> <th> Heure </th> <th> Valeur </th> </tr>' ;
		

	// Récupérations des valeurs
	$j = 0;
	while ($j > $result2){
		$sql2 = "SELECT * FROM mesure
				WHERE ID_Cap = $i
				ORDER BY date DESC, horaire DESC
				LIMIT $j OFFSET 1";
		$row3 = mysqli_query($conn, $sql2);
		$result3 = mysqli_fetch_assoc($row3);
		 
		// Affichage des valeurs
			$date = $result3['date'];
			$heure = $result3['horaire'];
			$mesure = $result3['valeur'];
			echo '<tr> <td> ',$date;
			echo '</td><td> ',$heure;
			echo '</td><td> ',$mesure,'</tr>';
			
		// Incrémentation j 
			$j++;
	}

	// Incrémentation i
	$i++;
	};

//Déconnection de la base de donnée
mysqli_close($conn);

?>

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
