<?php
require_once("yaml/yaml/yaml.php");
$data=yaml_parse_file('yaml/accueil.yaml');



echo "<h2>accueil</h2>\n";

	echo "<p>".ucfirst($data["prenom"])." : ".$data["nom"]." ".$data["accroche"]." ".$data["photo"]."</p>\n";




	$data=yaml_parse_file('yaml/apropos.yaml');

	echo "<h2>a propos</h2>\n";

		echo "<p>".ucfirst($data["titre"])." : ".$data["texte"]."</p>\n"

		?>
		<?php

$data=yaml_parse_file('yaml/competences.yaml');
	echo "<h2>competences</h2>\n";
	foreach($data AS $unDomaine){
		echo "<p>".$unDomaine["categorie"]."</p>";
		foreach($unDomaine["competences"] as $uneCompetence){
			echo "<p>".$uneCompetence["nom"]." : ".$uneCompetence["niveau"]."</p>";
		}
	}
?>

<?php
	$data=yaml_parse_file('yaml/experience.yaml');

		echo "<h2>experiences</h2>\n";
		foreach($data["experiences"] AS $uneExperience){
			echo "<p>".$uneExperience["nom"]." : ".$uneExperience["poste"]." : ".$uneExperience["tache"]."</p>";
		}

		echo '<a href="doc/'.$data["cv"].'" target="_blank">CV</a>';

?>

<?php
	$data=yaml_parse_file('yaml/formation.yaml');

		echo "<h2>formation</h2>\n";
		foreach($data["formations"] AS $uneFormation){
			echo "<p>".$uneFormation["nom"]." : ".$uneFormation["mention"]." : ".$uneFormation["fais"]."</p>";
		}

		$data=yaml_parse_file('yaml/contact.yaml');

		echo "<h2>contact</h2>\n";

			echo "<p>".ucfirst($data["num"])." : ".$data["mail"]."</p>\n";
