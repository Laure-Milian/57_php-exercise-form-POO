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
		private $_civilite;

		function __construct($nom, $prenom, $civilite) {
			$this->nom = $nom;
			$this->prenom = $prenom;
			$this->civilite = $civilite;
		}

		function getName() {
			return $this->civilite . " " . $this->prenom . " " . $this->nom ;
		}

	}


	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$civilite = $_POST["civilite"];
	$user = new Person($nom, $prenom, $civilite);
	
	if (!isset($_POST["change"])) :

?>

	<h1>Bonjour, <?= $user->getName() ?> </h1>
	<form action="/" method="post">
		<input type="hidden" name="change">
		<input type="submit" value="Changer d'utilisateur">
	</form>

<?php else : ?>

	<form action="/" method="post">
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
			<label for="civilite">Civilité :</label>
			<select name="civilite" id="civilite">
				<option value="Monsieur">Monsieur</option>
				<option value="Madame">Madame</option>
			</select>
		</div>
		<div>
			<input type="submit" value="Envoyer">
		</div>
	</form>
<?php endif; ?>
</body>
</html>