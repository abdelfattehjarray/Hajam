<!DOCTYPE html>
<html>
<body>
	<?php
	// Vérifiez si le formulaire a été soumis
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // Récupérez les valeurs soumises du formulaire
	  $nom = $_POST["nom"];
	  $prenom = $_POST["prenom"];
	  $email = $_POST["email"];
	  $date = $_POST["date"];
	  $heure = $_POST["heure"];
	  $duree = $_POST["duree"];
	  
	  // Vérifiez que tous les champs obligatoires ont été remplis
	  if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($date) && !empty($heure) && !empty($duree)) {
		// Traitez les données soumises comme vous le souhaitez, par exemple, envoyez un email ou enregistrez-les dans une base de données.
		// Dans cet exemple, nous affichons simplement un message de confirmation.
		echo "Merci pour votre réservation, $prenom $nom !<br>";
		echo "Vous avez réservé la salle de coiffure pour le $date à $heure pour une durée de $duree heure(s).<br>";
		echo "Nous avons envoyé un e-mail de confirmation à $email.";
	  } else {
		// Si des champs obligatoires sont vides, affichez un message d'erreur
		echo "Veuillez remplir tous les champs obligatoires.";
	  }
	}
	?>
</body>
</html>
