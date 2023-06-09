<?php
// Connection to the database
require 'connexion_bd.php';

// Query to count the number of sensors
$sql = "SELECT COUNT(DISTINCT nom) AS count FROM capteur";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$nb_cap = $row ['count'];


for ($i = 1; $i <= $nb_cap; $i++){
// Query to search for the name of the sensor
	$sql2 = "SELECT DISTINCT Nom FROM capteur
	ORDER BY nom ASC 
	LIMIT " . ($i - 1) . ", 1";
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($result2);
	$cap = $row2['Nom'];

	
// Query to search for the ID of the sensor
	$sql3 = "SELECT * FROM capteur
			WHERE Nom LIKE '$cap'";
	$result3 = mysqli_query($conn, $sql3);
	$row2 = mysqli_fetch_assoc($result3);
	$ID_cap = $row2['ID_Cap'];
	
// Query to search for the latest measurement of the sensor
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

// Data retrieval
	$date = $row4['Date']; 
	$heure = $row4['Horaire'];
	$heure_formatee = date("H:i:s", strtotime($heure));
	$mesure = $row4['Valeur'];
	
// Displaying the latest values
        echo '<tr><td>', $date, '</td><td>', 
						 $heure_formatee, '</td><td>', 
						 $mesure, '</tr>';

    
    echo '</table> <br>';
}




// Disconnecting from the database
mysqli_close($conn);
?>