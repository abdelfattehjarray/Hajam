<!DOCTYPE html>
<html>
<head>
	<title>Réservation de salle de coiffure</title>
</head>
<body>
	<h1>Réservation de salle de coiffure</h1>
	<?php if (!isset($_POST['submit'])) { ?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required><br>

		<label for="prenom">Prénom :</label>
		<input type="text" id="prenom" name="prenom" required><br>

		<label for="email">E-mail :</label>
		<input type="email" id="email" name="email" required><br>

		<label for="date">Date :</label>
		<input type="date" id="date" name="date" required><br>

		<label for="heure">Heure :</label>
		<input type="time" id="heure" name="heure" required><br>

		<label for="duree">Durée :</label>
		<select id="duree" name="duree" required>
			<option value="30">30 minutes</option>
			<option value="60">60 minutes</option>
			<option value="90">90 minutes</option>
			<option value="120">120 minutes</option>
		</select><br>

		<label for="commentaire">Commentaire :</label><br>
		<textarea id="commentaire" name="commentaire"></textarea><br>

		<input type="submit" name="submit" value="Réserver">
	</form>
	<?php } else {
		// Récupération des données du formulaire
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$heure = $_POST['heure'];
		$duree = $_POST['duree'];
		$commentaire = $_POST['commentaire'];

		// Traitement des données (envoi d'un e-mail, insertion dans une base de données, etc.)

		// Affichage d'un message de confirmation
		echo "<h1>Merci, votre réservation a bien été enregistrée !</h1>";
		echo "<p>Vous avez réservé la salle de coiffure pour le $date à $heure, pour une durée de $duree minutes.</p>";
		echo "<p>Votre nom : $nom $prenom</p>";
		echo "<p>Votre e-mail : $email</p>";
		echo "<p>Votre commentaire : $commentaire</p>";
	} ?>
</body>
</html>
