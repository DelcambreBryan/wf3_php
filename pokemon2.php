<!DOCTYPE html>
<html>
	<head>
		<title>	Pokemon</title>
	</head>
	<body>
				<?php

		$pokemons = array(
			'0' => array(
				'Nom' => 'Pikachu',
				'PV' => 25,
				'ATK' => 15,
				'DEF' => 10,
			),
			'1' => array(
				'Nom' => 'Bulbizarre',
				'PV' => 30,
				'ATK' => 8,
				'DEF' => 20,
			),
			
		);
		/*foreach($pokemons as $pokemon) {
		    echo 'Nom : '.$pokemon['Nom'].'<br>';
		    echo 'PV : '.$pokemon['PV'].'<br>';
		    echo 'ATK : '.$pokemon['ATK'].'<br>';
		    echo 'DEF : '.$pokemon['DEF'].'<br><br>';
		}*/
		?>

		<section>
			<div id="Pikachu">
				<div style="float: left; height: 100px; width: 100px; background-image: url('https://vignette.wikia.nocookie.net/youtubepoop/images/f/f7/5Pikachu.png/revision/latest?cb=20141108062013'); background-position: center; background-size: cover;">
					
				</div>
				<div style="padding-top: 20px;">
					<?php 
						echo 'Nom : ' .$pokemons[0]['Nom'].'<br>';
						echo 'PV : ' .$pokemons[0]['PV'].'<br>';
						echo 'ATK : ' .$pokemons[0]['ATK'].'<br>';
						echo 'DEF : ' .$pokemons[0]['DEF'].'<br><br>';
						?>
				</div>
			</div>
			<div id="Bulbizarre">
				<div style="float: left; height: 100px; width: 100px; background-image: url('http://www.pokepedia.fr/images/thumb/e/ef/Bulbizarre-RFVF.png/250px-Bulbizarre-RFVF.png'); background-position: center; background-size: cover;">
					
				</div>
				<div style="padding-top: 20px;">
					<?php 
						echo 'Nom : ' .$pokemons[1]['Nom'].'<br>';
						echo 'PV : ' .$pokemons[1]['PV'].'<br>';
						echo 'ATK : ' .$pokemons[1]['ATK'].'<br>';
						echo 'DEF : ' .$pokemons[1]['DEF'].'<br>';
						?>
				</div>
			</div>



		</section>




	</body>
</html>


