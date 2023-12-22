<!DOCTYPE html>
<html>
<head>
	 	 <meta charset=« utf-8 »>
	 	 <title> présentation </title>
     <link rel="stylesheet" href="présentation.css"/>

</head>
<body>

  <nav>
    <p><img src="image/menubuger.png" /></p>
    <ul>
          <li><a href="#accueil">Accueil</a></li>
          <li><a href="#a-propos">a propos</a></li>
          <li><a href="#competence">competence</a></li>
          <li><a href="#experience">experience</a></li>
          <li><a href="#formation">formation</a></li>
          <li><a href="#contact">contact </a></li>
    </ul>
  </nav>




  <section id="accueil">


<?php
	require_once("yaml/yaml/yaml.php");
	$data=yaml_parse_file('yaml/accueil.yaml');
		echo "<h1>accueil</h1>\n";

		echo "<p>".ucfirst($data["prenom"])."</p>\n";
		echo "<p>".ucfirst($data["accroche"])."</p>\n";
?>

  </section>

	<section id="a-propos">
		<?php
		$data=yaml_parse_file('yaml/apropos.yaml');

		echo "<h1>à propos</h1>\n";

			echo "<p>".ucfirst($data["titre"])."</p>\n";
			echo "<p>".ucfirst($data["texte"])."</p>\n";
			?>
	</section>

	<section id="competence">
		<?php

$data=yaml_parse_file('yaml/competences.yaml');
	echo "<h1>competences</h1>\n";
	foreach($data AS $unDomaine){
		echo "<h2>".$unDomaine["categorie"]."</h2>";
		foreach($unDomaine["competences"] as $uneCompetence){
		//	echo "<p>".$uneCompetence["nom"]." : ".$uneCompetence["niveau"]."</p>";
			echo '<p>'.$uneCompetence["nom"].'<div class="niveau" style="width:'.$uneCompetence["niveau"].'px;"></div></p>';
		}
	}
?>


<section id="experience">
	<?php
		$data=yaml_parse_file('yaml/experience.yaml');

			echo "<h1>experiences</h1>\n";
			foreach($data["experiences"] AS $uneExperience){
				echo "<p>".$uneExperience["nom"]." : ".$uneExperience["poste"]." : ".$uneExperience["tache"]."</p>";
			}

			echo '<a href="doc/'.$data["cv"].'" target="_blank">pour plus de détails voici le CV</a>';

	?>

</details>
  </section>


<section id="formation">
	<?php
		$data=yaml_parse_file('yaml/formation.yaml');

			echo "<h1>formation</h1>\n";
			foreach($data["formations"] AS $uneFormation){
				echo "<p>".$uneFormation["nom"]." : ".$uneFormation["mention"]." : ".$uneFormation["fais"]."</p>";
			}
	?>


</section>

<section id="contact">
	<?php
	$data=yaml_parse_file('yaml/contact.yaml');

	echo "<h1>contact</h1>\n";

		echo "<p>".ucfirst($data["num"])."</p>\n";
		echo "<p>".ucfirst($data["mail"])."</p>\n";
?>
<br>
<br>
<br>
<form method="post">
	<?php include("contact.php"); ?>
			 <label><div class= "mail"/>Votre email</div></label>
			 <input type="email" id="email" name="email" required <div class= "message"></div>
			 <label><div class= "mail"/>Message</div></label>
			 <textarea <div class="text" id="message" name="message" required></textarea></div>
			 <br>
			 <input <div class="bouton" type="submit"> </div>
	 </form>

</section>

	 <form action="verification.php" method="post">
        <label for="captcha">Entrez le code CAPTCHA :</label><br>
      	<!-- <img src="captcha.php" alt="CAPTCHA"><br> -->
        <input type="text" id="captcha" name="captcha"><br>
        <input type="submit" value="Vérifier">
    </form>


</body>

</html>
