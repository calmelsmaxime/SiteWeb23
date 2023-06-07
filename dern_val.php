<?php
// Connection à la base de données
require 'connexion_bd.php';

// Compte le nombre de capteurs
$sql = "SELECT COUNT(DISTINCT nom) AS count FROM capteur";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];


// Parcourir les capteurs
for ($i = 1; $i <= $count; $i++) {
		$sql2 = "SELECT * FROM mesure
		WHERE ID_Cap LIKE '" . $i . "%'
        ORDER BY date DESC, horaire DESC
		LIMIT 1";
    $result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($result2);

    echo '
    <table class="tab">
        <caption>Salle ', $i, '</caption>
        <tr>
            <th>Date</th>
            <th>Heure</th>
            <th>Valeur</th>
        </tr>';

	// récupération des données
	$date = $row2['Date']; 
	$heure = $row2['Horaire'];
	$heure_formatee = date("H:i:s", strtotime($heure));
	$mesure = $row2['Valeur'];
	
    // Affichage des dernières valeurs
        echo '<tr><td>', $date, '</td><td>', 
						 $heure_formatee, '</td><td>', 
						 $mesure, '</tr>';

    
    echo '</table> <br>';
}

// Déconnexion de la base de données
mysqli_close($conn);
?>