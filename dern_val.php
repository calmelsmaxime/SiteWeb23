<?php
require 'connexion_bd.php';


// Compte le nombre de capteur
$sql = "SELECT COUNT(DISTINCT Nom) AS count FROM capteur";
$row = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($row);

// Créer les tableaux	
$i = 1;
while ($i < $result ){
	
	$sql2 = "SELECT * FROM mesure
			 WHERE ID_Cap = $i
			 ORDER BY date DESC, horaire DESC
			 LIMIT 1;";
	$row2 = mysqli_query($conn, $sql2);
	$result2 = mysqli_fetch_assoc($row2);

	echo '
		<table class="tab">
			<caption > Salle ',$i,' </caption>
			<tr> 
				<th> Date </th> <th> Heure </th> <th> Valeur </th> </tr>' ;
				
	// Affichage des dernière valeurs
	$date = $result2['date'];
	$heure = $result2['horaire'];
	$mesure = $result2['valeur'];
	echo '<tr> <td> ',$date;
	echo '</td><td> ',$heure;
	echo '</td><td> ',$mesure,'</tr>';
		
	// Incrémentation
	$i++;
}

?>