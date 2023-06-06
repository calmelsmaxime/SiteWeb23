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
  <h2> Voici ci-dessous les données choisis : </h2>
  </section>

&ensp;

  <section>

<?php

//Connection à la base de donnée
require '../connexion_bd.php';


// Récupération des données du formulaire
$capteur = $_POST['capteur'];
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];
$username = $_POST['username'];
$password = $_POST['password'];

//Récupération des valeurs username et password grâce à la superglobale $_GET

$username = $_GET['username'];
$password = $_GET['password'];


//Différence entre les deux dates pour trouver le nombre de jours
$date1 = strtotime($date_debut);
$date2 = strtotime($date_fin);
$diff = abs($date2 - $date1);
$nombreJours = floor($diff / (60*60*24));



// Création du tableau
echo '
    <table>
        <caption>Capteur ', $capteur,' </caption>
        <tr>
            <th>Date</th>
            <th>Heure</th>
            <th>Valeur</th>
        </tr>';
		

// Récupération des valeurs
$i = 0;
$date_de = $date_debut;
while ($i <= $nombreJours) {
    $sql = "SELECT mesure.*, batiment.* FROM mesure
            INNER JOIN batiment ON batiment.ID_Bat = mesure.ID_Cap
            WHERE mesure.ID_Cap = '$capteur' AND mesure.date = '$date_de' 
                AND batiment.Login_gest = '$username' AND batiment.mdp_gest = '$password'
            ORDER BY mesure.date DESC, mesure.horaire DESC";
    $result = mysqli_query($conn, $sql);

    // Affichage des valeurs
    while ($row = mysqli_fetch_assoc($result)) {
        $date = $row['date'];
        $heure = $row['horaire'];
        $mesure = $row['valeur'];
        echo '<tr><td>' . $date . '</td><td>' . $heure . '</td><td>' . $mesure . '</td></tr>';
    };
	
	// Ajout de 1 jour à la date actuelle
    $date_de = date('Y-m-d', strtotime($date_de . ' +1 day'));
	$i = $i+1;
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