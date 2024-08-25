<?php

namespace App\Solution;

$eurosCount = 100;         
$dollarRate = 1.25;         
$rubleRate = 60;            
$dollars = $eurosCount * $dollarRate;
echo $dollars . "\n";
$rubles = $dollars * $rubleRate;
echo $rubles;