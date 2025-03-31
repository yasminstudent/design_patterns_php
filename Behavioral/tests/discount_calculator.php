<?php

require __DIR__ . '/../vendor/autoload.php';

use DesignPattern\Behavioral\Budget;
use DesignPattern\Behavioral\DiscountCalculator;
use DesignPattern\Behavioral\PaymentMethod\Enums\PaymentMethodEnum;

$budget = new Budget();
$budget->value = 300;
$budget->quantityItems = 6;
$budget->paymentMethod = PaymentMethodEnum::PIX;

$discountCalculator = new DiscountCalculator();
echo $discountCalculator->executeCalculation($budget); //esperase 45

