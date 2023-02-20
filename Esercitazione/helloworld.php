<!DOCTYPE html>

<!-- ESERCIZIO 1 -->
<?php
// echo "Hello, world!";
?>

<!-- ESERCIZIO 2 -->

<?php 
$x = 10;
$y = 7;
?>
<!-- 
<p> <?= $x ?> + <?= $y ?> = <?= $x+$y ?>
<br> <?= $x ?> - <?= $y ?> = <?= $x-$y ?>
<br> <?= $x ?> * <?= $y ?> = <?= $x*$y ?>
<br> <?= $x ?> / <?= $y ?> = <?= $x/$y ?>
<br> <?= $x ?> % <?= $y ?> = <?= $x%$y ?> </p>
-->

<!-- ESERCIZIO 3 -->

<?php 
$variabile = 8;
?>

<!-- 
<p>
Il valore adesso è <?= $variabile ?>. 
<br> Somma 2. Il valore adesso è <?= $variabile += 2?>.
<br> Sottrai 4. Il valore adesso è <?= $variabile -= 4?>.
<br> Moltiplica per 5. Il valore adesso è <?= $variabile *= 5?>.
<br> Dividi per 3. Il valore adesso è <?= $variabile /= 3?>.
<br> Incrementa il valore di un'unità. Il valore adesso è <?= $variabile++ ?>.
<br> Decrementa il valore di un'unità. Il valore adesso è <?= $variabile--?>.
</p>
-->

<!-- ESERCIZIO 4 -->

<?php 
$around = "around";
// echo 'What goes ' . $around, ', comes ' . $around;
?> 

<!-- ESERCIZIO 5 -->

<?php
$mese = date("F", time());
if ($mese == "August"){
  // echo "E' agosto, c'&egrave davvero molto caldo.";
}
else // echo "Non &egrave agosto, per lo meno non &egrave il periodo pi&ugrave caldo dell'anno.";
?>

<!-- ESERCIZIO 6 -->

<?php 
$ciclo = 1; ?>
<ul>
<?php 
for($ciclo; $ciclo <= 12; $ciclo++){ 
 //echo "<li> {$ciclo} * {$ciclo} = " . $ciclo*$ciclo . "</li>";
} ?>
</ul>

<!-- ESERCIZIO 7 -->

<table border="1" cellpadding="5" cellspacing="0">
  <?php for($i=1;$i<=7;$i++) 
	{ 
		//echo '<tr>'; 
		for($j=1;$j<=7;$j++) 
		{ 
			//echo "<td>" . $i*$j . "</td>"; 
		} 
		//echo '</tr>'; 
	} ?>
</table>

<!-- VAR_DUMP -->

<?php 
$a = array(1,2, array("a", "b", "c"));
var_dump($a);
?>


