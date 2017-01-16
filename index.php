<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP exercice formulaire POO</title>
</head>
<body>
	<?php

	Class Person {

		private $_nom;

		private $_prenom;

		function __construct($nom, $prenom) {
			$this->nom = $nom;
			$this->prenom = $prenom;
		}

		function getName() {
			return $this->prenom . " " . $this->nom ;
		}

	}


	$nom = $_GET["nom"];
	$prenom = $_GET["prenom"];

	$user = new Person($nom, $prenom);
	?>

	<h1>Bonjour, <?= $user->getName() ?> </h1>

	<form action="/" method="get">
		<div>
			<label for="nom">Nom :</label>
		</div>
		<div>
			<input id="nom" name="nom" type="text">
		</div>
		<div>
			<label for="prenom">Prénom :</label>
		</div>
		<div>
			<input id="prenom" name="prenom" type="text">
		</div>
		<div>
			<input type="submit" value="Envoyer">
		</div>
	</form>
</body>
</html>