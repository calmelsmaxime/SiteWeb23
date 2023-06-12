<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="../styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="../styles/forme_général.css" media="screen"/>
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
// Connection to the database
require '../connexion_bd.php';


// Fetching data from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to fetch the user corresponding to the provided login credentials
$sql = "SELECT * FROM batiment 
		WHERE Login_gest = '$username' AND mdp_gest = '$password'
		LIMIT 1";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) == 1) {
	

// Select only the batiment belonging to the manager
	$sql = "SELECT ID_Bat FROM batiment
			WHERE Login_gest = '$username' AND mdp_gest = '$password'";
		$result = mysqli_query($conn, $sql);
		$bat = mysqli_fetch_assoc($result);
		 $batID = $bat['ID_Bat'];
		 
	echo "<h2>Choisir quelles sont les données à afficher pour le bâtiment $batID </h2>";

// Query to find the number of sensors
	$sql = "SELECT COUNT(*) AS nom FROM capteur
			WHERE ID_bat LIKE '$batID%'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_capteurs = $row['nom'];
	
// Query to retrieve the sensors
$sql2 = "SELECT DISTINCT nom FROM capteur
			WHERE ID_bat LIKE '$batID%'";
$result2 = mysqli_query($conn, $sql2);


//Disconnecting from the database
mysqli_close($conn);

// Display sensor information
echo '<strong> Le nom des capteurs de ce bâtiment sont : </strong> ';
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['nom'] . ', ';
    }

	echo '<br> &ensp; <form action="gest_sql.php" method="post">
				<label for="nom_capteur">Choix du capteur : </label><br>
				<input type="text" id="nom_capteur" name="nom_capteur"><br>
				
				<label for="plage">Date de début :</label><br>
				<input type="date" id="date_debut" name="date_debut"><br>
				
				<label for="plage">Date de fin :</label><br>
				<input type="date" id="date_fin" name="date_fin"><br>
				
				<input type="hidden" name="username" value="' . $username . '">
				<input type="hidden" name="password" value="' . $password . '">
				
				<input type="submit" value="Choix">
			</form>
			<footer>
		<ul>
		  <li>IUT de Blagnac</li>
		  <li>Département Réseaux et Télécommunications</li>
		  <li>BUT1</li>
		</ul>  
	  </footer>
	  
	</body>
	</html>';
   	
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect !"; 
}

?>
