<?php
// Connection à la base de données
require 'connexion_bd.php';

// Compte le nombre de capteurs
$sql = "SELECT COUNT(DISTINCT nom) AS count FROM capteur";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$nb_cap = $row ['count'];


for ($i = 1; $i <= $nb_cap; $i++){
	// Recherche du nom du capteur
	$sql2 = "SELECT DISTINCT Nom FROM capteur
	ORDER BY nom ASC 
	LIMIT " . ($i - 1) . ", 1";
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($result2);
	$cap = $row2['Nom'];

	
	//recherche de l'id du capteur
	$sql3 = "SELECT * FROM capteur
			WHERE Nom LIKE '$cap'";
	$result3 = mysqli_query($conn, $sql3);
	$row2 = mysqli_fetch_assoc($result3);
	$ID_cap = $row2['ID_Cap'];
	
	//recherche de la dernière mesure du capteur
	$sql4 = "SELECT * FROM mesure
			WHERE ID_Cap LIKE '%" . $ID_cap . "%'
			ORDER BY date DESC, horaire DESC
			LIMIT 1";
    $result4 = mysqli_query($conn, $sql4);
	$row4= mysqli_fetch_assoc($result4);

    echo '
    <table class="tab">
        <caption>Salle ', $cap, '</caption>
        <tr>
            <th>Date</th>
            <th>Heure</th>
            <th>Valeur</th>
        </tr>';

	// récupération des données
	$date = $row4['Date']; 
	$heure = $row4['Horaire'];
	$heure_formatee = date("H:i:s", strtotime($heure));
	$mesure = $row4['Valeur'];
	
    // Affichage des dernières valeurs
        echo '<tr><td>', $date, '</td><td>', 
						 $heure_formatee, '</td><td>', 
						 $mesure, '</tr>';

    
    echo '</table> <br>';
}




// Déconnexion de la base de données
mysqli_close($conn);
?>