<?php

$item1 = 1;
$item2 = 2.55;
$tax = 0.05;

$subtotal = $item1 + $item2;
$taxtotal = ($item + $item2) * $tax;
$total = $subtotal + $taxtotal;
$round = round($total, 2);

print "Item1: $item1</br>
Item2: $item2</br>
Subtotal: $subtotal</br>
Tax: $taxtotal</br>
Total: $round</br>";

$random = rand(0, 500);
print "The random number is: $random</br>";

?>
