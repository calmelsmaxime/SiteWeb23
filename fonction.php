<?php
 
require 'connexion_bd.php';


// Compte le nombre de capteur
$sql = "SELECT COUNT(DISTINCT Nom) AS count FROM capteur";
$row = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($row);
 
$i = 1;
while ($i < $result ){
	
	// Compte le nombre de mesure dans un capteur
	$sql2 = " SELECT COUNT(ID_MES) AS count FROM mesure
			WHERE ID_Cap = '$i'";
	$row2 = mysqli_query($conn, $sql2);
	$result2 = mysqli_fetch_assoc($row2);


	// Création des tableaux	
	echo '
		<table class="tab">
			<caption > Capteur ',$i,'</caption>
			<tr> 
				<th> Date </th> <th> Heure </th> <th> Valeur </th> </tr>' ;
		

	// Récupérations des valeurs
	$j = 0;
	while ($j < $result2){
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
	}


