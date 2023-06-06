<?php
// Connection à la base de données
require 'connexion_bd.php';

// Compte le nombre de capteurs
$sql = "SELECT COUNT(DISTINCT ID_Cap) AS count FROM capteur";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];



// Parcourir les capteurs
for ($i = 1; $i <= $count; $i++) {
    $sql2 = "SELECT * FROM mesure
            WHERE ID_Cap = $i
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

    // Affichage des dernières valeurs et ne pas afficher si c'est vide
	if (!empty($row2)) {
        $date = isset($row2['date']) ? date('Y-m-d', strtotime($row2['date'])) : '';
        $heure = isset($row2['horaire']) ? date('H:i:s', strtotime($row2['horaire'])) : '';
        $mesure = isset($row2['valeur']) ? $row2['valeur'] : '';
        echo '<tr><td>', $date, '</td><td>', $heure, '</td><td>', $mesure, '</tr>';
    }

    echo '</table>';
}

// Déconnexion de la base de données
mysqli_close($conn);
?>