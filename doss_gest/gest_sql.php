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



// Récupération des données du formulaire
$nom_capteur = $_POST['capteur'];
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];
$username = $_POST['username'];
$password = $_POST['password'];


  echo "<h2> Voici ci-dessous les données choisis du $date_debut au $date_fin : </h2>
  </section>

&ensp;

  <section>";


//Connection à la base de donnée
require '../connexion_bd.php';



// Création du tableau
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



// Cherche le nombre de valeur dans l'intervalle 
$sql2 = " SELECT COUNT(ID_Cap) AS count FROM mesure
        WHERE ID_Cap LIKE '$ID_Cap%'
		
        AND date BETWEEN '$date_debut' AND '$date_fin' ";
      $result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($result2);
	$nb_val = $row2['count']; 



// Affichage des valeurs dans le tableau
for ($i= 1; $i <= $nb_val; $i++){
	
	// Récupération des valeurs de mesure dans l'intervalle
	$sql3 = "SELECT * FROM mesure 
			WHERE ID_Cap LIKE '$ID_Cap%' 
			AND date BETWEEN '$date_debut' AND '$date_fin'
			LIMIT " . ($i - 1) . ", 1";
	$result3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_assoc($result3);
	
	//Affichage
    $date = $row3['Date']; 
	$heure = $row3['Horaire'];
	$heure_formatee = date("H:i:s", strtotime($heure));
	$mesure = $row3['Valeur'];
   
   // Affichage des dernières valeurs
        echo '<tr><td>', 
			$date, '</td><td>', 
			$heure_formatee, '</td><td>', 
			$mesure, '</tr>';
   
}

echo '</table>';


//Déconnection de la base de donnée
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