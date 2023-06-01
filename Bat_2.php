<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/forme_général.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/tableau.css" media="screen"/>
  <title>Batiment 2</title>

  <meta charset="utf-8">
 </head>
 
 <body>
 <header>
   <nav>
   
    <ul class="ul3">
			
		   <li><a href="index.php" >Accueil</a></li>
		   <li><a href="Bat_1.php">Batiment 1</a></li>
		   <li><a href="Sol_php.php"> Solution php </a></li>
		   <li><a href="Sol_dock.php">Solution docker</a></li>

		   
    </ul>
   </nav>
  </header> 
  
   <section>
   
	<?php require 'capt2.php';?>
  </section>
  
&emsp;

  <section  class="section-suivante">
  
  	<h2>Se connecter en administrateur</h2>
		<p><a href="php/Bat_2_admin.php">Acc&egrave;s limit&eacute; : Administration de la base de donn&eacute;es 2 </a></p>
  
  </section>
   
 <footer>
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>Département Réseaux et Télécommunications</li>
      <li>BUT1</li>
	</ul>  
  </footer>
  
</body>
</html>
