<!DOCTYPE html>
<html>
<head>
    <title>Tankkosten</title>
</head>
<body>

<?php

$liter1 = 0;
$liter2 = 0;
$liter_preis = 0;

// Wenn der Button schon gedrückt wurde, werden die vorherigen Werte wiederverwendet
if ($_POST["berechnen"]) {
    $liter1 = floatval($_POST['l1']);
    $liter2 = floatval($_POST['l2']);
    $liter_preis  = floatval($_POST['lp']);
}
?>

<!-- Eingabefelder für Liter1, Liter2 und Literpreis -->
<form method="POST">
    Liter 1: <input type="number" name="l1" value="<?php echo $liter1; ?>"><br>
    Liter 2: <input type="number" name="l2" value="<?php echo $liter2; ?>"><br>
    Preis pro Liter: <input type="number" name="lp" value="<?php echo $liter_preis; ?>"><br>
    <input type="submit" text="Berechnen" name="berechnen">
</form>

<!-- Zeigt die kalkulierten Preise an. Erst wenn ausgerechnt wird, wird die Ausgabe angezeigt. -->
<?php if ($_POST["berechnen"]): ?>
<p>Die Benzinkosten betragen für <?php echo $liter1 + $liter2; ?> Liter <?php echo ($liter1 + $liter2) * $liter_preis; ?>€</p>
<?php endif; ?>

</body>
</html>