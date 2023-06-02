<?php
require 'connexion_bd.php';


$sql = "SELECT COUNT(nom_colonne) AS count FROM ma_table";
$nb_capt = mysqli_query(SELECT COUNT(nom_colonne) AS count FROM ma_table);

$i=0

for (i < $nb_capt){
	
SELECT * FROM ma_table
WHERE ID_Capt = $i
ORDER BY date DESC, horaire DESC
LIMIT 1;

echo 
	<table class="tab">
		<caption > Salle $i </caption>
		<tr> 
			<th> Date </th> <th> Heure </th> <th> Valeur </th> </tr>
			
$j=0;
for (j< $nb_val){
	$date = $row['date'];
	$heure = $row['date'];
	$mesure = $row['date'];
	echo '<tr> <td>' $date;
	echo '</td><td>' $heure;
	echo '</td><td>' $mesure '</tr>';
	$j = $j+1;
}

}

?>