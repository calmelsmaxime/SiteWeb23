<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="styles/header.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/bas_de_page.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/forme_général.css" media="screen"/>
  <title>Acceuil</title>
  <meta charset="utf-8">
 </head>
 
 <body>
 <header>
   <nav>
   
    <ul>
		   <<li><a href="#" >Accueil</a></li>
		   <li><a href="consultation.php">Consultation</a></li>
		   <li><a href="gest_projet.html"> Gestion du projet </a></li>
		   <li><a href="doss_gest/page_gest.html">Gestionnaire</a></li>
		   <li><a href="doss_admin/page_admin.html">Administrateur</a></li>
   </nav>
  </header> 
  
  <section>
	<h2>Présentation</h2>
		<p> Nous allons vous présenter dans ce site web des données de 4 capteurs divisés dans 2 batiments, donc 2 capteurs par batiment.</p>
		<p>Ce projet à était effectué lors de la <strong>SAE 23</strong> en <strong>BUT1 Réseaux et Télécomunnication</strong> à l'IUT de Blagnac.</p>
  </section>

&ensp;
 
  <section>
	<h2>Solutions à cette problématique</h2>
		<p>Nous avons choisit la solution <strong>php</strong>.</p>
		<p>Elle consiste à créer une base de données et les faires apparaître dans un site web dynamique.</p>
  </section>
  
&ensp;

	<section>
<h2>Explication de la réalisation du projet pour la solution choisit</h2>
		<p> Pour réaliser cela, en premier nous avons récupéré les données grâce à un script <strong>bash</strong> et <strong>MQTT</strong>, donc grâce au système de souscrition à des broker.</p>
		<p>Nous avons ensuite utiliser pour stocker les données une base de données <strong> MySQL</strong>, voici une capture du shéma de la base de donnée.</p>
 
		<a TARGET="_blank" href="images/sql.png">
		<img class="image" alt="base sql" src="images/sql.png"> </a>
	
		<p> Pour finir, nous avons un dernier scripte <strong>bash</strong> qui permet de placer les données dans un tableau sur les différentes 
	pages de ce site, grâce à du code en <strong>PHP</strong> </p>
	</section>
	
 &emsp;
 
 <section>
<h2>Mention légales</h2>
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

