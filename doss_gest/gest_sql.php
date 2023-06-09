<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="../styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../styles/forme_général.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../styles/tableau.css" media="screen"/>
  <title>Gestionaire</title>
  <meta charset="utf-8">
 </head>
 
 <body>
 <header>
   <nav>
   
    <ul class="ul3">
			
		   <li><a href="../index.html" >Accueil</a></li>
		   <li><a href="../consultation.php">Consultation</a></li>
		   <li><a href="../gest_projet.html"> Gestion du projet </a></li>
		   <li><a href="page_gest.html">Gestionnaire</a></li>
		   <li><a href="../doss_admin/page_admin.html">Administrateur</a></li>

    </ul>
   </nav>
  </header> 
  
  <section>
<?php



// Récupération des données du formulaire
$nom_capteur = $_POST['nom_capteur'];
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];
$username = $_POST['username'];
$password = $_POST['password'];


  echo "<h2> Voici ci-dessous les données choisies du $date_debut au $date_fin : </h2>
  </section>

&ensp;

  <section>";


// Connection to the database
require '../connexion_bd.php';


// Table creation
echo '
    <table>
        <caption> ', $nom_capteur,' </caption>
        <tr>
            <th>Date</th>
            <th>Heure</th>
            <th>Valeur</th>
        </tr>';
		


// Recherche de l'ID du capteur 
$sql = "SELECT * FROM capteur        
            WHERE Nom = '$nom_capteur'
			ORDER BY ID_Cap ASC
            LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
    $ID_Cap = $row['ID_Cap'];


// Sensor ID search
$sql2 = " SELECT COUNT(ID_Cap) AS count FROM mesure
        WHERE ID_Cap LIKE '%_%$ID_Cap%'
        AND date BETWEEN '$date_debut' AND '$date_fin' ";
      $result2 = mysqli_query($conn, $sql2);
	
	$row2 = mysqli_fetch_assoc($result2);
	$nb_val = $row2['count']; 


//Displaying values in the table
for ($i= 1; $i <= $nb_val; $i++){
	
	// Retrieving measurement values within the interval
	$sql3 = "SELECT * FROM mesure 
			WHERE ID_Cap LIKE '%_%$ID_Cap%'
			AND date BETWEEN '$date_debut' AND '$date_fin'
			LIMIT " . ($i - 1) . ", 1";
	$result3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_assoc($result3);
	
    $date = $row3['Date']; 
	$heure = $row3['Horaire'];
	$heure_formatee = date("H:i:s", strtotime($heure));
	$mesure = $row3['Valeur'];
   
   // Displaying the latest values
        echo '<tr><td>', 
			$date, '</td><td>', 
			$heure_formatee, '</td><td>', 
			$mesure, '</tr>';
   
}

echo '</table>';


//Disconnecting from the database
mysqli_close($conn);
 
?>
</table>
</section>

&ensp;


<footer>
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>Département Réseaux et Télécommunications</li>
      <li>BUT1</li>
	</ul>  
  </footer>
  
</body>
</html>