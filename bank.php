<?php

error_reporting(-1);

function calculate($money) {
$credit=1.2;
$taxe=$money/10;
$total=$money*$credit+$taxe;
return $total;
}
$firstBank=calculate(10000);
echo "First Bank: $firstBank UAH\n";

function calculate2($money2) {
$credit2=1.15;
$taxe2=$money2/15;
$total2=$money2*$credit2+$taxe2;
return $total2;
}
$secondBank=round(calculate2(10000),2);
echo "Second Bank: $secondBank UAH\n";

if ($secondBank>$firstBank) {
	echo "Go FIRST";
} else {
	echo "Go SECOND";
}