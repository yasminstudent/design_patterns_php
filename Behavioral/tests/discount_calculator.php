<?php

require __DIR__ . '/../vendor/autoload.php';

use DesignPattern\Behavioral\Budget;
use DesignPattern\Behavioral\DiscountCalculator;

$budget = new Budget();
$budget->value = 400;
$budget->quantityItems = 6;

$discountCalculator = new DiscountCalculator();
echo $discountCalculator->executeCalculation($budget); //esperase 40

