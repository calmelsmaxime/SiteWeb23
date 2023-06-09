<?php

require '../../connexion_bd.php';

$ID_Mes = $_POST['ID_Mes'];
$Date = $_POST['Date'];
$horaire = $_POST['horaire'];
$val = $_POST['val'];
$nom_cap = $_POST['nom_cap'];

$sql = "SELECT * FROM capteur 
        WHERE nom = '$nom_cap'
		ORDER BY ID_Cap ASC
        LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$ID_Cap = $row['ID_Cap'];
$ID_Bat = $row['ID_Bat'];
$type = $row['Type'];

$sql2 = "SELECT * FROM batiment 
        WHERE ID_Bat = '$ID_Bat%'
        LIMIT 1";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$nom_Bat = $row2['Nom'];
$log = $row2['Login_gest'];
$mdp = $row2['mdp_gest'];


// Concatenation of $ID_Bat and $ID_Cap.
$ID_Bat_Cap_Mes = $ID_Bat . $ID_Mes;


// Query to add the building if necessary (ignore if already present)
$sql3 = "INSERT IGNORE INTO batiment (ID_Bat, nom, login_gest, mdp_gest) 
         VALUES ('$ID_Bat_Cap_Mes', '$nom_Bat', '$log', '$mdp')";
$result3 = mysqli_query($conn, $sql3);

// Query to add the sensor if necessary (ignore if already present)
$sql4 = "INSERT IGNORE INTO capteur (ID_Cap, nom, Type, ID_Bat) 
         VALUES ('$ID_Bat_Cap_Mes', '$nom_cap', '$type', '$ID_Bat_Cap_Mes')";
$result4 = mysqli_query($conn, $sql4);

//Request to add the measure
$sql5 = "INSERT INTO mesure (ID_Mes, Date, horaire, Valeur, ID_Cap) 
         VALUES ('$ID_Bat_Cap_Mes', STR_TO_DATE('$Date', '%Y-%m-%d'), '$horaire', '$val', '$ID_Bat_Cap_Mes')";
$result5 = mysqli_query($conn, $sql5);


if ($result3 && $result4 && $result5) {
    echo "La donnée a été ajoutée avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'ajout de la donnée : " . mysqli_error($conn);
}

?>