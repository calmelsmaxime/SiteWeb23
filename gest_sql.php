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
// Récupération des données du formulaire
$capteur = $_POST['capteur'];
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];


//Connection à la base de donnée
require 'connexion_bd.php';

// Création du tableau
echo '
    <table>
        <caption>Capteur ' . $capteur . '</caption>
        <tr>
            <th>Date</th>
            <th>Heure</th>
            <th>Valeur</th>
        </tr>';

// Récupération des valeurs
for ($date = $date_debut; $date <= $date_fin; $date++) {
    $sql = "SELECT * FROM mesure
            WHERE ID_Cap = '$capteur' AND date = '$date'
            ORDER BY date DESC, horaire DESC";
    $result = mysqli_query($conn, $sql);

    // Affichage des valeurs
    while ($row = mysqli_fetch_assoc($result)) {
        $date = $row['date'];
        $heure = $row['horaire'];
        $mesure = $row['valeur'];
        echo '<tr><td>' . $date . '</td><td>' . $heure . '</td><td>' . $mesure . '</td></tr>';
    }
}
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