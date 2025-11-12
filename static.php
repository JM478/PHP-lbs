<?php
$liter1 = 40.5;
$liter2 = 35.7;
$liter_preis = 1.499;

$liter_sum = $liter1+$liter2;
$kosten = $liter_sum*$liter_preis;
echo "Die Benzinkosten betragen für {$liter_sum} Liter {$kosten}€";