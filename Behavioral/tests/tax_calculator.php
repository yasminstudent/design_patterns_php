<?php

require __DIR__ . '/../vendor/autoload.php';

use DesignPattern\Behavioral\Budget;
use DesignPattern\Behavioral\Tax\ICMS;
use DesignPattern\Behavioral\Tax\ISS;
use DesignPattern\Behavioral\TaxCalculator;

$budget = new Budget();
$budget->value = 100;

$iss = new ISS();
$icms = new ICMS();

$taxCalculator = new TaxCalculator();
echo $taxCalculator->executeCalculation($budget, $icms); //espera-se 10