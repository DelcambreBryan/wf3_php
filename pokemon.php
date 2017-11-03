<?php 


//pikachu
$attaque_pikachu=15;
$defense_pikachu=10;
$pv_pikachu=25;

//bulbizarre
$attaque_bulbizarre=8;
$defense_bulbizarre=20;
$pv_bulbizarre=30;

//pikachu atk bulbizarre
echo "<p>Pikachu attaque Bulbizarre</p>";
if ($attaque_pikachu > $defense_bulbizarre) {
	$coup = $attaque_pikachu -$defense_bulbizarre;
	$pv_bulbizarre -= $coup;
	echo "<p>Bulbizarre perd $coup PV, il lui reste $pv_bulbizarre PV.";
} else {
	$coup = ($defense_bulbizarre - $attaque_pikachu) / 2;
	$pv_pikachu -= $coup;
	$defense_bulbizarre -= 1;
	echo "<p>bulbizarre perd 1 PD, il lui reste $defense_bulbizarre PD</p>";
	echo "<p>Pikachu perd $coup PV, il lui reste $pv_pikachu PV</p>";
}
////////////////////////////////////////////////////////////////

echo "<p>Bulbizarre attaque Pikachu</p>";
if ($attaque_bulbizarre > $defense_pikachu) {
	$coup = $attaque_bulbizarre -$defense_pikachu;
	$pv_pikachu -= $coup;
	echo "<p>pikachu perd $coup PV, il lui reste $pv_pikachu PV.";
} else {
	$coup = ($defense_pikachu - $attaque_bulbizarre) / 2;
	$pv_bulbizarre -= $coup;
	$defense_pikachu -= 1;
	echo "<p>Pikachu perd 1 PD, il lui reste $defense_pikachu PD</p>";
	echo "<p>Bulbizarre perd $coup PV, il lui reste $pv_bulbizarre PV</p>";
}








if ($pv_bulbizarre <=0)
		echo "Bulbizarre est KO";
if ($pv_pikachu <=0)
		echo "Pikachu est KO";


//contre Atk




