<!DOCTYPE HTML>
<html>
<head>
  <title>Exemple</title>
</head>
<body>

  <?php
  	$nom = 'Dupont';
  	$prenom = 'Jean';
    echo "Bonjour " . $nom . " " . $prenom;
    echo "<br>";
  	$age = "50";
  	echo "J'ai $age ans <br>";

  	if ($age > 18 && $prenom == "Jean") {
  		echo "Majeur";
  	} elseif ($age >= 15) {
  		echo "Ado";
  	} else {
  		echo "Enfant";
  	}
  	

  ?>

</body>
</html>