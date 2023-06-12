	<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/forme_général.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/tableau.css" media="screen"/>
  <title>Consultation</title>
  <meta charset="utf-8">
 </head>
 
 <body>
 <header>
   <nav>
   
    <ul>
			
		   <li><a href="index.html" >Accueil</a></li>
		   <li><a href="#">Consultation</a></li>
		   <li><a href="gest_projet.html"> Gestion du projet </a></li>
		   <li><a href="doss_gest/page_gest.html">Gestionnaire</a></li>
		   <li><a href="doss_admin/page_admin.html">Administrateur</a></li>

    </ul>
   </nav>
  </header> 
  
  <section>

<h2>Affichage de la dernière mesure de toutes les salles</h2>
	


<?php 

require 'dern_val.php';

?>


 </section>
 
 
 <footer class = "f1">
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>Département Réseaux et Télécommunications</li>
      <li>BUT1</li>
	</ul>  
  </footer>

</body>
</html>